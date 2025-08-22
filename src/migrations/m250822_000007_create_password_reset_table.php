<?php
use yii\db\Migration;

class m250822_000007_create_password_reset_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%password_reset}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'token' => $this->string(64)->notNull(),
            'requested_at' => $this->integer()->notNull(),
            'used' => $this->boolean()->notNull()->defaultValue(false),
        ]);
        $this->addForeignKey('fk_password_reset_user', '{{%password_reset}}', 'user_id', '{{%user}}', 'id', 'CASCADE');
    }
    public function safeDown()
    {
        $this->dropForeignKey('fk_password_reset_user', '{{%password_reset}}');
        $this->dropTable('{{%password_reset}}');
    }
}
