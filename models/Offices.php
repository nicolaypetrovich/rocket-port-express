<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Offices".
 *
 * @property int $id
 * @property string $city
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $working_hours
 * @property string $url
 * @property string $map
 */
class Offices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['city', 'address', 'phone', 'working_hours'], 'required'],
            [['city', 'phone', 'map'], 'string', 'max' => 255],
            [['address', 'url'], 'string', 'max' => 70],
            [['email'], 'string', 'max' => 25],
            [['working_hours'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city' => 'Город',
            'address' => 'Адрес',
            'phone' => 'Телефон',
            'email' => 'Email',
            'working_hours' => 'Рабочие часы',
            'url' => 'Url',
            'map' => 'Карта',
        ];
    }
}
