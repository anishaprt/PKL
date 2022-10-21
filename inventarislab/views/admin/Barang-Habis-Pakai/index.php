<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\BarangHabisPakai;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangHabisPakaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Habis Pakai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-habis-pakai-index">

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

            //'id',
            'nama',
            'id_kategori_barang_habis_pakai',
            'id_lab',
            'kondisi',
            //'harga',
            //'tanggal_kepemilikan',
            //'jumlah_awal',
            //'satuan',
            //'kondisi',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\BarangHabisPakai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
