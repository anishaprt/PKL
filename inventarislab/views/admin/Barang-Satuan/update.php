<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangSatuan */

$this->title = 'Update Barang Satuan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barang Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barang-satuan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
