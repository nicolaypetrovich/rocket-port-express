<?php

use yii\db\Migration;

/**
 * Handles the creation of table `settings`.
 */
class m180619_130708_create_settings_table extends Migration
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
        echo 'Cannot be deleted';

    }


    public function up()
    {
        $tableName = $this->db->tablePrefix . 'settings';
        if ($this->db->getTableSchema($tableName, true) === null) {
            $this->createTable('settings', [
                'id' => $this->primaryKey(),
                'key' => $this->string(50)->unique()->notNull(),
                'value' => $this->string()->notNull()
            ]);
        }
        return true;
    }

    public function down()
    {
        $this->dropTable('settings');
        echo "table Settings deleted";
        return true;
    }

}
