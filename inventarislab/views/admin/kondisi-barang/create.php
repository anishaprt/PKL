<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KondisiBarang */

$this->title = 'Create Kondisi Barang';
$this->params['breadcrumbs'][] = ['label' => 'Kondisi Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kondisi-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
