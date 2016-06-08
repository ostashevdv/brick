<?php
/**
 *  @var $this yii\web\View
 *  @var $model brick\wpo\form\Section* 
 */

use yii\helpers\Html;

$this->title = 'Добавить раздел';
$this->params['breadcrumbs'][] = ['label' => 'Разделы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
