<?php

$app = require_once('app.php');

$web = [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'fFKgKV1JN29zeh2cXiglBe70K9dgrxCU',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
];

return \yii\helpers\ArrayHelper::merge($app, $web);