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
            'map'             => 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af68ca9a36edb8070f34f9fae7474370442386ee41851b8f7267328754b6fbb40&width=100%25&height=260&lang=ru_UA&scroll=false',
        ]);
        $this->insert('offices', [
            'id'              => 2,
            'city'            => 'ВОЛОГДА',
            'address'         => '162600, Вологодская область, г. Вологда, ул. Благовещенская, 47',
            'phone'           => '8 (800) 511-98-11',
            'working_hours'   => '<p>Пн.-пт.: с 09.00 до 18.00; без обеда;</p><p>сб.: с 10:00 до 16:00; вс.: выходной</p>',
            'email'           => 'info@port-express.net',
            'url'             => 'www.port-express.net',
            'map'             => 'https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A60874d5b8862268cc9d7933536a60e20b3914eba38d4f2672275ad85f9afa596&width=100%25&height=260&lang=ru_UA&scroll=false',
        ]);
    }

    public function down()
    {
        $this->delete('offices', 'id <= 2');

        echo "Default offices deleted\n";

        return false;
    }

}
