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
     * Lists all Settings models.
     * @return mixed
     * @throws NotFoundHttpException
     */
    public function actionIndex()
    {

        $fieldsArray = array('global_headertext1', 'global_headertext2', 'global_phone', 'global_email', 'global_address', 'global_copyright', 'global_mainMap');
        $data = Yii::$app->request->post();

        if ($data) {
            foreach ($fieldsArray as $field) {
                $tempModel = $this->findModel($field);
                if (null != $tempModel) {
                    $tempModel->value = $data[$field];
                    $tempModel->save();
                }
            }
        }
        $meta = Settings::find()
            ->select('key,value')
            ->leftJoin('media', '`settings`.`value` = `media`.`id`')->with('media')
            ->where(['like', 'key', 'global'])
            ->indexBy('key')
            ->all();
        return $this->render('index', [
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
            if (!empty($data['content'])) {
                $currPage->content = json_encode($data['content']);
                $currPage->save();
            }

        }

        $content = json_decode($currPage->content);
        $meta = Settings::find()->select(['key', 'value'])
            ->where(['or', ['key' => 'about_video'], ['key' => 'about_slider']])
            ->indexBy('key')
            ->all();

        $meta['about_slider']['value'] = json_decode($meta['about_slider']['value']);

        $media = Media::find()->select('id, name, title, alt')
            ->where(['id' => $meta['about_slider']['value']])
            ->all();
        return $this->render('about', compact('content', 'meta', 'media'));
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
