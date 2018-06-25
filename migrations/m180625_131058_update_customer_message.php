<?php

use yii\db\Migration;

/**
 * Class m180625_131058_update_customer_message
 */
class m180625_131058_update_customer_message extends Migration
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
        echo "m180625_131058_update_customer_message cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        for($i=1;$i<=3;$i++){
            $this->insert('customer_messages', [
                'id' => $i,
                'name' => 'Name'.$i,
                'email' => 'rocket'.$i.'@gmail.com',
                'text' => '+7(2'.$i.'1) '.$i.'3'.$i.'-2'.$i.'-1'.$i.'',
            ]);
        }


    }

    public function down()
    {

        $this->delete('customer_messages', 'id<=3');
        echo "m180620_105043_update_table_calls deleted.\n";

        return true;
    }


}
