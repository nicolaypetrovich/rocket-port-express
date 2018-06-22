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
                'name' => ' Заголовок текстовой новости может быть длинным или в две три строки, например, это пример заголовка'.$i,
                'shortdesc' => 'Это пример текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример текста новости, сделан для того, чтобы было понятно, где будет текст'.$i,
                'content' => 'Some small content'.$i,
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
