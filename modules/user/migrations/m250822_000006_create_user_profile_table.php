<?php
use yii\db\Migration;

class m250822_000006_create_user_profile_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%user_profile}}', [
            'user_id' => $this->primaryKey(),
            'first_name' => $this->string(64),
            'last_name' => $this->string(64),
            'avatar' => $this->string(255),
            'bio' => $this->text(),
        ]);
        $this->addForeignKey('fk_user_profile_user', '{{%user_profile}}', 'user_id', '{{%user}}', 'id', 'CASCADE');
    }
    public function safeDown()
    {
        $this->dropForeignKey('fk_user_profile_user', '{{%user_profile}}');
        $this->dropTable('{{%user_profile}}');
    }
}
