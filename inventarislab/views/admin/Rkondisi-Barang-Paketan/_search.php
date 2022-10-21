<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RkondisiBarangPaketanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rkondisi-barang-paketan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tanggal') ?>

    <?= $form->field($model, 'id_barang_paketan') ?>

    <?= $form->field($model, 'id_kondisi_barang') ?>

    <?= $form->field($model, 'keterangan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
