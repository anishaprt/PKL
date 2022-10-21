<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RkondisiBarangSatuan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rkondisi Barang Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rkondisi-barang-satuan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back', ['admin/rkondisi-barang-satuan/index'], ['class' => 'btn btn-info text-white']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'nama_barang',
            'id',
            'tanggal',
            'id_barang_satuan',
            'id_kondisi_barang',
            'keterangan',
        ],
    ]) ?>

</div>
