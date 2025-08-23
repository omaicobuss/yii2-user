<?php
use yii\db\Migration;

class m250822_000004_create_oauth_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%oauth}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'provider' => $this->string(32)->notNull(),
            'provider_id' => $this->string(128)->notNull(),
            'access_token' => $this->string(255),
            'refresh_token' => $this->string(255),
            'expires' => $this->integer(),
            'created_at' => $this->integer()->notNull(),
        ]);
        $this->addForeignKey('fk_oauth_user', '{{%oauth}}', 'user_id', '{{%user}}', 'id', 'CASCADE');
    }
    public function safeDown()
    {
        $this->dropForeignKey('fk_oauth_user', '{{%oauth}}');
        $this->dropTable('{{%oauth}}');
    }
}
