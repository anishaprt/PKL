<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Url;
?>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= Url::toRoute(['site/index']) ?>" class="nav-link"><i class="fa-solid fa-globe text-info"></i> Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= Url::toRoute(['admin/dashboard/index']) ?>" class="nav-link"><i class="fa-solid fa-sliders text-info"></i> Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= Url::toRoute(['site/logout']) ?>" class="nav-link">
        <i class="fa-solid fa-right-from-bracket text-danger"></i> logout</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->
