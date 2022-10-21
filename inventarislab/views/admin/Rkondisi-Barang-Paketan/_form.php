<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\KondisiBarang;
use app\models\BarangPaketan;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\RkondisiBarangPaketan */
/* @var $form yii\widgets\ActiveForm */
$k1Set = KondisiBarang::find()->all();
$cmbK1 = ArrayHelper::map($k1Set, 'id', 'nama');

$b1Set = BarangPaketan::find()->all();
$cmbB1 = ArrayHelper::map($b1Set, 'id', 'nama');
?>

<div class="rkondisi-barang-paketan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan tanggal ...'],
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                ]]) 
            ?>

    <?= $form->field($model, 'id_kondisi_barang')->dropDownList(
        $cmbK1, ['prompt'=>'pilih...']) ?>

    <?= $form->field($model, 'keterangan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', ['admin/rkondisi-barang-paketan/index'], ['class' => 'btn btn-info text-white']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
