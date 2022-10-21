<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\BarangPaketJenis;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketIsi */
/* @var $form yii\widgets\ActiveForm */
$barangPaketJenisSet = BarangPaketJenis::find()->all();
$cmbBarangPaketJenis = ArrayHelper::map($barangPaketJenisSet, 'id', 'nama');
?>

<div class="barang-paket-isi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <?= $form->field($model, 'id_barang_paket_jenis')->dropDownList(
        $cmbBarangPaketJenis, ['prompt'=>'pilih...']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['admin/barang-paket-jenis/index'], ['class' => 'btn btn-info text-white']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
