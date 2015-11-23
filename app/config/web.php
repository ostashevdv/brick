<?php

$app = require_once('app.php');

$web = [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'fFKgKV1JN29zeh2cXiglBe70K9dgrxCU',
        ],
    ],
];

return \yii\helpers\ArrayHelper::merge($app, $web);