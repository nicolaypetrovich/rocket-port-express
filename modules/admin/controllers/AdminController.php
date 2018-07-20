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
                return $this->redirect(\yii\helpers\Url::base() . '/admin/settings/index');
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



    public function actionMediaLibrary()
    {
        $data = yii::$app->request->post();
        $counter = $data['counter'];
        return Media::getImagesLibrary($counter);
    }

}
