<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RkondisiBarangSatuan */

$this->title = 'Update Rkondisi Barang Satuan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rkondisi Barang Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rkondisi-barang-satuan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
