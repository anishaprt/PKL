<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Lab;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laboratorium';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-index">

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

            // 'id',
            'nama',
            'kepala_lab_nama',
            'kepala_lab_nidn',
            // 'keterangan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Lab $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
            
        ],
    ]); ?>


</div>
