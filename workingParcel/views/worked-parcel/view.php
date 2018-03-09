<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User2 */

$this->title = $model->parcel->parcel_name;
$this->params['breadcrumbs'][] = ['label' => 'create work parcel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tractor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
		    'parcel.parcel_name',
            'worked_area',
			'date_worked'
        ],
    ]) ?>

</div>
