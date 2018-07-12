<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property int $gender
 * @property int $photo
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
class Users extends \yii\db\ActiveRecord
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
            [['name', 'email', 'password'], 'required'],
            [['gender', 'photo'], 'integer'],
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
            'name' => 'Username',
            'gender' => 'Gender',
            'photo' => 'Photo',
            'address' => 'Address',
            'organization' => 'Organization',
            'position' => 'Position',
            'email' => 'Email',
            'mobile_phone' => 'Mobile Phone',
            'working_phone' => 'Working Phone',
            'password' => 'Password',
            'auth_key' => 'Auth Key',
            'access_token' => 'Access Token',
        ];
    }
}
