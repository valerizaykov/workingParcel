<?php
use yii\db\ActiveRecord; 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\bootstrap\Dropdown;
use yii\jui\DatePicker;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use app\models\Tractor;
use app\models\Parcel;
/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workedparcel-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'parcel_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'culture')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?> 
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
