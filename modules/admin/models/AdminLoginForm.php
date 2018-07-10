<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property UserAdminIdentity|null $user This property is read-only.
 *
 */
class AdminLoginForm extends Model
{
    public $username;
    public $password;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
//            var_dump(Yii::$app->userAdmin->login($this->getUser(),  3600*24*30 ));
//            var_dump($this->getUser());
//            die();

            return Yii::$app->user->login($this->getUser(),  3600*24*30 );
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return UserAdminIdentity|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = UserAdminIdentity::findByUsername($this->username);
        }

        return $this->_user;
    }
}