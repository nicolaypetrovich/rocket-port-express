<?php

use yii\db\Migration;

/**
 * Class m180618_185945_create_table_pages
 */
class m180618_185945_create_table_pages extends Migration
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
        echo "m180618_185945_create_table_pages cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('pages', [
            'id' => $this->primaryKey(),
            'slug' => $this->string()->unique(),
            'title' => $this->string(70)->notNull(),
            'keywords' => $this->string(),
            'description' => $this->string(160),
            'content' => $this->text(),
        ]);

        echo "Table 'pages' created\n";

        return true;
    }

    public function down()
    {
        $this->dropTable('pages');

        echo "Table 'pages' deleted\n";

        return true;
    }
}
