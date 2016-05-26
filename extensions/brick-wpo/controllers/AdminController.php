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
    use AjaxValidation;

    public $layout = '//backend';

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
        $model = $this->findModelOrFail(Category::class, $id);

        $this->performAjaxValidation($model);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['category-index', 'id' => $model->id]);
        } else {
            return $this->render('category/update', ['model' => $model]);
        }
    }

    public function actionDelete($id)
    {
        $model = $this->findModelOrFail(Category::class, $id);
        /** @var Category $model */
        $model->updateAttributes(['status' => Category::STATUS_NOT_FOUND]);
        return $this->redirect(['category-index']);
    }

    /**
     * TODO: выпилить в трейт
     * @param $class
     * @param $condition
     * @return null|static
     * @throws NotFoundHttpException
     * @throws \yii\base\InvalidConfigException
     */
    protected function findModelOrFail($class, $condition)
    {
        /** @var \yii\db\ActiveRecord $class */
        $class = Yii::createObject($class);
        $model = $class::findOne($condition);

        if ($model === null) {
            throw new NotFoundHttpException();
        }

        return $model;
    }

}
