<?php

return [
    'id' => 'brick',
    'name' => 'Brick - is not cms',
    'language' => 'ru',
    'charset' => 'utf-8',
    'timeZone' => 'Europe/Moscow',
    'basePath' => dirname(__DIR__),
    'runtimePath' => dirname(dirname(__DIR__)) . '/runtime',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    'components' => [
        'assetManager' => [
            'appendTimestamp' => true,
        ],
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=localhost;port=5432;dbname=brick',
            'username' => 'brick',
            'password' => 'brick',
            'charset' => 'utf8',
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
        'cache' => [
            'class' => 'yii\caching\DummyCache',
            'keyPrefix' => 'brick_'
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
        ],
    ],
    'modules' => [
        'catalog' => [
            'class' => 'brick\\wpo\\Module',
        ],
    ],
];