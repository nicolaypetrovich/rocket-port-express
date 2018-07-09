<?php

use yii\db\Migration;

/**
 * Class m180627_083350_update_offices
 */
class m180627_083350_update_offices extends Migration
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
        echo "m180627_083350_update_offices cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('offices', [
            'id'              => 1,
            'city'            => 'ЧЕРЕПОВЕЦ',
            'address'         => '162600, Вологодская область, г. Череповец, ул. К.Маркса, д. 78',
            'phone'           => '8 (800) 511-98-11',
            'working_hours'   => '<p>Пн.-пт.: с 09.00 до 18.00;без обеда;</p><p>сб.: с 10:00 до 16:00; вс.: выходной</p>',
            'email'           => 'info@port-express.net',
            'url'             => 'www.port-express.net',
            'map'             => '59.129558886776465,37.91835403282891',
        ]);
        $this->insert('offices', [
            'id'              => 2,
            'city'            => 'ВОЛОГДА',
            'address'         => '162600, Вологодская область, г. Вологда, ул. Благовещенская, 47',
            'phone'           => '8 (800) 511-98-11',
            'working_hours'   => '<p>Пн.-пт.: с 09.00 до 18.00; без обеда;</p><p>сб.: с 10:00 до 16:00; вс.: выходной</p>',
            'email'           => 'info@port-express.net',
            'url'             => 'www.port-express.net',
            'map'             => '55.75,37.61835403282891',
        ]);
    }

    public function down()
    {
        $this->delete('offices', 'id <= 2');

        echo "Default offices deleted\n";

//        return false;
    }

}
