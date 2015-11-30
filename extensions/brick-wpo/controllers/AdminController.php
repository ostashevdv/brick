<?php

namespace brick\wpo\controllers;

use brick\engine\traits\AjaxValidation;
use Yii;
use brick\wpo\models\Category;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class AdminController extends Controller
{
    public $layout = '//backend';

    use AjaxValidation;

    public function actionCategoryIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Category::find(),
        ]);

        return $this->render('category/index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionCategoryCreate()
    {
        $model = new Category();
        $this->performAjaxValidation($model);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['category-index', 'id' => $model->id]);
        } else {
            return $this->render('category/create', ['model' => $model]);
        }
    }

    public function actionCategoryUpdate($id)
    {
        $model = Category::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException();
        }
        $this->performAjaxValidation($model);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['category-index', 'id' => $model->id]);
        } else {
            return $this->render('category/update', ['model' => $model]);
        }
    }

    public function actionDelete($id)
    {
        $model = Category::findOne($id);
        if ($model === null) {
            throw new NotFoundHttpException();
        }

        /** @var Category $model */
        $model->updateAttributes(['status' => Category::STATUS_DRAFT]);
        return $this->redirect(['category-index']);
    }


}
