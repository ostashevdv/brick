<?php
/**
 * @author Dmitriy Ostashev <ostashev@gmail.com>
 */

//Включение DEBUG режима
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

return [
    'name' => 'Dev mode project',
    'bootstrap' => ['gii', 'log'],
    'modules' => [
        'debug' => 'yii\debug\Module',
        'gii' => 'yii\gii\Module',

    ],
];