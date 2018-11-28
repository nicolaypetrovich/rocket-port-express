<?php
/**
 * Created by PhpStorm.
 * User: mrloc
 * Date: 06.07.2018
 * Time: 11:09
 */

namespace app\models;


use Yii;
use yii\base\Model;

class LoginForm extends Model
{

    public $login;
    public $password;
    public $rememberMe = true;

    private $_user = false;

    public function rules()
    {

        return [
            [['login', 'password'], 'required'],
            ['password', 'validatePassword']
        ];

    }

    public function validatePassword($attribute, $params)
    {
        if(!$this->hasErrors())
        {
            $user = $this->getUser();

            if(!$user)
            {
                $this->addError('error', 'Пользователь с таким логином не найден');
            }
            if($user && !$user->validatePassword($this->password))
            {
                $this->addError('error', 'Неверный пароль.');
            }
        }
    }

    public function login()
    {
        if($this->validate())
        {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*60 : 0);
        }
    }

    public function getUser()
    {
        if($this->_user === false)
        {
            $this->_user = UserIdentity::findBylogin($this->login);
        }
        return $this->_user;
    }

}