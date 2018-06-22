<?php

use yii\db\Migration;

/**
 * Class m180620_144926_create_table_news
 */
class m180620_144926_create_table_news extends Migration
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
        echo "m180620_144926_create_table_news cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(70),
            'keywords' => $this->string(200),
            'description' => $this->string(255),
            'name' => $this->string(255)->notNull(),
            'content' => $this->text()->notNull(),
            'date' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
            'shortdesc' => $this->string(255)->notNull(),
            'slug' => $this->string(20)->notNull()->unique(),
            'media_id' => $this->integer(),     //temp
        ]);

        $this->createIndex(
            'FK_news_media',
            'news',
            'media_id'
        );

        $this->addForeignKey(
            'FK_news_media',
            'news',
            'media_id',
            'media',
            'id',
            'SET NULL'
        );

    }

    public function down()
    {

        $this->dropTable('news');
        echo "m180620_144926_create_table_news cannot be reverted.\n";

        return true;
    }

}
