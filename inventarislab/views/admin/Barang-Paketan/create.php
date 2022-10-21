<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketan */

$this->title = 'Create Barang Paketan';
$this->params['breadcrumbs'][] = ['label' => 'Barang Paketans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barang-paketan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
