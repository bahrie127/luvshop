<?php 
include '../config/koneksi.php';

  $master = $_GET[m];
    if (empty($master)) {
       
   }else if($master == "i"){
       //insert data base ke warna produk
      
      $cek = mysql_query("insert into produk_warna values ('NULL','$_POST[namaWarna]')");
       if($cek){
          header("location: ../view/content/master.php?m=wp&s=ok");
       }else{
            header("location: ../view/content/master.php?m=wp&s=g");
       }
       
   }else if($master == "u"){
        $cek = mysql_query("UPDATE `produk_warna` SET  `warnaPW` =  '$_POST[nWarna]' WHERE  `idPW` =$_POST[idW]");
       if($cek){
          header("location: ../view/content/master.php?m=wp&s=up");
       }else{
            header("location: ../view/content/master.php?m=wp&s=g");
       }
   }else if($master == "d"){
       $cek = mysql_query("DELETE from `produk_warna` WHERE  `idPW` =$_GET[id]");
       if($cek){
          header("location: ../view/content/master.php?m=wp&s=del");
       }else{
            header("location: ../view/content/master.php?m=wp&s=g");
       }
   }



?>