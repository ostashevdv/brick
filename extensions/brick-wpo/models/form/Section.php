<?php

namespace brick\wpo\models\form;


use yii\base\Model;
use DateTime;

class Section extends Model
{
    public $name;

    public $alias;

    public $status;

    public $description;

    public $content;

    public $createdAt;

    public $updatedAt;

    public $unpublishedAt;

    public function attributeLabels()
    {
        return [
          'name' => 'Название',
          'alias' => 'Псевдоним',
          'status' => 'Статус',
          'description' => 'Описание',
          'content' => 'Содержание',
          'createdAt' => 'Создано',
          'updatedAt' => 'Обновлено',
          'unpublishedAt' => 'Скрыто',
        ];
    }

    public function rules()
    {
        return [
          ['name', 'unique', 'targetModel' => \brick\wpo\models\Section, 'targetAttribute' => 'name'],
          ['alias', 'unique', 'targetModel' => \brick\wpo\models\Section, 'targetAttribute' => 'alias'],
          [['description', 'content'], 'safe'],
        ];
    }

    public function beforeValidate()
    {
        if ($this->createdAt === null) {
            $this->createdAt = (new DateTime())->format(DATE_ATOM);
        }
    }
}