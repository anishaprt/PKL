<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\InputTest */

$this->title = 'datepick Test';

?>

<?php 
    if(isset($waktu)){
        echo  "waktu = ". $waktu;
    }
?>
<div>

    <?php 
    // usage without model
    echo '<label>Check Issue Date</label>';
    echo DatePicker::widget([
        'name' => 'tanggal',
        'options' => ['placeholder' => 'Pilih tanggal ...'],
        'pluginOptions' => [
            'format' => 'dd-M-yyyy',
            'todayHighlight' => true
        ]
    ]);
    ?>
</div>