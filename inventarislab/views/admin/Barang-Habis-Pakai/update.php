<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangHabisPakai */

$this->title = 'Update Barang Habis Pakai: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barang Habis Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-habis-pakai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
