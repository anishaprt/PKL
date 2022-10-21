<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriBarangHabisPakai */

$this->title = 'Create Kategori Barang Habis Pakai';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Barang Habis Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-barang-habis-pakai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
