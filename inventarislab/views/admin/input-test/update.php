<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InputTest */

$this->title = 'Update Input Test: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Input Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="input-test-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
