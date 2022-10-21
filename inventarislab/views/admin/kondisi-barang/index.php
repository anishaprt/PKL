<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\KondisiBarang;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KondisiBarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kondisi Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kondisi-barang-index">

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
                'urlCreator' => function ($action, \app\models\KondisiBarang $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
