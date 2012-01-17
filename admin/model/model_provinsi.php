<?php 
include '../config/koneksi.php';

  $master = $_GET[m];
    if (empty($master)) {
       
   }else if($master == "i"){
       //insert data base ke warna produk
      
      $cek = mysql_query("insert into provinsi values ('NULL','$_POST[provinsi]')");
       if($cek){
          header("location: ../view/content/master.php?m=pr&s=ok");
       }else{
            header("location: ../view/content/master.php?m=pr&s=g");
       }
       
   }else if($master == "u"){
        $cek = mysql_query("UPDATE `provinsi` SET  `namapro` =  '$_POST[provinsi]' WHERE  `idprovinsi` =$_POST[idprovinsi]");
       if($cek){
          header("location: ../view/content/master.php?m=pr&s=up");
       }else{
            header("location: ../view/content/master.php?m=pr&s=g");
       }
   }else if($master == "d"){
       $cek = mysql_query("DELETE from `provinsi` WHERE  `idprovinsi` =$_GET[id]");
       if($cek){
          header("location: ../view/content/master.php?m=pr&s=del");
       }else{
            header("location: ../view/content/master.php?m=pr&s=g");
       }
   }



?>