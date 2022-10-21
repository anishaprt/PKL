<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Url;
?>

<nav class="navbar navbar-expand-lg fixed-top pb-3">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::toRoute(['site/index']) ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= Url::toRoute(['admin/dashboard/index']) ?>">
                        <i class=""></i>Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>