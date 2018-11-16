<?php

namespace app\controllers;

use app\models\CustomerMessages;
use app\models\News;
use app\models\NewsSearch;
use app\models\Offices;
use app\models\Ordercall;
use app\models\RegistrationForm;
use app\models\Settings;
use app\models\UpdateUser;
use app\models\UserIdentity;
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
            $content = json_decode($page['content'], true);

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


        $images=array();
        foreach (json_decode($meta['index_block_icons_images']->value,true) as $item){
                $images[]=$item;
        }

        $media = Media::find()->select('id, name, title, alt')
            ->where(['id' => $images])
            ->all();

        return $this->render('index', [
            'meta' => $meta,
            'news' => $dataProvider,
            'icons_media'=>$media,

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
     *  Registration action
     */
    public function actionRegisterUser()
    {
        $model = new RegistrationForm();
        if($model->load(Yii::$app->request->post())){
            $data = Yii::$app->request->post('RegistrationForm');
            $result = RegistrationForm::findByEmail($data['email']);
            if($result) {
                return $result;
            }
            $api_id = rand(100, 999) . rand(100, 999) . rand(100, 999) . rand(0, 9);
            $user = new Users();
            $user->api_id = $api_id;
            $user->name = $data['name'];
            $user->login = $data['email'];
            $user->email = $data['email'];
            if($data['organization']){
                $user->organization = $data['organization'];
            }
            $user->password = md5($data['password']);
            $user->save();
        }

        Yii::$app->response->format = Response::FORMAT_JSON;

        $user = UserIdentity::findByEmail($user->email);
        if($user)
        {
            Yii::$app->user->login($user, 3600*24*60);
        }

        return Yii::$app->response->redirect(['site/private']);

    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $content = $this->content;


        $data = Yii::$app->request->post();

        if (isset($data['cm_name']) && isset($data['cm_email']) && isset($data['cm_message'])) {
            $model = new CustomerMessages();
            $model->name = $data['cm_name'];
            $model->email = $data['cm_email'];
            $model->text = $data['cm_message'];
            $model->save();
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
        $meta = Settings::find()->select(['key','value'])
            ->where(['or', ['key'=>'about_video'], ['key'=>'about_slider'] ])
//            ->asArray()
            ->indexBy('key')
            ->all();



        $meta['about_slider']['value'] = json_decode($meta['about_slider']['value']);

        $media = Media::find()->select('id, name, title, alt')
            ->where(['or', ['id' => $meta['about_slider']['value']], ['id' => $content['content_img']], ['id' => $content['content1_img']]])
            ->indexBy('id')
//            ->asArray()
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
        $meta = Settings::find()
            ->select('key,value')
            ->where(['like', 'key', 'services_blocks'])
            ->one();
        $meta=json_decode($meta['value']);
        $images=array();

        foreach ($meta->image as $item){
            $images[]=$item;
        }
        $media = Media::find()->select('id, name, title, alt')
            ->where(['id' => $images])
            ->all();

        return $this->render('services', compact('content','meta','media'));
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

        $data = Yii::$app->request->post('UpdateUser');

        if($data){

            $user = Yii::$app->user->identity;
            $user_id = $user->id;
            $modelUser = Users::findOne($user_id);
            $modelFile = new UpdateUser();

            if ((Yii::$app->request->isPost) && ($modelUser != NULL)) {
                $file = UploadedFile::getInstance($modelFile, 'photo');
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

            $modelUser->save();
            $user = $modelUser;

        } else { $user = Yii::$app->user->identity; }

        $data = Yii::$app->request->post('ResetUserPassword');
        if($data){
            $user = Yii::$app->user->identity;
            $user_id = $user->id;
            $modelUser = Users::findOne($user_id);
            $user = Yii::$app->user->identity;
            if(md5($data['password'])==$user->password){
                $modelUser->password = md5($data['new_password']);
                $modelUser->save();
                $pass_error = 'no';
            }else{
                $pass_error = 'yes';
            }
        }

        $content = $this->content;
        return $this->render('private', compact('content', 'user', 'pass_error'));
    }


	/**
	 * @param null $data
	 *
	 * @return string
	 *
	 * jQuery autocomplete for private page
	 */
	public function actionGetDescr($data = null){

		header('Content-type: text/html; charset=windows-1251');

		$url = "http://213.221.36.234/recipient.php";
		$search = "name=" . iconv("utf-8", "cp1251", $_GET['term']) . "&inn=" . $_GET['inn'];

		$c = curl_init($url);
		curl_setopt($c, CURLOPT_POST, true);
		curl_setopt($c, CURLOPT_POSTFIELDS, $search);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		$receive = curl_exec($c);
		curl_close($c);

		return iconv("cp1251", "utf-8", $receive);
	}

	/**
	 * @return string
	 *
	 * get your sends for private page
	 */
	public function actionApiinfo()
	{

		$docno = "docno=" . iconv("utf-8", "cp1251", $_POST['docno']) . "&inn=" . $_POST['inn'];

		header('Content-type: text/html; charset=windows-1251');

		$url1 = "http://213.221.36.234/index.php";
		$cw = curl_init($url1);
		curl_setopt($cw, CURLOPT_POST, true);
		curl_setopt($cw, CURLOPT_POSTFIELDS, $docno);
		curl_setopt($cw, CURLOPT_RETURNTRANSFER, true);
		$recive1 = curl_exec($cw);
		curl_close($cw);

		$sx1 = simplexml_load_string($recive1);
		$return1 = '';
		$return1 .= '<table id="tblStatus">
						<tr class="tb_header">
							<td>Номер</td>
							<td>Дата отправления</td>
							<td>Дата получения</td>
							<td>ФИО</td>
							<td>Статус</td>
							<td>Адрес</td>
						</tr>';
		foreach ($sx1->row as $row){

			$docno = $row['docno'];
			$date = $row['date_ot'];
			$status = $row['status'];
			$who = $row['who'];
			$date_otpr = $row['date_otpr'];
			$address = $row['address'];
			$zakazchik = $row['zakazchik'];
			$num_reestr = $row['num_reestr'];
			$shpi = $row['shpi'];
			$in_shpi = $row['in_shpi'];
			$date_status = $row['date_status'];
			$return1 .= "<tr>
						<td>{$docno}</td>
						<td>{$date_otpr}</td>
						<td>{$date}</td>
						<td>{$who}</td>
						<td>{$status}</td>
						<td>{$address}</td>
						<td>{$zakazchik}</td>
						</tr>";
		}
		$return1 .= '</table>';

		return $return1;

	}

	/**
	 *
	 */
	public function actionHistory()
	{

		$docno = "docno=" . iconv("utf-8", "cp1251", $_GET['docno']) . "&inn=" . $_GET['inn'];

		$url = "http://213.221.36.234/getHistoryDoc.php";

		$c = curl_init($url);
		curl_setopt($c, CURLOPT_POST, true);
		curl_setopt($c, CURLOPT_POSTFIELDS, $docno);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		$recive = curl_exec($c);
		curl_close($c);

		var_dump($recive);

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
