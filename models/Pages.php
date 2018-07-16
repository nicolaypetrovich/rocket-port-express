<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pages".
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $content
 */
class Pages extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['content'], 'string'],
            [['slug', 'keywords'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 70],
            [['description'], 'string', 'max' => 160],
            [['slug'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'Slug',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'content' => 'Content',
        ];
    }

    public static function findBySlug($slug)
    {
        return static::findOne(['slug' => $slug]);
    }
}
