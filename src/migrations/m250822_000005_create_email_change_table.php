<?php
use yii\db\Migration;

class m250822_000005_create_email_change_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%email_change}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'new_email' => $this->string(128)->notNull(),
            'token' => $this->string(64)->notNull(),
            'requested_at' => $this->integer()->notNull(),
            'confirmed' => $this->boolean()->notNull()->defaultValue(false),
        ]);
        $this->addForeignKey('fk_email_change_user', '{{%email_change}}', 'user_id', '{{%user}}', 'id', 'CASCADE');
    }
    public function safeDown()
    {
        $this->dropForeignKey('fk_email_change_user', '{{%email_change}}');
        $this->dropTable('{{%email_change}}');
    }
}
