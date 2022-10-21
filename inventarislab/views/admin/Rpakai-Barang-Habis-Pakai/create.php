<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RpakaiBarangHabisPakai */

$this->title = 'Create Riwayat Pemakaian';
$this->params['breadcrumbs'][] = ['label' => 'Rpakai Barang Habis Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rpakai-barang-habis-pakai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
