<?php

namespace brick\wpo\form;

use yii\base\Model;

class SectionForm extends Model
{
    public $name;

    public $alias;

    public $status;

    public $description;

    public $content;
    
    public function attributeLabels()
    {
        return [
            'name' => 'Название',
            'alias' => 'Псевдоним',
            'status' => 'Статус',
            'description' => 'Описание',
            'content' => 'Содержание',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'alias'], 'filter', 'filter' => 'trim'],

            [['name', 'alias'], 'required'],
            [['status'], 'integer'],
            [['description', 'content',], 'safe'],
        ];
    }
}