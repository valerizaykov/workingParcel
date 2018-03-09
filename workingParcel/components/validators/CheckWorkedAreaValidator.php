<?php
namespace app\components\validators;

use yii\validators\Validator;

class CheckWorkedAreaValidator extends Validator
{
    public function validateAttribute($model, $attribute)
    {
        if (!in_array($model->$attribute, ['0', '1000'])) {
            $this->addError($model, $attribute, 'max is 1000');
        }
    }
}?>