<?php

namespace app\modules\admin;


/**
 * admin module definition class
 */
class Admin extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->layout = 'main';

//        \Yii::$app->set('user3', [
//            'class' => 'yii\web\User',
////            'identityClass' => 'app\models\UserIdentity',
//            'identityClass' => 'app\modules\admin\models\UserAdminIdentity',
//            'enableAutoLogin' => false,
//            'loginUrl' => ['admin/admin/login'],
//            'identityCookie' => ['name' => '_admin'],
//            'idParam' => 'admin_id', //this is important !
//        ]);
        // custom initialization code goes here
    }
}
