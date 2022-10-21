<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\KategoriBarangHabisPakai;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KategoriBarangSatuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kategori Barang Habis Pakai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-barang-habis-pakai-index">

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
                'urlCreator' => function ($action, KategoriBarangHabisPakai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
