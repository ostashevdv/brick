<?php

$local = [];
if (file_exists(dirname(__DIR__) . '/app/config/local.php')) {
    $local = require(dirname(__DIR__) . '/app/config/local.php');
}

/** @var Composer\Autoload\ClassLoader $loader */
$loader = require(__DIR__ . '/../vendor/autoload.php');
$loader->addPsr4('brick\\engine\\', dirname(__DIR__) . '/extensions/brick-engine/');
$loader->addPsr4('brick\\wpo\\', dirname(__DIR__) . '/extensions/brick-wpo/');


require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = \yii\helpers\ArrayHelper::merge(
  require(dirname(__DIR__) . '/app/config/web.php'),
  $local
);

$app = new \yii\web\Application($config);
require(__DIR__ . '/../app/config/bootstrap.php');
$app->run();