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

class SiteController extends Controller
{
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
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
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
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

        return $this->render('news', [
            'dataProvider' => $dataProvider,
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

        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('news', [

            'dataProvider' => $dataProvider,
//            'model'=>$searchModel,
        ]);


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
