<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\BarangPaketan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangPaketanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Paketan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-paketan-index">

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
            //'nama_barang',
            'nomor',
            //'id_barang_paket_jenis',
            //'id_lab',
            //'harga',
            'kondisi',
            'tanggal_kepemilikan',
            //'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BarangPaketan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
