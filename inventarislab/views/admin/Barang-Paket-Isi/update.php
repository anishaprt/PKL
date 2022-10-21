<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketIsi */

$this->title = 'Update Barang Paket Isi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Isi Paket', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-paket-isi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
