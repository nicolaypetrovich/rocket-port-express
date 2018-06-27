<?php

use yii\db\Migration;

/**
 * Class m180627_083130_create_table_offices
 */
class m180627_083130_create_table_offices extends Migration
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
        echo "m180627_083130_create_table_offices cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('offices', [
            'id' => $this->primaryKey(),
            'city' => $this->string()->notNull(),
            'address' => $this->string(70)->notNull(),
            'phone' => $this->string()->notNull(),
            'email' => $this->string(25),
            'working_hours' => $this->string(100)->notNull(),
            'url' => $this->string(70),
            'map' => $this->string(255),
        ]);
    }

    public function down()
    {
        echo "m180627_083130_create_table_offices cannot be reverted.\n";

        return false;
    }

}
