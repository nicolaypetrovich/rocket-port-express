<?php

use yii\db\Migration;

/**
 * Class m180620_105043_update_table_calls
 */
class m180620_105043_update_table_calls extends Migration
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

    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        for($i=1;$i<=3;$i++){
            $this->insert('ordercall', [
                'id' => $i,
                'name' => 'Name'.$i,
                'phone' => '+7(2'.$i.'1) '.$i.'3'.$i.'-2'.$i.'-1'.$i.'',
            ]);
        }


    }

    public function down()
    {

        $this->delete('ordercall', 'id<=3');
        echo "m180620_105043_update_table_calls deleted.\n";

        return true;
    }

}
