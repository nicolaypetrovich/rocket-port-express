<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "settings".
 *
 * @property int $id
 * @property string $key
 * @property array $value
 */
class Settings extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key', 'value'], 'required'],
            [['value'], 'string'],
            [['key'], 'string', 'max' => 50],
            [['key'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'value' => 'Value',
        ];
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedia()
    {
        return $this->hasOne(Media::className(), ['id' => 'value']);
    }
}