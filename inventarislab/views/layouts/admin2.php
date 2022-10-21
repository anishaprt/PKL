<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAssetAdmin;
use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;

AppAssetAdmin::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="AdminLTE + Mukhaimy">
	<meta name="keywords" content="">
	
	<link rel="shortcut icon" href="/vendors/adminkit/img/icons/icon-48x48.png" />

	<!-- Google Font: GANTI -->
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Noto+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet"> 

	<?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>

	<div class="wrapper">
		<?php $this->beginContent("@app/views/layouts/admin2navbar.php") ?>
		<?php $this->endContent() ?>

		<?php $this->beginContent("@app/views/layouts/admin2sidebar.php") ?>
		<?php $this->endContent() ?>
	

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
				<div class="col-sm-4">
					<h1><?= Html::encode($this->title) ?></h1>
				</div>
				<div class="col-sm-8">
				<ol class="breadcrumb float-sm-right">
					<?= Breadcrumbs::widget([
							'homeLink' => [ 
							'label' => Yii::t('yii', 'Dashboard'),
							'url' => ['/admin/dashboard/index'],
						],
						'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
						])
					?>
				</ol>
				</div>
				</div>
			</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
			<section class="content">

			<!-- Default box -->
			<div class="card">
				<div class="card-body">
					<?= $content ?>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->

			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
			<b>Version</b> 3.2.0
			</div>
			<strong>
		</footer>

	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
