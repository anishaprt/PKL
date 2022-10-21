<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RkondisiBarangSatuan */

$this->title = 'Create Kondisi Barang Umum';
$this->params['breadcrumbs'][] = ['label' => 'Rkondisi Barang Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rkondisi-barang-satuan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
