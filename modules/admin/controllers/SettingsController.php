<?php

namespace app\modules\admin\controllers;

use app\models\Media;
use app\models\Pages;
use Yii;
use app\models\Settings;
use app\modules\admin\models\SettingsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SettingsController implements the CRUD actions for Settings model.
 */
class SettingsController extends Controller
{


    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {

        $fieldsArray = array('index_block2','index_block_about','index_block_icons','index_block_icons_images');
        $data = Yii::$app->request->post();

        if ($data) {

            foreach ($fieldsArray as $field) {
                $tempModel = $this->findModel($field);
                if (null != $tempModel) {
                    $tempModel->value = json_encode($data[$field]);
                    $tempModel->save();
                }
            }
            if(isset($data['index_news_title'])&&!empty($data['index_news_title'])){
                $tempModel=$this->findModel('index_news_title');
                if(null != $tempModel){
                    $tempModel->value=$data['index_news_title'];
                    $tempModel->save();
                }
            }
        }

	    $meta = Settings::find()->select('key,value')
	                    ->leftJoin('media', '`settings`.`value` = `media`.`id`')->with('media')
	                    ->where(['like', 'key', 'index'])
                        ->indexBy('key')
//            ->asArray()
                        ->all();

        $images=array();
        foreach (json_decode($meta['index_block_icons_images']->value,true) as $item){
            $images[]=$item;
        }

        $media = Media::find()->select('id, name, title, alt')
            ->where(['id' => $images])
            ->all();
        return $this->render('index',[
            'meta'=>$meta,
            'icons_media'=>$media,
        ]);
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
     * Lists all Settings models.
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionGlobal()
    {

        $fieldsArray = array('global_logo','global_headertext1', 'global_headertext2', 'global_phone', 'global_email', 'global_address', 'global_copyright', 'global_mainMap');
        $data = Yii::$app->request->post();

        if ($data) {
            foreach ($fieldsArray as $field) {
                $tempModel = $this->findModel($field);
                if (null != $tempModel) {
                    $tempModel->value = $data[$field];
                    $tempModel->save();
                }
            }

            if(isset($data['ad_pass_old'])&&isset($data['ad_pass_new'])&&isset($data['ad_pass_new_repeat'])){
                $tempModel=$this->findModel('admin_password');
                if ($tempModel->value==md5($data['ad_pass_old'])){
                    if($data['ad_pass_new']===$data['ad_pass_new_repeat']){
                        $tempModel->value=md5($data['ad_pass_new']);
                        $tempModel->save();
                    }
                }
            }
        }
        $meta = Settings::find()
            ->select('key,value')
            ->leftJoin('media', '`settings`.`value` = `media`.`id`')->with('media')
            ->where(['like', 'key', 'global'])
            ->indexBy('key')
            ->all();
        return $this->render('global', [
            'meta' => $meta
        ]);
    }


    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionClients()
    {
        $page = Pages::findBySlug('client');
        $data = Yii::$app->request->post();
        if(!empty($data)){
            $page->content=json_encode($data['content']);
            $page->save();
        }

        return $this->render('clients', ['page' => $page]);
    }


    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionAbout()
    {
        $currPage = Pages::findBySlug('about');

        $data = Yii::$app->request->post();
        if (!empty($data)) {
            if (!empty($data['video'])) {
                $aboutVideo = Settings::findOne(['key' => 'about_video']);
                $aboutVideo->value = $data['video'];
                $aboutVideo->save();
            }
            if (!empty($data['slider'])) {
                $aboutSlider = Settings::findOne(['key' => 'about_slider']);
                $aboutSlider->value = json_encode($data['slider']);
                $aboutSlider->save();
            }
            if (!empty($data['content1'])&&!empty($data['content2'])&&!empty($data['title_middle'])&&!empty($data['content2'])) {

                $currPage->content = json_encode(array(
                	'content1'=>$data['content1'],
	                'content_img'=>$data['content_img'],
	                'title_middle'=>$data['title_middle'],
                	'content2'=>$data['content2']
                ));
                $currPage->save();
            }

        }

        $content = json_decode($currPage->content);
        $meta = Settings::find()->select(['key', 'value'])
            ->where(['or', ['key' => 'about_video'], ['key' => 'about_slider']])
            ->indexBy('key')
            ->all();

        $meta['about_slider']['value'] = json_decode($meta['about_slider']['value']);
        //adding in list image from


        $media = Media::find()->select('id, name, title, alt')
            ->where(['or', ['id' => $meta['about_slider']['value']], ['id' =>$content->content_img]])
            ->indexBy('id')
            ->all();
        return $this->render('about', compact('content', 'meta', 'media'));
    }



    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionServices()
    {
        $data = Yii::$app->request->post();

        if ($data) {
            $service_array=array('image'=>$data['image'],'text'=>$data['text']);

            try {
                $tempModel = $this->findModel('services_blocks');
                if (null != $tempModel) {
                    $tempModel->value = json_encode($service_array);
                    $tempModel->save();
                }
            } catch (NotFoundHttpException $e) {
                $tempModel= new Settings();
                $tempModel->key='services_blocks';
                $tempModel->value=json_encode($service_array);
                $tempModel->save();
            }


        }
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
            ->indexBy('id')
            ->where(['id' => $images])
            ->all();

        return $this->render('services',[
            'meta'=>$meta,
            'media'=>$media
        ]);
    }





    /**
     * Finds the Settings model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param $val
     * @return Settings the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($val)
    {
        if (($model = Settings::findOne(['key' => $val])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
