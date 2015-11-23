<?php

$app = require('app.php');

$console = [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],
];

return \yii\helpers\ArrayHelper::merge($app, $console);