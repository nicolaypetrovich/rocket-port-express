<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $keywords
 * @property string $content
 * @property string $date
 * @property string $shortdesc
 * @property string $slug
 * @property string $media_pos
 * @property int $media_id
 *
 * @property Media $media
 */
class News extends ActiveRecord
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
            [['title', 'description', 'content', 'shortdesc', 'slug'], 'required'],
            [['date'], 'safe'],
            [['media_id'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['description', 'keywords', 'content', 'shortdesc'], 'string', 'max' => 200],
            [['slug'], 'string', 'max' => 20],
            [['media_pos'], 'string', 'max' => 10],
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
            'description' => 'Description',
            'keywords' => 'Keywords',
            'content' => 'Content',
            'date' => 'Date',
            'shortdesc' => 'Shortdesc',
            'slug' => 'Slug',
            'media_pos' => 'Media Pos',
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