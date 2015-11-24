<?php

namespace brick\wpo\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "wpo_category".
 *
 * @property integer $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property integer $status
 * @property string $created_at
 * @property string $unpublished_at
 * @property string $published_at
 * @property integer $author_id
 * @property integer $redactor_id
 * @property integer $lft
 * @property integer $rgt
 * @property integer $depth
 * @property string $extra
 */
class Category extends \yii\db\ActiveRecord
{
    const STATUS_DRAFT = 0;

    const STATUS_PUBLISHED = 10;

    public static function getStatusList($index=null)
    {
        return [
            self::STATUS_DRAFT => 'Удалено',
            self::STATUS_PUBLISHED => 'Опубликованно'
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\\behaviors\\TimestampBehavior',
                'attributes' => [
                    parent::EVENT_BEFORE_INSERT => ['created_at'],
                    parent::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => new Expression('NOW()'),

            ],
            'slug' => [
                'class' => '\\yii\\behaviors\\SluggableBehavior',
                'attribute' => 'name',
                'immutable' => 'true',
            ],
        ];
    }

    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description', 'content', 'extra'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'content' => 'Content',
            'lft' => 'Lft',
            'rgt' => 'Rgt',
            'depth' => 'Depth',
            'extra' => 'Extra',
        ];
    }

    public static function tableName()
    {
        return '{{%wpo_category}}';
    }
}
