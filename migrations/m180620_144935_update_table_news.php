<?php

use yii\db\Migration;

/**
 * Class m180620_144935_update_table_news
 */
class m180620_144935_update_table_news extends Migration
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
        echo "m180620_144935_update_table_news cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        for ($i = 1; $i <= 10; $i++) {


            $this->insert('news', [
                'id' => $i,
                'title' => 'title'.$i,
                'description' => 'desc'.$i,
                'content' => 'Some small content'.$i,
                'shortdesc' => 'short Desc'.$i,
                'slug' => 'news_slug'.$i,
                'media_id' => $i,
            ]);
        }
    }

    public function down()
    {
        $this->delete('news', 'id<=10');

        return true;
    }

}