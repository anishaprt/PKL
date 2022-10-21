<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketIsi */

$this->title = 'Create Isi Barang Paket';
$this->params['breadcrumbs'][] = ['label' => 'Isi Paket', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-paket-isi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
