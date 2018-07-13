<?php
/**
 * Created by PhpStorm.
 * User: gavre
 * Date: 13.07.2018
 * Time: 20:45
 */

namespace app\models;


use yii\base\Model;

class RegistrationForm extends Model
{

    public $name;
    public $login;
    public $email;
    public $organization;
    public $remember_me;
    public $password;
    public $password_repeat;

    public $user;

    public function rules()
    {

        return [
            [['name', 'email'], 'required'],
            [['name', 'email'], 'string', 'max' => 30],
            [['organization'], 'string', 'max' => 50],
            [['password'], 'required'],
            [['password'], 'string', 'max' => 25],
            [['password_repeat'], 'string'],
            ['password', 'compare', 'compareAttribute'=>'password_repeat', 'message'=>"Пароли не совпадают", 'type' => 'string' ],
        ];

    }

    public static function findByEmail($email)
    {
        if(UserIdentity::findByEmail($email))
        {
            return true;
        }

        return false;

    }
}