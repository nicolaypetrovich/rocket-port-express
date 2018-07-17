<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\modules\admin\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{


//    public $sourcePath = '@app/modules/admin/';
    public $css = [
        'adminparts/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'adminparts/bower_components/font-awesome/css/font-awesome.min.css',
        'adminparts/bower_components/Ionicons/css/ionicons.min.css',
        'adminparts/dist/css/AdminLTE.min.css',
        'adminparts/dist/css/skins/skin-blue.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
        'adminparts/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
        'adminparts/css/admincss.css',
    ];
    public $js = [
        'adminparts/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'adminparts/dist/js/adminlte.min.js',
        'adminparts/plugins/timepicker/bootstrap-timepicker.min.js',
        'adminparts/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
        '//api-maps.yandex.ru/2.1/?lang=ru_RU',
        'adminparts/tinymce/tinymce.min.js',
        'adminparts/js/admintiny.js',
        'adminparts/js/admincustom.js',
        'adminparts/js/adminmedia.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
    ];
}