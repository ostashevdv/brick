<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wbraganca\dynamicform\DynamicFormWidget;

/* @var $this yii\web\View */
/* @var $model brick\wpo\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin([
        'enableAjaxValidation' => true,
        'enableClientValidation' => true,
    ]); ?>

    <?= Html::errorSummary($model) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php $fields[] = new \brick\wpo\models\Field(); ?>

    <div class="panel panel-default">
        <div class="panel-heading"><h4>Дополнительные поля</h4></div>
        <div class="panel-body">
            <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper',
                // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items',
                // required: css class selector
                'widgetItem' => '.item',
                // required: css class
                'limit' => 999,
                // the maximum times, an element can be cloned (default 999)
                'min' => 1,
                // 0 or 1 (default 1)
                'insertButton' => '.add-item',
                // css class
                'deleteButton' => '.remove-item',
                // css class
                'model' => $fields[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'name',
                    'type',
                    'label',
                ],

            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
                <?php foreach ($fields as $i => $field): ?>
                    <div class="item panel panel-default"><!-- widgetBody -->
                        <div class="panel-heading">
                            <div class="pull-right">
                                <button type="button" class="add-item btn btn-success btn-xs"><i
                                        class="glyphicon glyphicon-plus"></i></button>
                                <button type="button" class="remove-item btn btn-danger btn-xs"><i
                                        class="glyphicon glyphicon-minus"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">

                            <?= $form->field($field, "[{$i}]name")->textInput(['maxlength' => true]) ?>
                            <?= $form->field($field, "[{$i}]label")->textInput(['maxlength' => true]) ?>

                            <?= $form->field($field, "[{$i}]multiple")->checkbox(); ?>


                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
    </div>


    <?= $form->field($model, 'extra')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
