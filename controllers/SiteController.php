<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile; /**** DELETE WITH IMAGE UPLOAD PAGE ****/
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Media;
use app\models\Page;

class SiteController extends Controller
{

    public $page;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * @param $action
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {

        $action = $this->action->id;

        $page = Page::find()->where(['=', 'slug', $action])->one();

        $this->view->title = $page['title'];

        $this->view->registerMetaTag([
            'name' => 'description',
            'content' => $page['description']
        ]);
        $this->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $page['keywords']
        ]);

        $this->page = $page;

        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $page = $this->page;

        return $this->render('index', compact('page'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Display delivery page
     *
     * @return string
     */
    public function actionDelivery()
    {

        $page = $this->page;

        return $this->render('delivery', compact('page'));
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }


    /**
     * TEMPORAL PAGES. DELETE AFTER PROJECT START!
     */


    /**
     * Displays temporal image upload page.
     *
     * @return string
     */
    public function actionMedia()
    {
        $this->layout = false;

        $model = new Media;

        if(Yii::$app->request->isPost)
        {
            $file = UploadedFile::getInstance($model, 'image');
            $model -> uploadImage($file);
        }

        return $this->render('media', [
            'model' => $model,
        ]);
    }

}
