<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\AdminLoginForm;
use app\models\Settings;
use Yii;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class AdminController extends Controller
{



    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionHome()
    {
        return $this->render('home');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionClients()
    {
        return $this->render('clients');
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionDelivery()
    {
        return $this->render('delivery');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionMedia()
    {
        return $this->render('media');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionMessage()
    {
        return $this->render('message');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionNews()
    {
        return $this->render('news');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionOffices()
    {
        return $this->render('offices');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionLogin()
    {
        $this->layout='login-layout.php';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new AdminLoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);


    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionServices()
    {
        return $this->render('services');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionCall()
    {
        return $this->render('call');
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionSettings()
    {
        $meta = Settings::find()
            ->select('key,value')
            ->leftJoin('media', '`settings`.`value` = `media`.`id`')->with('media')
            ->where(['like', 'key', 'global'])
            ->indexBy('key')
            ->all();
        return $this->render('settings',[
            'meta' => $meta
        ]);
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionSingleNew()
    {
        return $this->render('single_new');
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionSingleOffice()
    {
        return $this->render('single_office');
    }
}
