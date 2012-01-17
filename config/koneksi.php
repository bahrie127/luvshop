<?php
$server="localhost";
$username="luv";
$password="shop";
$database="luvshop_db";
//koneksi dan memilih database di server
$koneksi=mysql_connect($server,$username,$password) or die("gagal");
mysql_select_db($database) or die ("database tidak ditemukan");
?>
