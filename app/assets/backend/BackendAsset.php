<?php
namespace app\assets\backend;

use yii\web\AssetBundle;

class BackendAsset extends AssetBundle
{
    public $depends = array(
        'yii\\web\\YiiAsset',
        'dmstr\\web\\AdminLteAsset',
    );
}