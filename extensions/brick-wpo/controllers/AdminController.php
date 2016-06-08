<?php

namespace brick\wpo\controllers;

use Yii;
use brick\engine\traits\AjaxValidation;
use brick\wpo\form\SectionForm;

use yii\web\Controller;


class AdminController extends Controller
{
    use AjaxValidation;

    public $layout = '//backend';

    public function actionSectionCreate()
    {
        /** @var SectionForm $model */
        $model = Yii::createObject(SectionForm::className());        
        if ($model->load(\Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->session->setFlash('success', 'Раздел добавлен');
        }
        return $this->render('section/create', ['model' => $model]);
    }   
}
