<?php

//Удалите эти строки на production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

require(__DIR__ . '/../app/config/bootstrap.php');

(new yii\web\Application(require(dirname(__DIR__).'/app/config/app.php')))->run();