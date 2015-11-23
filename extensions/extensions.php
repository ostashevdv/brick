<?php

use yii\helpers\ArrayHelper;

Yii::setAlias('@ext', dirname(__FILE__));

$extensionsDir = __DIR__;

/**
 * $extensions = [
 *  'vendor/name' => [
 *      'name' => 'vendor/name',
 *      'version' => '9999999-dev',
 *      'alias' => [
 *          '@vendor/name' => $extensionsDir . '/vendor/directory',
 *      ],
 *  ],
 * ];
 */
$extensions = [
    'brick/engine' => [
        'name' => 'brick/engine',
        'version' => '9999999-dev',
        'alias' => [
            '@brick/engine' => $extensionsDir . '/brick-engine',
        ],
    ],
    'brick/wpo' => [
        'name' => 'brick/wpo',
        'version' => '9999999-dev',
        'alias' => [
            '@brick/wpo' => $extensionsDir . '/brick-wpo',
        ],
    ],
];

foreach ($extensions as $extension) {
    if (isset($extension['alias'])) {
        foreach ($extension['alias'] as $alias => $path) {
            Yii::setAlias($alias, $path);
        }
    }
}

return ArrayHelper::merge($extensions, require_once dirname(__DIR__) . '/vendor/yiisoft/extensions.php');