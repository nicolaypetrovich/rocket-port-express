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
        Yii::$app->set('user', [
            'class' => 'yii\web\User',
            'identityClass' => 'app\models\Editor',
            'enableAutoLogin' => false,
            'loginUrl' => ['yonetim/default/login'],
            'identityCookie' => ['name' => 'editor', 'httpOnly' => true],
            'idParam' => 'editor_id', //this is important !
        ]);
        // custom initialization code goes here
    }
}
