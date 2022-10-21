<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\BarangPaketJenis;
use app\models\Lab;
use app\models\KondisiBarang;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketan */
/* @var $form yii\widgets\ActiveForm */
$k2Set = KondisiBarang::find()->all();
$cmbK2 = ArrayHelper::map($k2Set, 'id', 'nama');

$k1Set = Lab::find()->all();
$cmbK1 = ArrayHelper::map($k1Set, 'id', 'nama');

$b1Set = BarangPaketJenis::find()->all();
$cmbB1 = ArrayHelper::map($b1Set, 'id', 'nama');
?>

<div class="barang-paketan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_barang')->textInput() ?>

    <?= $form->field($model, 'id_barang_paket_jenis')->dropDownList(
        $cmbB1, ['prompt'=>'pilih...']) ?>

    <?= $form->field($model, 'id_lab')->dropDownList(
        $cmbK1, ['prompt'=>'pilih...']) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'kondisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_kepemilikan')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan tanggal ...'],
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                ]]) 
            ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['admin/barang-paketan/index'], ['class' => 'btn btn-info text-white']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
