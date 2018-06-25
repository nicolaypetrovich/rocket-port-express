<?php

use yii\db\Migration;

/**
 * Class m180625_130758_create_customer_message
 */
class m180625_130758_create_customer_message extends Migration
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
        echo "m180625_130758_create_customer_message cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $tableName = $this->db->tablePrefix . 'customer_messages';
        if ($this->db->getTableSchema($tableName, true) === null) {
            $this->createTable('customer_messages', [
                'id' => $this->primaryKey(),
                'name' => $this->string(50)->notNull(),
                'email' => $this->string(50)->notNull(),
                'text' => $this->string(255)->notNull(),
                'date' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            ]);
        }
        return true;
    }

    public function down()
    {
        echo "m180625_130758_create_customer_message cannot be reverted.\n";

        $this->dropTable('customer_messages');

        return true;
    }

}
