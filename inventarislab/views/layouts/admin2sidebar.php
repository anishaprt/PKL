<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Url;
?>


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= Url::toRoute(['admin/dashboard/index']) ?>" class="brand-link">
        <img src="/vendors/adminlte/img/umbanjarmasin.png" alt="lLogo" class="brand-image img-circle" style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="mt-2">
            <a href= " class="brand-link">
            <img src="/img/adminbaru.png" class="brand-image img-circle" style="opacity: .7">
        <span class="brand-text font-weight-light" style="color:White; font: size 1px;"><b>Admin</b></span>
        
    </a>


        <!-- SidebarSearch Form -->
        <!-- tambahkan apabila perlu -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['admin/input-test/index']) ?>" class="nav-link">                        
                        <i class="nav-icon fa-solid fa-keyboard"></i>
                        <p>Input Test</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= Url::toRoute(['admin/lab/index']) ?>" class="nav-link">
                        <i class="nav-icon fa-solid fa-flask-vial"></i>
                        <p>LAB</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::toRoute(['admin/kondisi-barang/index']) ?>" class="nav-link">
                        <i class="nav-icon fa-solid fa-briefcase-medical"></i>
                        <p>Kondisi Barang</p>
                    </a>
                </li>

                <li class="nav-item">
                <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-computer"></i>
                        <p>Barang Satuan<i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                     <a href="<?= Url::toRoute(['admin/barang-satuan/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar</p>
                            </a>
                        </li>

                        <li class="nav-item">
                        <a href="<?= Url::toRoute(['admin/kategori-barang-satuan/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= Url::toRoute(['admin/rkondisi-barang-satuan/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Riwayat Kondisi</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-toolbox"></i>
                        <p>Barang Paket
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= Url::toRoute(['admin/barang-paketan/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::toRoute(['admin/barang-paket-jenis/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jenis</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= Url::toRoute(['admin/barang-paket-isi/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Isi Paket</p>
                            </a>
                        </li>
                        <li class="nav-item">
                             <a href="<?= Url::toRoute(['admin/rkondisi-barang-paketan/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Riwayat Kondisi</p>
                            </a>
                            </a>
                    </ul>
                </li>

                <li class="nav-item">
                <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-sd-card"></i>
                        <p>Barang Habis Pakai<i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                     <a href="<?= Url::toRoute(['admin/barang-habis-pakai/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Daftar</p>
                            </a>
                        </li>

                        <li class="nav-item">
                        <a href="<?= Url::toRoute(['admin/kategori-barang-habis-pakai/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= Url::toRoute(['admin/rpakai-barang-habis-pakai/index']) ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Riwayat Pemakaian</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>