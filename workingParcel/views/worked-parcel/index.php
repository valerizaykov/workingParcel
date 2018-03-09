<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\base\Model;
/* @var $this yii\web\View */
/* @var $searchModel common\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Worked Parcels';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php  echo $this->render('_search', [
        'model' => $searchModel,
       ]); 
?>
<?php 
if(!Yii::$app->user->isGuest){?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
	 
    <p>
        <?= Html::a('Create Worked Parcel', ['create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Create Tractor', ['/tractor/create'], ['class' => 'btn btn-success']) ?>
		<?= Html::a('Create Parcel', ['/parcel/create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
			[
				'attribute' => 'parcelname',
				'value' => 'parcel.parcel_name'
			 ],
			 [
				'attribute' => 'culture',
				'value' => 'parcel.culture'
			 ],
			 'date_worked',
			 [
				'attribute' => 'tractorname',
				'value' => 'tractor.name'
			 ],
			 [
				'attribute' => 'area',
				'value' => 'parcel.area'
			 ],
             
			 'worked_area',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); 
}?>
</div>
