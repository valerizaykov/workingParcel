<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PostSearch */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); 
	?>
	<div class="row">
	    
		<div class="col-md-6">
			<?=$form->field($model, 'parcelname')->textInput(['style'=>'width:500px'])->label('by Parcel Name'); ?>
			<?=$form->field($model, 'culture')->textInput(['style'=>'width:500px'])->label('by Culture'); ?> 
		</div>
		<div class="col-md-6"> 	   
			<?=$form->field($model, 'date_worked')->textInput(['style'=>'width:500px'])->label('by Date Worked'); ?> 
			<?=$form->field($model, 'tractorname')->textInput(['style'=>'width:500px'])->label('by Tractor Name'); ?> 
		</div>
	</div>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
