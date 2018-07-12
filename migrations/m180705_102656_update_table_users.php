<?php

use yii\db\Migration;

/**
 * Class m180705_102656_update_table_users
 */
class m180705_102656_update_table_users extends Migration
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
        echo "m180705_102656_update_table_users cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
     public function up()
     {
         $this->insert('users', [
             'id' => '1',
             'name' => 'Иванов Иван Иванович',
             'gender' => '1',
             'photo' => '',
             'address' => 'город 1 улица 1',
             'organization' => 'организация 1',
             'position' => 'должность 1',
             'email' => 'test1@test1.com',
             'mobile_phone' => '0 000 00 00 00',
             'working_phone' => '1 111 11 11 11',
             'password' => md5('user1'),
             'auth_key' => '',
             'access_token' => ''
         ]);

         $this->insert('users', [
             'id' => '2',
             'name' => 'Петров Петр Петрович',
             'gender' => '1',
             'photo' => '',
             'address' => 'город 2 улица 2',
             'organization' => 'организация 2',
             'position' => 'должность 2',
             'email' => 'test2@test2.com',
             'mobile_phone' => '2 222 22 22 22',
             'working_phone' => '3 333 33 33 33',
             'password' => md5('user2'),
             'auth_key' => '',
             'access_token' => ''
         ]);
     }

     public function down()
     {
         $this->delete('users', 'id<=2');

//         return false;
     }
    
}
