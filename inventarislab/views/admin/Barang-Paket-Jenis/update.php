<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketJenis */

$this->title = 'Update Jenis Barang Paket: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barang Paket Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-paket-jenis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
