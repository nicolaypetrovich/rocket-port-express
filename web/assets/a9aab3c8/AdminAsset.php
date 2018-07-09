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

//    public $sourcePath = __DIR__;
    public $sourcePath = '@app/modules/admin/assets';
    public $css = [];
    public $js = [
        'js/admincustom.js',
//        '/js/twitter-text.js',
//        '/js/twitter_count.js',
//        '/js/status-counter.js',
    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}