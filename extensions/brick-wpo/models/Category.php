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
 * @property string $published_at
 * @property string $unpublished_at
 * @property integer $author_id
 * @property integer $redactor_id
 *
 * @property string $extra
 *
 * @method static Category findOne($condition)
 */
class Category extends \yii\db\ActiveRecord
{
    const STATUS_NOT_FOUND = 404;

    const STATUS_OK = 200;

    public static function getStatusList()
    {
        return [
            self::STATUS_NOT_FOUND => 'Удалено',
            self::STATUS_OK => 'Опубликованно'
        ];
    }

    public static function find()
    {
        return new CategoryQuery(get_called_class());
    }

    public static function tableName()
    {
        return '{{%wpo_category}}';
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
            [['status', 'author_id', 'redactor_id'], 'integer'],
            [['created_at', 'published_at', 'unpublished_at'], 'safe'],
            [['name', 'slug'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'content' => 'Content',
            'status' => 'Status',
            'created_at' => 'Created At',
            'published_at' => 'Published At',
            'unpublished_at' => 'Unpublished At',
            'author_id' => 'Author ID',
            'redactor_id' => 'Redactor ID',

            'extra' => 'Extra',
        ];
    }

    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }
}
