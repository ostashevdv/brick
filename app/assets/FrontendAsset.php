<?php namespace app\assets;


class FrontendAsset extends \yii\web\AssetBundle
{
    public $depends = [
        'app\\assets\\IESupportAsset',
        'yii\\web\\YiiAsset',
    ];
} 