<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\BarangPaketan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSatuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Paketan';
$this->params['breadcrumbs'][] = $this->title;
$namaKat = '';
?>


<h1>Daftar Barang Paketan</h1>
<ul>
    <table class="table table-bordered">
        <tr>
            <th>Kategori</th>
            <!-- <th>Nama</th> -->
           <!--  <th>BarangPaketJenis</th> -->
            <th>Harga</th>
            <th>Kondisi</th>
        </tr>
    <?php foreach($lap as $item): ?>
        <?php
            if($namaKat != $item->barangPaketJenis->nama){
                $namaKat = $item->barangPaketJenis->nama;
                echo "<tr><td colspan='4'>" , $item->barangPaketJenis->nama , "</td></tr>";
            }
                
           ?>
        <tr>
            <td> &nbsp; &nbsp; </td>
            <td><?=  $item->harga ?> </td> 
            <td><?=  $item->kondisi ?> </td>
            
        </li>
    <?php endforeach; ?>
    </table> 

    </ul>
    <script>
    window.print();
</script>
</div>
