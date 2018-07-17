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
    public function actionDelivery()
    {

        $data = Pages::findBySlug($this->action->id);

        if(Yii::$app->request->post()){
            $content = json_encode(Yii::$app->request->post('delivery'));
            $data->content = $content;
            $data->save();
            $content = json_decode($content, true);
        } else {
            $content = $data->content;
        }

        $content = json_decode($data->content, true);

        return $this->render('delivery', compact('content'));
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
            return $this->redirect(\yii\helpers\Url::base() . '/admin/settings/index');
        }

        $model->password = '';

        return $this->render('login', [
            'model' => $model,
        ]);


    }

    public function actionLogout()
    {
        $session = Yii::$app->session;
        if (!$session->isActive)
            $session->open();
        $session->set('admin', 'no');
        return $this->redirect(\yii\helpers\Url::base() . '/admin/admin/login');

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

}
