<?php

use yii\db\Migration;

/**
 * Class m180705_094150_create_table_users
 */
class m180705_094150_create_table_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180705_094150_create_table_users cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
       $this->createTable('users', [
            'id' => $this->primaryKey(10),
            'api_id' => $this->string(15),
            'name' => $this->string(50)->notNull(),
            'login' => $this->string(30)->notNull(),
            'gender' => $this->integer(),
            'photo' => $this->string(255),
            'address' => $this->string(70),
            'organization' => $this->string(50),
            'position' => $this->string(25),
            'email' => $this->string(30)->notNull(),
            'mobile_phone' => $this->string(14),
            'working_phone' => $this->string(14),
            'password' => $this->string(32)->notNull(),
            'auth_key' => $this->string(32),
           'access_token' => $this->string(32)
        ]);
    }

    public function down()
    {
        echo "m180705_094150_create_table_users cannot be reverted.\n";
        $this->dropTable('users');
//        return false;
    }
    
}
