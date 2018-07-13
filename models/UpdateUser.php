<?php
/**
 * Created by PhpStorm.
 * User: mrloc
 * Date: 13.07.2018
 * Time: 15:50
 */

namespace app\models;


use yii\base\Model;

class UpdateUser extends Model
{

    public $name;
    public $email;
    public $photo;
    public $gender;
    public $address;
    public $organization;
    public $position;
    public $mobile_phone;
    public $working_phone;

    public function rules()
    {

        return [
            [['name', 'email'], 'required'],
            [['photo'], 'string'],
            [['gender'], 'integer'],
            [['name'], 'string', 'max' => 70],
            [['address'], 'string', 'max' => 70],
            [['organization'], 'string', 'max' => 50],
            [['position'], 'string', 'max' => 25],
            [['email'], 'string', 'max' => 30],
            [['mobile_phone', 'working_phone'], 'string', 'max' => 14],
        ];

    }

}