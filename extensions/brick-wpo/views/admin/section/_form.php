<?php
/**
 *  @var $this yii\web\View
 *  @var $model brick\wpo\form\Section*
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="category-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation' => true,
        'enableClientValidation' => true,
        'id' => 'dynamic-form'
    ]); ?>

    <?= Html::errorSummary($model) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alias')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'description')->textarea(); ?>
    
    <?= $form->field($model, 'content')->textarea(); ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
