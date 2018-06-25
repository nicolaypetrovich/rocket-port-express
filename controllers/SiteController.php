<?php

namespace app\controllers;

use app\models\News;
use app\models\NewsSearch;
use app\models\Ordercall;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\web\UploadedFile; /**** DELETE WITH IMAGE UPLOAD PAGE ****/
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Media;
use app\models\Pages;

class SiteController extends Controller
{

    //переменная для передачи контента во вьюхи
    public $content;

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
        //получаем слаг экшена
        $action = $this->action->id;

        //берем запись из бд по слагу
        $page = Pages::find()->where(['=', 'slug', $action])->one();

        //если запись сущевствует то формируем мета теги и контент
        if($page) {

            $this->view->title = $page['title'] . ' | Port Express';

            $this->view->registerMetaTag([
                'name' => 'description',
                'content' => $page['description']
            ]);
            $this->view->registerMetaTag([
                'name' => 'keywords',
                'content' => $page['keywords']
            ]);

            //получаем декодированный json
            $content = json_decode($page['content']);

            //если нет ошибки json`a то записываем в переменную массив
            if (json_last_error() === JSON_ERROR_NONE) {
                $this->content = $content;
            } else {
                //если ошибка json`a то записываем в переменную строку
                $this->content = $page['content'];
            }
        }

        return parent::beforeAction($action);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $content = $this->content;

        return $this->render('index', compact('content'));
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
        $content = $this->content;
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
            'content'  => $content,
        ]);
    }

    /**
     * Display delivery page
     *
     * @return string
     */
    public function actionDelivery()
    {

        $content = $this->content;

        return $this->render('delivery', compact('content'));
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        $content = $this->content;
        return $this->render('about', compact('content'));
    }


    /**
     * Displays news page.
     *
     * @return string
     */
    public function actionNews()
    {
//        $searchModel = new NewsSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

//        $query = News::find();
//
//        $countQuery = clone $query;
//
//        $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSizeParam'=>'pageSize']);
//
//        $models = $query->offset($pages->offset)
//            ->limit($pages->limit)
//            ->all();
//        return $this->render('news', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
        $content = $this->content;
        return $this->render('news', [
            'dataProvider' => $dataProvider,
            'content' => $content,
//            'pages' => $pages,
        ]);
    }


    /**
     * Displays news Search page.
     *
     * @return string
     */
    public function actionSearch()
    {
        $content = $this->content;
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('news', [

            'dataProvider' => $dataProvider,
            'content' => $content,
//            'model'=>$searchModel,
        ]);


    }

    /**
     * @return string
     */
    public function actionInvoice()
    {
        $content = $this->content;
        return $this->render('invoice', compact('content'));
    }

    /**
     * @return string
     */
    public function actionTracking()
    {
        $content = $this->content;
        return $this->render('tracking', compact('content'));
    }

    /**
     * @return string
     */
    public function actionServices()
    {
        $content = $this->content;
        return $this->render('services', compact('content'));
    }

    /**
     * @return string
     */
    public function actionCalculate()
    {
        $content = $this->content;
        return $this->render('calculate', compact('content'));
    }

    /**
     * @return string
     */
    public function actionClient()
    {
        $content = $this->content;
        return $this->render('client', compact('content'));
    }



    /**
     *
     * this section is dedicated for actions related to OrderCall
     */

    /**
     * Creates a new Ordercall model.
     * If creation is successful, the action will be return "success".
     * @return mixed
     */
    public function actionCreateOrderCall()
    {

        $model = new Ordercall();
        $data = Yii::$app->request->post();
        if(isset($data['call_name'])&&isset($data['call_phone'])){
            $model->name=$_POST['call_name'];
            $model->phone=$_POST['call_phone'];
            if($model->validate()&&$model->save()){
                return 'success';
            }
        }
        return 'fail';
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
