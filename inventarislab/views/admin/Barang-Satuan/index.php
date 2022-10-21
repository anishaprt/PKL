<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\BarangSatuan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSatuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Umum';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-satuan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export Data', ['laporan'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama',
            'serial_number_utama',
            'serial_number_pelengkap',
            //'harga',
            //'id_kategori_barang_satuan',
            //'id_lab',
            'kondisi',
            'tanggal_kepemilikan',
            'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BarangSatuan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
