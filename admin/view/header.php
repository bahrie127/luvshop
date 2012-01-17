<!DOCTYPE HTML>
<?php
session_start();
//jika belum mempunyai session akan langsung kembali ke form login
include '../../backToIndex.php';

?>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Simplpan - Admin Panel</title>

    <!-- Imports General CSS and jQuery CSS -->
    <link href="<?php include '../../config/url.php'; ?>css/screen.css" rel="stylesheet" media="screen" type="text/css" />

    <!-- CSS for Fluid and Fixed Widths - Double to prevent flickering on change -->
    <link href="<?php include '../../config/url.php'; ?>css/fixed.css" rel="stylesheet" media="screen" type="text/css" />
    <link href="<?php include '../../config/url.php'; ?>css/fixed.css" rel="stylesheet" media="screen" type="text/css" class="width" />

    <!-- CSS for Theme Styles - Double to prevent flickering on change -->
    <link href="<?php include '../../config/url.php'; ?>css/theme/blue.css" rel="stylesheet" media="screen" type="text/css" />
    <link href="<?php include '../../config/url.php'; ?>css/theme/blue.css" rel="stylesheet" media="screen" type="text/css" class="theme" />

    <!-- jQuery thats loaded before document ready to prevent flickering - Rest are found at the bottom -->
    <script type="text/javascript" src="<?php include '../../config/url.php'; ?>js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="<?php include '../../config/url.php'; ?>js/jquery.cookie.js"></script>
    <script type="text/javascript" src="<?php include '../../config/url.php'; ?>js/jquery.styleswitcher.js"></script>
    <script type="text/javascript" src="<?php include '../../config/url.php'; ?>js/jquery.visualize.js"></script>
    <script type="text/javascript">
        function validateForm()
        {
            var x=document.forms["fwarna"]["namaWarna"].value;
            
            if (x==null || x=="")
            {
                alert("Text masih kosong");
                return false;
            }
        }
        
        function valiProduk(){
            var nama=document.forms["fproduk"]["namaP"].value;
            var berat=document.forms["fproduk"]["beratP"].value;
            var panjang=document.forms["fproduk"]["panjangP"].value;
            var lebar=document.forms["fproduk"]["lebarP"].value;
            var tinggi=document.forms["fproduk"]["tinggiP"].value;
            var panjangTali=document.forms["fproduk"]["panjangTaliP"].value;
            var bahan=document.forms["fproduk"]["bahanP"].value;
            
            if (nama==null || nama=="")
            {
                alert("Text masih kosong");
                return false;
            }else if (berat==null || berat=="")
            {
                alert("Text masih kosong");
                return false;
            }else if (panjang==null || panjang=="")
            {
                alert("Text masih kosong");
                return false;
            }else if (lebar==null || lebar=="")
            {
                alert("Text masih kosong");
                return false;
            }else if (tinggi==null || tinggi=="")
            {
                alert("Text masih kosong");
                return false;
            }else if (panjangTali==null || panjangTali=="")
            {
                alert("Text masih kosong");
                return false;
            }else if (bahan==null || bahan=="")
            {
                alert("Text masih kosong");
                return false;
            }
        }
        
        function valiProd(){
            var produk=document.forms["fpr"]["produk"].value;
            var warna=document.forms["fpr"]["warna"].value;
            var stock=document.forms["fpr"]["stock"].value;
            var harga=document.forms["fpr"]["harga"].value;
           
            
            if (produk==null || produk=="")
            {
                alert("Text masih kosong");
                return false;
            }else if (warna==null || warna=="")
            {
                alert("Text masih kosong");
                return false;
            }else if (stock==null || stock=="")
            {
                alert("Text masih kosong");
                return false;
            }else if (harga==null || harga=="")
            {
                alert("Text masih kosong");
                return false;
            }
        } 
        
        function valiKota()
        {
            var x=document.forms["fkota"]["kota"].value;
            
            if (x==null || x=="")
            {
                alert("Text masih kosong");
                return false;
            }
        }
        
         function valiPro()
        {
            var x=document.forms["fpro"]["provinsi"].value;
            
            if (x==null || x=="")
            {
                alert("Text masih kosong");
                return false;
            }
        }
    </script>
</head>

<body>
    <?php include '../../config/koneksi.php'; ?>