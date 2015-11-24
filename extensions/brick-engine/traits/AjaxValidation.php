<?php
namespace brick\engine\traits;

use Yii;
use yii\web\Response;
use yii\widgets\ActiveForm;
use yii\base\Model;

/**
 * @author Dmitriy Ostashev <ostashev@gmail.com>
 */
trait AjaxValidation
{
    protected function performAjaxValidation($models)
    {
        $response = [];
        if (is_array($models)) {
            foreach ($models as $model) {
                $response[] = $this->performValidationModel($model);
            }
        } else {
            $response = $this->performValidationModel($models);
        }
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            echo json_encode($response);
            Yii::$app->end();
        }
        return;
    }

    /**
     * Performs ajax validation.
     *
     * @param \yii\base\Model $model
     *
     * @throws \yii\base\ExitException
     */
    protected function performValidationModel(Model $model)
    {
        if ($model->load(Yii::$app->request->post())) {
            return ActiveForm::validate($model);
        }
        return;
    }



}
