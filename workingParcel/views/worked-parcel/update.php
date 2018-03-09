<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Post */

$this->title = 'Update Worked Parcel';
$this->params['breadcrumbs'][] = ['label' => 'Worked Parcel', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
