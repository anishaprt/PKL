<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com + Mukhaimy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <?php $this->beginContent("@app/views/layouts/main_navbar.php") ?>
    <?php $this->endContent() ?>

    <main>
        <div class="container">
            <div class="row">
                <div class="main col-sm-8">
                    <?= $content ?>
                </div>
                <div class="sidebar col-sm-4">
                    <?php $this->beginContent("@app/views/layouts/main_kanan.php") ?>
                    <?php $this->endContent() ?>
                </div>
            </div>
        </div>


    </main>

    <?php $this->beginContent("@app/views/layouts/main_footer.php") ?>
    <?php $this->endContent() ?>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>