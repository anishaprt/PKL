<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InputTest */

$this->title = 'Create Input Test';
$this->params['breadcrumbs'][] = ['label' => 'Input Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="input-test-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
