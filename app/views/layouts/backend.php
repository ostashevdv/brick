<?php

use yii\helpers\Html;
use app\assets\backend\BackendAsset;
$assets = BackendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
    <header class="main-header">
        <?= Html::a('<span class="logo-mini">APP</span><span class="logo-lg">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>
        <nav class="navbar navbar-static-top" role="navigation">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>

    <?=''// $this->render('b_chunks/_menu_left'); ?>


    <div class="content-wrapper">
        <section class="content-header">
            <h1><?=''// Html::encode($this->context->module->params['name']) ?></h1>

            <?= \yii\widgets\Breadcrumbs::widget([
              'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>

            <!-- module menu :START-->
            <?=''/* $this->render('b_chunks/_menu_module', [
              'app' => Yii::$app->params['backend.menu.module'],
              'module' => $this->context->module->params['backend.menu']]) */
            ?>
            <!-- /module menu :END -->
        </section>


        <section class="content">
            <?=''// dmstr\widgets\Alert::widget() ?>

            <div class="box box-primary">
                <div class="box-header">
                    <h5 class="box-title"><?= $this->title?></h5>
                    <?php if (isset($this->blocks['box-tools'])) : ?>
                        <div class="box-tools pool-right"><?=$this->blocks['box-tools']?></div>
                    <?php endif ?>
                </div>
                <div class="box-body">
                    <?= $content ?>
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.0.0
        </div>
        <strong>Copyright &copy; 2014-<?=date('Y')?> <a href="mailto:ostashevdv@gmail.com">ostashevdv@gmail.com</a>.</strong>
    </footer>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
