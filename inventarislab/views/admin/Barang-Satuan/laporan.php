<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\BarangSatuan;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BarangSatuanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barang Umum';
$this->params['breadcrumbs'][] = $this->title;
$namaKat = '';
$namaBarang = '';
?>

<h1>Daftar Barang Satuan</h1>
<ul>
    <table class="table table-bordered">
        <tr>
            <th>Kategori</th>
            <th>Nama</th>
            <th>Serial Number Utama</th>
            <th>Harga</th>
            <th>Kondisi</th>
        </tr>
    <?php foreach($lap as $item): ?>
        <?php
            if($namaKat != $item->kategoriBarangSatuan->nama){
                $namaKat = $item->kategoriBarangSatuan->nama;
                echo "<tr><td colspan='5'>" , $item->kategoriBarangSatuan->nama , "</td></tr>";
            }
                
           ?>
        <tr>
            <td> &nbsp; &nbsp; </td>
            <?php 
                if($namaBarang != $item->nama){
                    $namaBarang = $item->nama;
                    echo "<td> ", $item->nama , " </td>";
                }
                else{
                    echo "<td> </td>";
                }
            ?>
            
            <td><?=  $item->serial_number_utama ?> </td> 
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
