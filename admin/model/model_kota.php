<?php 
include '../config/koneksi.php';

  $master = $_GET[m];
    if (empty($master)) {
       
   }else if($master == "i"){
       //insert data base ke warna produk
      
      $cek = mysql_query("insert into kota values ('NULL','$_POST[kota]')");
       if($cek){
          header("location: ../view/content/master.php?m=tk&s=ok");
       }else{
            header("location: ../view/content/master.php?m=tk&s=g");
       }
       
   }else if($master == "u"){
        $cek = mysql_query("UPDATE `kota` SET  `namakota` =  '$_POST[kota]' WHERE  `idkota` =$_POST[idkota]");
       if($cek){
          header("location: ../view/content/master.php?m=tk&s=up");
       }else{
            header("location: ../view/content/master.php?m=tk&s=g");
       }
   }else if($master == "d"){
       $cek = mysql_query("DELETE from `kota` WHERE  `idkota` =$_GET[id]");
       if($cek){
          header("location: ../view/content/master.php?m=tk&s=del");
       }else{
            header("location: ../view/content/master.php?m=tk&s=g");
       }
   }



?>