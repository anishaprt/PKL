<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RkondisiBarangPaketan */

$this->title = 'Create Riwayat Kondisi Barang Paket';
$this->params['breadcrumbs'][] = ['label' => 'Kondisi Barang Paketan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rkondisi-barang-paketan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
