<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BarangSatuan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barang Satuan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="barang-satuan-view">

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
        <?= Html::a('Back', ['admin/barang-satuan/index'], ['class' => 'btn btn-info text-white']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'serial_number_utama',
            'serial_number_pelengkap',
            'harga',
            [
                'attribute'=>'Kategori Barang Satuan',
                'value'=>$model->kategoriBarangSatuan->nama,
            ],
            [
                'attribute'=>'lab',
                'value'=>$model->lab->nama,
            ],
            'kondisi',
            'tanggal_kepemilikan',
            'keterangan',
        ],
    ]) ?>
    <h1>Riwayat Kondisi</h1>
    <table class="table table-bordered">
        <tr>
            <th>Tanggal</th>
            <th>Kondisi</th>
        </tr>
    <?php foreach($riwayat as $item): ?>
        <tr>
            <td><?=  $item->tanggal ?> </td> 
            <td><?=  $item->kondisiBarang->nama ?> </td> 
        </li>
    <?php endforeach; ?>
    </table>
</div>
