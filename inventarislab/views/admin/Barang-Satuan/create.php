<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangSatuan */

$this->title = 'Create Barang Satuan';
$this->params['breadcrumbs'][] = ['label' => 'Barang Satuans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-satuan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
