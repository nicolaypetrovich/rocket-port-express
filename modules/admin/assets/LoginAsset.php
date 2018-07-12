<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */


namespace app\modules\admin\assets;
use yii\web\AssetBundle;

class LoginAsset extends AssetBundle
{
//    public $sourcePath = '@app/modules/admin/';
    public $css = [
        'adminparts/bower_components/bootstrap/dist/css/bootstrap.min.css',
        'adminparts/bower_components/font-awesome/css/font-awesome.min.css',
        'adminparts/bower_components/Ionicons/css/ionicons.min.css',
        'adminparts/dist/css/AdminLTE.min.css',
        'adminparts/dist/css/skins/skin-blue.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',

    ];
    public $js = [
//        'bower_components/jquery/dist/jquery.min.js',
        'adminparts/bower_components/bootstrap/dist/js/bootstrap.min.js',
        'adminparts/plugins/iCheck/icheck.min.js',
//        '/js/twitter-text.js',
//        '/js/twitter_count.js',
//        '/js/status-counter.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}