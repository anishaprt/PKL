<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barang Paketans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="barang-paketan-view">

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
        <?= Html::a('Back', ['admin/barang-paketan/index'], ['class' => 'btn btn-info text-white']) ?>
    </p>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_barang',
            'nomor',
            'id_barang_paket_jenis',
            //'id_lab',
            [
                'attribute'=>'lab',
                'value'=>$model->lab->nama,
            ],
            'harga',
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
