<?php
/**
 * Created by PhpStorm.
 * User: mrloc
 * Date: 13.07.2018
 * Time: 16:16
 */

namespace app\models;


use yii\base\Model;

class ResetUserPassword extends Model
{

    public $password;
    public $new_password;
    public $new_password_repeat;

    public function rules()
    {

        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            [['new_password', 'new_password_repeat'], 'required'],
            [['new_password', 'new_password_repeat'], 'string'],
            ['new_password', 'compare', 'compareAttribute'=>'new_password_repeat', 'message'=>"Пароли не совпадают", 'type' => 'string' ],
        ];

    }

}