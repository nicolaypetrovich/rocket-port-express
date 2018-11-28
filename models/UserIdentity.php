<?php
/**
 * Created by PhpStorm.
 * User: mrloc
 * Date: 06.07.2018
 * Time: 10:59
 */

namespace app\models;


use yii\web\IdentityInterface;

class UserIdentity extends Users implements IdentityInterface
{

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    public static function findByApi($api_id)
    {
        return static::findOne(['api_id' => $api_id]);
    }

    public static function findByLogin($login)
    {
        return static::findOne(['login' => $login]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }
}
