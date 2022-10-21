<?php

use app\models\PosterAcara;


/* @var $this yii\web\View */
/* @var $model app\models\BarangPaketIsi */
/* @var $form yii\widgets\ActiveForm */
$data = PosterAcara::find()->where(['is_aktif' => 1])->all();
$w = "active";
?>


<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php foreach ($data as $item): ?>
        <div class="carousel-item <?= $w ?>">
            <img src="/img/poster_acara/<?= $item->gambar ?>" class="d-block w-100" alt="...">
        </div>        
        <?php $w = ""; ?>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>