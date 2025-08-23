<?php
use yii\db\Migration;

class m250822_000002_create_role_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%role}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull()->unique(),
            'description' => $this->string(255),
        ]);
        $this->createTable('{{%user_role}}', [
            'user_id' => $this->integer()->notNull(),
            'role_id' => $this->integer()->notNull(),
            'PRIMARY KEY(user_id, role_id)',
        ]);
        $this->addForeignKey('fk_user_role_user', '{{%user_role}}', 'user_id', '{{%user}}', 'id', 'CASCADE');
        $this->addForeignKey('fk_user_role_role', '{{%user_role}}', 'role_id', '{{%role}}', 'id', 'CASCADE');
    }
    public function safeDown()
    {
        $this->dropForeignKey('fk_user_role_user', '{{%user_role}}');
        $this->dropForeignKey('fk_user_role_role', '{{%user_role}}');
        $this->dropTable('{{%user_role}}');
        $this->dropTable('{{%role}}');
    }
}
