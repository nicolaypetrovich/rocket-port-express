<?php

namespace app\controllers;

use app\models\CustomerMessages;
use app\models\News;
use app\models\NewsSearch;
use app\models\Offices;
use app\models\Ordercall;
use app\models\Settings;
use app\models\Users;
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
            'news' => $dataProvider,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $model = new LoginForm();
        if($model->load(Yii::$app->request->post()) && $model->login())
        {
            return $this->goBack();
        }
        Yii::$app->response->format = Response::FORMAT_JSON;
        return $model->errors;
    }

    /**
     * Logout action
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        $this->goHome();

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

        $offices = new Offices();
        $offices_list = $offices::find()->asArray()->all();

        return $this->render('contact', [
            'model' => $model,
            'content'  => $content,
            'offices_list' => $offices_list,
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
        $meta = Settings::find()->select('value')
            ->where(['or', ['key'=>'about_video'], ['key'=>'about_slider'] ])
            ->asArray()
            ->all();
        $meta[0]['value'] = json_decode($meta[0]['value']);
        $media = Media::find()->select('id, name, title, alt')
            ->where(['id'=>$meta[0]['value']])
            ->asArray()
            ->all();
        return $this->render('about', compact('content', 'meta', 'media'));
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
     * @return string
     */
    public function actionPrivate()
    {



        if(Yii::$app->user->isGuest){
            $this->goHome();
        }
        $data = Yii::$app->request->post();
        $data = $data['Users'];
        if(Yii::$app->request->post()){

            $user = Yii::$app->user->identity;
            $user_id = $user->id;

            $modelUser = Users::findOne($user_id);

            if ((Yii::$app->request->isPost) && ($modelUser != NULL)) {

                $file = UploadedFile::getInstance($modelUser, 'photo');
                if($file) {
                    $modelUser->uploadUserImage($file);
                }
            }

            $modelUser->name = $data['name'];
            $modelUser->gender = $data['gender'];
            $modelUser->address = $data['address'];
            $modelUser->organization = $data['organization'];
            $modelUser->position = $data['position'];
            $modelUser->email = $data['email'];
            $modelUser->mobile_phone = $data['mobile_phone'];
            $modelUser->working_phone = $data['working_phone'];
            $modelUser->password = $data['password'];

            $modelUser->save();

            $user = $modelUser;

        } else {
            $user = Yii::$app->user->identity;
        }

        $content = $this->content;
        return $this->render('private', compact('content', 'user'));
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
        $model->name = $data['call_name'];
        $model->phone = $data['call_phone'];
        if ($model->validate() && $model->save()) {
            return 'success';
        }
    }
    return 'fail';
}


    public function actionCreateCustomerMessage()
    {

        $model = new CustomerMessages();
        $data = Yii::$app->request->post();
        if (isset($data['cm_name']) && isset($data['cm_email']) && isset($data['cm_message']) && Yii::$app->request->isAjax) {
            $model->name = $data['cm_name'];
            $model->email = $data['cm_email'];
            $model->text = $data['cm_message'];
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
