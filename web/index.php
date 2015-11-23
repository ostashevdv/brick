<?php

$local = [];
if (file_exists(dirname(__DIR__) . '/app/config/local.php')) {
    $local = require(dirname(__DIR__) . '/app/config/local.php');
}

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = \yii\helpers\ArrayHelper::merge(
  require(dirname(__DIR__) . '/app/config/web.php'),
  $local
);

$app = new \yii\web\Application($config);
require(__DIR__ . '/../app/config/bootstrap.php');
$app->run();