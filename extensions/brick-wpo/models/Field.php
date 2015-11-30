<?php
/**
 * Created by PhpStorm.
 * User: ostashevdv
 * Date: 28.11.2015
 * Time: 23:35
 */

namespace brick\wpo\models;


class Field extends \yii\base\Model
{
    const TYPE_INPUT = 'input';

    const TYPE_TEXTAREA = 'textarea';

    //ckeditor
    const TYPE_CONTENT = 'content';

    const TYPE_DATE = 'date';

    const TYPE_TIME = 'time';

    const TYPE_DATETIME = 'datetime';

    const TYPE_PASSWORD = 'password';


    public $name;

    public $attributeLabel;

    public $type = self::TYPE_INPUT;

    public $formOptions = [];

    public $multiple = false;

    public function rules()
    {
        return [
            [['name', 'attributeLabel'], 'required']
        ];
    }

}