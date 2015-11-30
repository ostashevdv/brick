<?php
namespace brick\wpo\models;

/**
 * @author Dmitriy Ostashev <ostashev@gmail.com>
 */
class CategoryQuery extends \yii\db\ActiveQuery
{

    /**
     * @inheritdoc
     * @return News[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return News|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}