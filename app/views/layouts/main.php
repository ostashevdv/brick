<?php
/**
 * @var \yii\web\View $this
 */

use yii\helpers\Html;

$am = \app\assets\FrontendAsset::register($this);

$this->beginPage();
?>
<!doctype html>
<html class="no-js" lang="<?=Yii::$app->language?>">
<head>
    <meta charset="<?=Yii::$app->charset?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=Html::encode($this->title)?></title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>