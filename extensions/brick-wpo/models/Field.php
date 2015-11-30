<?php

namespace brick\wpo\models;

use Yii;

class Field extends \yii\base\Model
{
    const TYPE_STRING = 'string';

    const TYPE_INTEGER = 'integer';

    const TYPE_CHECKBOX = 'checkbox';

    const TYPE_PASSWORD = 'password';

    const TYPE_TEXT = 'text';
    public $type = self::TYPE_STRING;
    public $name;
    public $label;
    public $multiple = false;
    public $options = [];
    public $fieldOptions = [];

    public static function typeList()
    {
        return [
            self::TYPE_STRING => 'Строка',
            self::TYPE_INTEGER => 'Число',
            self::TYPE_CHECKBOX => 'Чекбокс',
            self::TYPE_PASSWORD => 'Пароль',
            self::TYPE_TEXT => 'Текст',
        ];
    }

    public function rules()
    {
        return [
            [['name', 'label', 'type'], 'required'],
            ['name', 'string', 'max' => 255]
        ];
    }

    public function attributeLabels()
    {
        return [
            'type' => 'Тип',
            'name' => 'Имя',
            'label' => 'Заголовок',
            'multiple' => 'Множ. выбор',
        ];
    }
}