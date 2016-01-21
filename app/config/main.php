<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
//    'controllerNamespace' => 'frontend\controllers',

    'modules' => [
        'v1' => [
            'class' => 'app\modules\v1\Module',
        ],
//        'v2' => [
//            'class' => 'app\modules\v2\Module',
//        ],
    ],


    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
//                'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'app\components\RestUrlRule', 'accepts' => 'application/json', 'controller' => ['<controller>'=>'v1/<controller>']],
//                ['class' => 'yii\rest\UrlRule', 'controller' => ['user', 'post']],
            ],
        ],
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ]
    ],
    'params' => $params,
];
