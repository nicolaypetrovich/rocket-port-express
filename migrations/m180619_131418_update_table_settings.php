<?php

use yii\db\Migration;

/**
 * Class m180619_131418_update_table_settings
 */
class m180619_131418_update_table_settings extends Migration
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
        echo "m180619_131418_update_table_settings cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->insert('settings', [
            'id'=>1,
            'key' => 'global_address',
            'value' => "Наш адрес:<br>г. Череповец, ул.<br>К.Маркса, д. 78",
        ]);

        $this->insert('settings', [
            'id'=>2,
            'key' => 'global_headertext1',
            'value' => 'БЫСТРАЯ И ЭКОНОМИЧНАЯ',
        ]);

        $this->insert('settings', [
            'id'=>3,
            'key' => 'global_headertext2',
            'value' => 'ДОСТАВКА ВАШИХ ДОКУМЕНТОВ И ГРУЗОВ',
        ]);

        $this->insert('settings', [
            'id'=>4,
            'key' => 'global_email',
            'value' => "info@port-express.net",
        ]);

        $this->insert('settings', [
            'id'=>5,
            'key' => 'global_phone',
            'value' => "8 (800) 511-98-11",
        ]);


        echo "Default settings created.\n";

        return true;
    }

    public function down()
    {

        $this->delete('settings', ['id'=>'<=5']);

        echo "m180619_131418_update_table_settings cannot be reverted.\n";

        return true;
    }

}