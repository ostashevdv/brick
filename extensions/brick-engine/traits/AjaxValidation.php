<?php
namespace brick\engine\traits;

use Yii;
use yii\web\Response;
use yii\widgets\ActiveForm;

/**
 * @author Dmitriy Ostashev <ostashev@gmail.com>
 */
trait AjaxValidation
{
    /**
     * @param $model
     * @throws \yii\base\ExitException
     */
    public function performAjaxValidation($model)
    {
        if (!Yii::$app->request->isAjax) {
            return;
        }

        if (is_array($model)) {
            $response = ActiveForm::validateMultiple($model);
        } else {
            $response = ActiveForm::validate($model);
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        echo json_encode($response);
        Yii::$app->end();

    }
}
