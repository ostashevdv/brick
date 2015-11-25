<?php
namespace brick\wpo\models;

use creocoder\nestedsets\NestedSetsQueryBehavior;

/**
 * @author Dmitriy Ostashev <ostashev@gmail.com>
 */
class CategoryQuery extends \yii\db\ActiveQuery
{
    public function behaviors()
    {
        return [
            'nestedsets' => NestedSetsQueryBehavior::className(),
        ];
    }

}