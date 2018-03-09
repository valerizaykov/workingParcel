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
	<?=
	  $form->field($model, 'tractor_id')
		->dropDownList(
            ArrayHelper::map(Tractor::find()->asArray()->all(), 'id', 'name')
            )
	?>
	<?=
	  $form->field($model, 'parcel_id')
		->dropDownList(
            ArrayHelper::map(Parcel::find()->asArray()->all(), 'id', 'parcel_name')
            )
	?>
    <!-- <?= Html::activeDropDownList($model, 'parcel_id',
      ArrayHelper::map(Parcel::find()->all(), 'id', 'parcel_name')) ?> -->
    <?= $form->field($model, 'worked_area')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'date_worked')->widget(\yii\jui\DatePicker::className(), [
      'language' => 'bg',
      'dateFormat' => 'yyyy-MM-dd',
    ]) ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
