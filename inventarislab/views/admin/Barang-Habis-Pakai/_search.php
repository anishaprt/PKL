<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BarangHabisPakaiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barang-habis-pakai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'id_kategori_barang_habis_pakai') ?>

    <?= $form->field($model, 'id_lab') ?>

    <?= $form->field($model, 'harga') ?>

    <?php // echo $form->field($model, 'tanggal_kepemilikan') ?>

    <?php // echo $form->field($model, 'jumlah_awal') ?>

    <?php // echo $form->field($model, 'satuan') ?>

    <?php // echo $form->field($model, 'kondisi') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
