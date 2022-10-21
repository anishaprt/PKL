<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Lab;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LabSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Labs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php echo $this->render('_search2', ['model' => $searchModel]); ?>
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama LAB</th>        
      </tr>
    </thead>
    <tbody>
    <?php foreach ($dataProvider->getModels() as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->nama ?></td>            
      </tr>
    <?php endforeach; ?>      
    </tbody>
  </table>

    


</div>
