<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic',
        '//fonts.googleapis.com/css?family=Open+Sans+Condensed:700&amp;subset=cyrillic',
        'css/magnific-popup.css',
        'css/slick.css',
        'css/main.css',
    ];
    public $js = [
//        'js/jquery-3.3.1.js',
        '//api-maps.yandex.ru/2.1/?lang=ru_RU',
        'js/forms.js',
        'js/jquery.maskedinput.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/slick.min.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset'
    ];
    
}
