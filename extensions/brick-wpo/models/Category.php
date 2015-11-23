<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wpo_category".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property integer $lft
 * @property integer $rgyiit
 * @property integer $depth
 * @property string $extra
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wpo_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'lft', 'rgyiit', 'depth'], 'required'],
            [['description', 'content', 'extra'], 'string'],
            [['lft', 'rgyiit', 'depth'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'content' => 'Content',
            'lft' => 'Lft',
            'rgyiit' => 'Rgyiit',
            'depth' => 'Depth',
            'extra' => 'Extra',
        ];
    }
}
