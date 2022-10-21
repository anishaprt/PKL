<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\BarangPaketIsi;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangPaketIsiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Isi Barang Paketan';
$this->params['breadcrumbs'][] = ['label' => 'admin', 'url' => ['/admin/dashboard/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-paket-isi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nama',
            'jumlah',
            // 'id_barang_paket_jenis',
            [                
                'label'=>'Jenis',
                'format'=>'text',//raw, html
                'content'=>function($data){
                    return $data->barangPaketJenis->nama;
                }
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, \app\models\BarangPaketIsi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
