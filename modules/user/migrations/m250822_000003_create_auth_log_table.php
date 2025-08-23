<?php
use yii\db\Migration;

class m250822_000003_create_auth_log_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%auth_log}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'ip' => $this->string(45),
            'attempted_at' => $this->integer()->notNull(),
            'success' => $this->boolean()->notNull()->defaultValue(false),
            'blocked' => $this->boolean()->notNull()->defaultValue(false),
        ]);
        $this->addForeignKey('fk_auth_log_user', '{{%auth_log}}', 'user_id', '{{%user}}', 'id', 'SET NULL');
    }
    public function safeDown()
    {
        $this->dropForeignKey('fk_auth_log_user', '{{%auth_log}}');
        $this->dropTable('{{%auth_log}}');
    }
}
