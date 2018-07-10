<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'ru',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [

        'admin' => [

            'class' => 'app\modules\admin\Admin',

        ],

    ],

    'components' => [
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapPluginAsset' => ['js'=>[]], //removing bootstrap JS
                'yii\bootstrap\BootstrapAsset' => ['css' => []] //removing bootstrap CSS
            ],
//            'forceCopy'=>true
        ],
        'request' => [
            'cookieValidationKey' => 'j72L44Gu8GzPRxQO',
            'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],



        'user' => [
            'class'=>'yii\web\User',
            'identityClass' => 'app\models\UserIdentity',
//            'identityClass' => 'app\modules\admin\models\UserAdminIdentity',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_regularUser',
            ]
        ],
        'user2' => [
            'class'=>'yii\web\User',
            'identityClass' => 'app\modules\admin\models\UserAdminIdentity',
            'enableAutoLogin' => true,
            'identityCookie' => [
                'name' => '_adminUser',
            ]
        ],
//        'userAdmin' => [
//            'class' => 'yii\base\BaseObject',
//            'identityClass' => 'app\modules\admin\models\UserAdminIdentity',
//            'enableAutoLogin' => true,
//            'identityCookie' => [
//                'name' => '_adminUser',
//            ]
////            'identityCookie' => ['name' => '_fidentity-frontend', 'httpOnly' => true],
//        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<action>' => 'site/<action>',
//                '<controller>/<action>' => 'admin/<controller>/<action>',
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['212.92.254.36', '::1', '217.77.215.74', '37.25.103.183', '37.229.210.224', '134.249.157.176'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
