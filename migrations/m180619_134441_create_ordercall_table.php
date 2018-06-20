<?php

use yii\db\Migration;

/**
 * Handles the creation of table `ordercall`.
 */
class m180619_134441_create_ordercall_table extends Migration
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


    public function up()
    {
        $tableName = $this->db->tablePrefix . 'ordercall';
        if ($this->db->getTableSchema($tableName, true) === null) {
            $this->createTable('ordercall', [
                'id' => $this->primaryKey(),
                'name' => $this->string(50)->notNull(),
                'phone' => $this->string(50)->notNull(),
                'date' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
            ]);
        }
        return true;
    }

    public function down()
    {
        $this->dropTable('ordercall');
        echo "table ordercalls deleted";
        return true;
    }


}
