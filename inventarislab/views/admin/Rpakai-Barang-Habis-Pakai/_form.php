<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\BarangHabisPakai;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\RpakaiBarangHabisPakai */
/* @var $form yii\widgets\ActiveForm */
$b1Set = BarangHabisPakai::find()->all();
$cmbB1 = ArrayHelper::map($b1Set, 'id', 'nama');
?>

<div class="rpakai-barang-habis-pakai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_barang')->textInput() ?>

    <?= $form->field($model, 'tanggal')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan tanggal ...'],
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                ]]) 
            ?>

    <?= $form->field($model, 'jumlah_sisa')->textInput() ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['admin/barang-habis-pakai/index'], ['class' => 'btn btn-info text-white']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
