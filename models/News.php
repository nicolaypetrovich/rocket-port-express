<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property string $name
 * @property string $content
 * @property string $date
 * @property string $shortdesc
 * @property string $slug
 * @property int $media_id
 *
 * @property Media $media
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'content', 'shortdesc', 'slug'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['media_id'], 'integer'],
            [['title'], 'string', 'max' => 70],
            [['keywords'], 'string', 'max' => 200],
            [['description', 'name', 'shortdesc'], 'string', 'max' => 255],
            [['slug'], 'string', 'max' => 20],
            [['slug'], 'unique'],
            [['media_id'], 'exist', 'skipOnError' => true, 'targetClass' => Media::className(), 'targetAttribute' => ['media_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'name' => 'Name',
            'content' => 'Content',
            'date' => 'Date',
            'shortdesc' => 'Shortdesc',
            'slug' => 'Slug',
            'media_id' => 'Media ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedia()
    {
        return $this->hasOne(Media::className(), ['id' => 'media_id']);
    }
}
