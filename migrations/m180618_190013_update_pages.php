<?php

use yii\db\Migration;

/**
 * Class m180618_190013_update_pages
 */
class m180618_190013_update_pages extends Migration
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
        echo "m180618_190013_update_pages cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->insert('pages', [
            'id' => 1,
            'slug' => 'index',
            'title' => 'Port Express',
            'keywords' => '',
            'description' => '',
            'content' => 'Page content was created from migrations.',
        ]);

        echo "Default pages created.\n";

        return true;
    }

    public function down()
    {
        $this->delete('news', ['pages' => 1]);

        echo "Default pages deleted.\n";

        return true;
    }
}
