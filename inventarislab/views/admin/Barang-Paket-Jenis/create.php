<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketJenis */

$this->title = 'Create Barang Paket Jenis';
$this->params['breadcrumbs'][] = ['label' => 'Barang Paket Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-paket-jenis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
