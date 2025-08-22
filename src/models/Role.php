<?php
namespace omaicobuss\user\models;

use yii\db\ActiveRecord;

class Role extends ActiveRecord
{
    /**
     * Retorna todos os usuários com essa função
     */
    public function getUsers()
    {
        return $this->hasMany(User::class, ['id' => 'user_id'])
            ->viaTable('{{%user_role}}', ['role_id' => 'id']);
    }

    /**
     * Busca função pelo nome
     */
    public static function findByName($name)
    {
        return static::findOne(['name' => $name]);
    }

    /**
     * Atribui esta função a um usuário
     */
    public function assignToUser($userId)
    {
        \Yii::$app->db->createCommand()->insert('{{%user_role}}', [
            'user_id' => $userId,
            'role_id' => $this->id,
        ])->execute();
        return true;
    }

    public static function tableName()
    {
        return '{{%role}}';
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name', 'description'], 'string', 'max' => 128],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Nome',
            'description' => 'Descrição',
        ];
    }
}
