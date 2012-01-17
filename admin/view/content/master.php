<?php include '../header.php'; ?>

<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">

    <?php
    include '../menu.php';

    $master = $_GET[m];
    if (empty($master)) {
       
   } else {
        if ($master == "tk") {
            include 'master/tambah_kota.php';
        }else if ($master == "pr") {
            include 'master/tambah_provinsi.php';
        }else if ($master == "wp") {
            include 'master/tambah_warna.php';
        }else if ($master == "dp") {
            include 'master/tambah_detailproduk.php';
        }else if ($master == "prd") {
            include 'master/tambah_produk.php';
        }
    }







    include '../footer.php';
    ?>