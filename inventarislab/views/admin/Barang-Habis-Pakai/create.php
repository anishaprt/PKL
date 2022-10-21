<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangHabisPakai */

$this->title = 'Create Barang Habis Pakai';
$this->params['breadcrumbs'][] = ['label' => 'Barang Habis Pakais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-habis-pakai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
