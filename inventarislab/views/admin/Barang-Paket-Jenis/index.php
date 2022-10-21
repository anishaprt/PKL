<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\BarangPaketJenis;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangPaketJenisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Paket Jenis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-paket-jenis-index">

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

            //'id',
            'nama',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, BarangPaketJenis $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
