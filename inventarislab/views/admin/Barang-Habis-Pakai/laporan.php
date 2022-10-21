<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\BarangHabisPakai;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSatuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Habis Pakai';
$this->params['breadcrumbs'][] = $this->title;
$namaKat ='';
?>


<h1>Daftar Barang Habis Pakai</h1>
<ul>
    <table class="table table-bordered">
        <tr>
            <th>-</th>
            <th>Harga</th>
            <th>Jumlah Awal</th>
            <th>Satuan</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
        </tr>
    <?php foreach($lap as $item): ?>
        <?php
            if($namaKat != $item->kategoriBarangHabisPakai->nama){
                $namaKat = $item->kategoriBarangHabisPakai->nama;
                echo "<tr><td colspan='5'>" , $item->kategoriBarangHabisPakai->nama , "</td></tr>";
            }
                
           ?>
        <tr>
            <td> &nbsp; &nbsp; </td>
            <td><?=  $item->harga ?> </td> 
            <td><?=  $item->jumlah_awal ?> </td> 
            <td><?=  $item->satuan ?> </td> 
            <td><?=  $item->kondisi ?> </td>
            <td><?=  $item->keterangan ?> </td> 
            
        </li>
    <?php endforeach; ?>
    </table>

    </ul>
    <script>
    window.print();
</script>
</div>
