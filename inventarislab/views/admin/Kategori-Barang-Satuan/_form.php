<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KategoriBarangSatuan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kategori-barang-satuan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['admin/kategori-barang-satuan/index'], ['class' => 'btn btn-info text-white']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
