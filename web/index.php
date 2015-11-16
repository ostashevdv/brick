<?php

//Включение DEBUG режима
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = ['app' => [], 'local' => []];

$local = dirname(__DIR__) . '/app/config/local.php';
if (file_exists($local)) {
    $config['local'] = require($local);
}

$config['app'] = require(dirname(__DIR__) . '/app/config/app.php');

$config = \yii\helpers\ArrayHelper::merge($config['app'], $config['local']);

$app = new \yii\web\Application($config);
require(__DIR__ . '/../app/config/bootstrap.php');
$app->run();