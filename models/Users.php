<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $api_id
 * @property string $name
 * @property string $login
 * @property int $gender
 * @property string $photo
 * @property string $address
 * @property string $organization
 * @property string $position
 * @property string $email
 * @property string $mobile_phone
 * @property string $working_phone
 * @property string $password
 * @property string $auth_key
 * @property string $access_token
 */
class Users extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['api_id', 'string'],
            ['photo', 'string'],
            ['gender', 'integer'],
            [['api_id'], 'string', 'max' => 15],
            [['name'], 'string', 'max' => 70],
            [['address'], 'string', 'max' => 70],
            [['organization'], 'string', 'max' => 50],
            [['position'], 'string', 'max' => 25],
            [['email'], 'string', 'max' => 30],
            [['mobile_phone', 'working_phone'], 'string', 'max' => 14],
            [['password', 'auth_key', 'access_token'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'api_id' => 'ID Api',
            'name' => 'ФИО',
            'login' => 'Идентифицирующий логин',
            'gender' => 'ПОЛ',
            'photo' => 'Фотография',
            'address' => 'Адрес',
            'organization' => 'Организация',
            'position' => 'Должность',
            'email' => 'Email',
            'mobile_phone' => 'Мобильный телефон',
            'working_phone' => 'Рабочий телефон',
            'password' => 'Пароль',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }

    public function uploadUserImage($file)
    {
        $name = md5(time() . $file->name) . '.' . pathinfo($file->name, PATHINFO_EXTENSION);
        if (!is_dir(Yii::getAlias('@web'). 'uploads/user_images/')) {
            mkdir(Yii::getAlias('@web'). 'uploads/user_images/', 0777, true);
            if( $file->saveAs( Yii::getAlias('@web') . 'uploads/user_images/' . $name ) )
            {
                $this->photo = $name;
            }
        } else {
            if( $file->saveAs( Yii::getAlias('@web') . 'uploads/user_images/' . $name ) )
            {
                $this->photo = $name;
            }
        }

    }

}
