<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RpakaiBarangHabisPakai */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rpakai Barang Habis Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rpakai-barang-habis-pakai-view">

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
        
        <?= Html::a('Back', ['admin/rpakai-barang-habis-pakai/index'], ['class' => 'btn btn-info text-white']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_barang',
            'id_barang_habis_pakai',
            'tanggal',
            'jumlah_sisa',
            'keterangan',
        ],
    ]) ?>

</div>
