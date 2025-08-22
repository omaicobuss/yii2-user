<?php
namespace omaicobuss\user\models;

use yii\db\ActiveRecord;

class AuthLog extends ActiveRecord
{
    /**
     * Registra tentativa de login
     */
    public static function logAttempt($userId, $ip, $success)
    {
        $log = new self();
        $log->user_id = $userId;
        $log->ip = $ip;
        $log->attempted_at = date('Y-m-d H:i:s');
        $log->success = $success ? 1 : 0;
        $log->save(false);
    }

    /**
     * Retorna tentativas recentes de login
     */
    public static function getRecentAttempts($userId, $limit = 10)
    {
        return self::find()->where(['user_id' => $userId])
            ->orderBy(['attempted_at' => SORT_DESC])
            ->limit($limit)
            ->all();
    }

    /**
     * Verifica se IP está bloqueado por excesso de tentativas
     */
    public static function isIpBlocked($ip, $maxAttempts = 5, $intervalMinutes = 15)
    {
        $since = date('Y-m-d H:i:s', strtotime("-{$intervalMinutes} minutes"));
        $failures = self::find()
            ->where(['ip' => $ip, 'success' => 0])
            ->andWhere(['>=', 'attempted_at', $since])
            ->count();
        return $failures >= $maxAttempts;
    }

    // Propriedades e métodos do log de autenticação
    public static function tableName()
    {
        return '{{%auth_log}}';
    }

    public function rules()
    {
        return [
            [['user_id', 'ip', 'attempted_at', 'success'], 'required'],
            [['user_id', 'success'], 'integer'],
            [['attempted_at'], 'safe'],
            [['ip'], 'string', 'max' => 45],
        ];
    }

    public function attributeLabels()
    {
        return [
            'user_id' => 'Usuário',
            'ip' => 'IP',
            'attempted_at' => 'Data/Hora',
            'success' => 'Sucesso',
        ];
    }
}
