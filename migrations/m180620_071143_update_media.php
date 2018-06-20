<?php

use yii\db\Migration;

/**
 * Class m180620_071143_update_media
 */
class m180620_071143_update_media extends Migration
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
        echo "m180620_071143_update_media cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        for ($i=1; $i < 11; $i++) { 
            $this->insert('media', [
                'id' => $i,
                'name' => $i.'.jpg',
                'title' => 'Title #'.$i,
                'alt' => 'Alt #'.$i,
            ]);
        }

        echo "Default images created\n";

        return true;
    }

    public function down()
    {
        $this->delete('media', 'id<=10');

        echo "Default images deleted\n";

        return true;
    }
}
