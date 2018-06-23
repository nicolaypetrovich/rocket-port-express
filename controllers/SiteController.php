<?php

namespace app\controllers;

use app\models\News;
use app\models\NewsSearch;
use app\models\Ordercall;
use app\models\Settings;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\web\UploadedFile;
/**** DELETE WITH IMAGE UPLOAD PAGE ****/

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

//        $meta = Settings::find()->select('key,value')
//            ->where(['like', 'key', 'index'])
//            ->indexBy('key')->asArray()->all();
        $meta = Settings::find()->select('key,value')
            ->leftJoin('media', '`settings`.`value` = `media`.`id`')->with('media')
            ->where(['like', 'key', 'index'])
//            ->where(['like', 'key', 'img'])
            ->indexBy('key')
//            ->asArray()
            ->all();


        $searchModel = new NewsSearch();
        $dataProvider = $searchModel::find()->orderBy(['date' => SORT_DESC])->limit(6)->all();


        return $this->render('index', [
            'meta' => $meta,
            'news' => $dataProvider
        ]);
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
     * @throws NotFoundHttpException
     */
    public function actionNews()
    {

        $slug = Yii::$app->request->get('slug');


        if (isset($slug)) {
            return $this->render('single-news', [
                'model' => $this->findOneNewsModel($slug),
            ]);
        } else {
            $searchModel = new NewsSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

            return $this->render('news', [
                'dataProvider' => $dataProvider,
            ]);
        }
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
        if (isset($data['call_name']) && isset($data['call_phone']) && Yii::$app->request->isAjax) {
            $model->name = $_POST['call_name'];
            $model->phone = $_POST['call_phone'];
            if ($model->validate() && $model->save()) {
                return 'success';
            }
        }
        return 'fail';
    }


    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $slug
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findOneNewsModel($slug)
    {
        if (
            ($model = News::findOne(['slug' => $slug])) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
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

        if (Yii::$app->request->isPost) {
            $file = UploadedFile::getInstance($model, 'image');
            $model->uploadImage($file);
        }

        return $this->render('media', [
            'model' => $model,
        ]);
    }
}
