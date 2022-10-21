<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use kartik\time\TimePicker;
use kartik\number\NumberControl;


/* @var $this yii\web\View */
/* @var $model app\models\InputTest */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-6">
        <div class="input-test-form">

            <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'ket')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'flow')->widget(NumberControl::classname(), [                
                'maskedInputOptions' => [
                    'groupSeparator' => '.',
                    'radixPoint' => ',',
                    'rightAlign' => true,
                ],
                ])  
            ?>

            <?= $form->field($model, 'tgl')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan tanggal ...'],
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'dd-mm-yyyy',
                    'todayHighlight' => true,
                ]]) 
            ?>

            <?= $form->field($model, 'jam')->widget(TimePicker::classname(), [
                'options' => ['placeholder' => 'Masukkan waktu ...'],
                'pluginOptions' => [
                    'showSeconds' => true,
                    'showMeridian' => false,
                ]]) 
            ?>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>

    </div>
</div>