<?php
namespace omaicobuss\user\models;

use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    // Métodos obrigatórios do IdentityInterface
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }
    /**
     * Busca usuário por e-mail
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    /**
     * Define e faz hash da senha
     */
    public function setPassword($password)
    {
        $this->password_hash = \Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Valida senha informada
     */
    public function validatePassword($password)
    {
        return \Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Atribui uma função ao usuário
     */
    public function assignRole($roleName)
    {
        $role = Role::findByName($roleName);
        if ($role) {
            // Supondo tabela user_role (user_id, role_id)
            \Yii::$app->db->createCommand()->insert('{{%user_role}}', [
                'user_id' => $this->id,
                'role_id' => $role->id,
            ])->execute();
            return true;
        }
        return false;
    }

    /**
     * Retorna as funções do usuário
     */
    public function getRoles()
    {
        return $this->hasMany(Role::class, ['id' => 'role_id'])
            ->viaTable('{{%user_role}}', ['user_id' => 'id']);
    }

    /**
     * Verifica se hoje é aniversário do usuário
     */
    public function isBirthday()
    {
        if (!$this->birthdate) return false;
        $today = date('m-d');
        return date('m-d', strtotime($this->birthdate)) === $today;
    }

    // ...existing code...
}
