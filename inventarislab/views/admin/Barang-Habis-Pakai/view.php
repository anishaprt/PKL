<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BarangHabisPakai */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barang Habis Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="barang-habis-pakai-view">

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
        
        <?= Html::a('Back', ['admin/barang-habis-pakai/index'], ['class' => 'btn btn-info text-white']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
            'id_kategori_barang_habis_pakai',
            //'id_lab',
            [
                'attribute'=>'lab',
                'value'=>$model->lab->nama,
            ],
            'harga',
            'tanggal_kepemilikan',
            'jumlah_awal',
            'satuan',
            'kondisi',
            'keterangan',
        ],
    ]) ?>

<h1>Riwayat Kondisi</h1>
    <table class="table table-bordered">
        <tr>
            <th>Tanggal</th>
            <th>Jumlah Sisa</th>
        </tr>
    <?php foreach($riwayat as $item): ?>
        <tr>
            <td><?=  $item->tanggal ?> </td> 
            <td><?=  $item->jumlahsisa->nama ?> </td> 
        </li>
    <?php endforeach; ?>
    </table>

</div>
