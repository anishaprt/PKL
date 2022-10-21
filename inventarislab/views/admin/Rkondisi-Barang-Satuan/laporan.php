<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\RkondisiBarangSatuan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSatuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Riwayat Kondisi Barang Satuan';
$this->params['breadcrumbs'][] = $this->title;
?>


<h1>Riwayat Kondisi Barang Satuan</h1>
<ul>
    <table class="table table-bordered">
        <tr>
           <th>Id</th>
            <th>Tanggal</th>
            <th>Kondisi</th>
        </tr>
    <?php foreach($lap as $item): ?>
        <tr>
            <td><?=  $item->id ?> </td> 
            <td><?=  $item->tanggal ?> </td> 
            <td><?=  $item->kondisi ?> </td> 
        </li>
    <?php endforeach; ?>
    </table> 

    </ul>
    <script>
    window.print();
</script>
</div>
