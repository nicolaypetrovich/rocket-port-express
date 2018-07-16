<?php

namespace app\modules\admin\controllers;

use app\models\Media;
use app\models\Pages;
use app\modules\admin\models\AdminLoginForm;
use app\models\Settings;
use app\models\Ordercall;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Response;
use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class AdminController extends Controller
{


    public function beforeAction($action)
    {
        $session = Yii::$app->session;

        if($action->id!='login') {

            if($session->get('admin')!=='yes'){

                return $this->redirect(\yii\helpers\Url::base() . '/admin/admin/login');
            }
        }else{
            if($session->get('admin')==='yes'){
                return $this->redirect(\yii\helpers\Url::base() . '/admin/admin/home');
            }

        }
        return parent::beforeAction($action);
    }

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
        $meta = Settings::find()->select('key,value')
            ->leftJoin('media', '`settings`.`value` = `media`.`id`')->with('media')
            ->where(['like', 'key', 'index'])
//            ->where(['like', 'key', 'img'])
            ->indexBy('key')
//            ->asArray()
            ->all();
        return $this->render('home',[
            'meta'=>$meta
            ]);
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
    public function actionLogin()
    {
        $this->layout='login-layout.php';

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new AdminLoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(\yii\helpers\Url::base() . '/admin/admin/home');
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



    public function actionMediaLibrary()
    {
        $data = yii::$app->request->post();
        $counter = $data['counter'];
        return Media::getImagesLibrary($counter);
    }

    public function actionMediaLibraryTiny()
    {
        $data = yii::$app->request->post();
        $counter = $data['counter'];
        return Media::getTinyImages($counter);
    }
}
