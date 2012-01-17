<?php 
include '../config/koneksi.php';
  $nama = $_POST[namaP];
  $berat = $_POST[beratP];
  $panjang = $_POST[panjangP];
  $lebar = $_POST[lebarP];
  $tinggi = $_POST[tinggiP];
  $panjangTali = $_POST[panjangTaliP];
  $bahan = $_POST[bahanP];
  
  $master = $_GET[m];
    if (empty($master)) {
       
   }else if($master == "i"){
       //insert data base ke warna produk
      
      $cek = mysql_query("insert into detail_produk values (NULL,'$nama',$berat,$panjang,$lebar,$tinggi,$panjangTali,'$bahan')");
       if($cek){
          header("location: ../view/content/master.php?m=dp&s=ok");
       }else{
            header("location: ../view/content/master.php?m=dp&s=g");
       }
       
   }else if($master == "u"){
        $cek = mysql_query("UPDATE detail_produk SET  namaDP='$nama',beratDP=$berat,panjangDP=$panjang,lebarDP=$lebar,panjangTaliDP=$panjangTali,bahanDP='$bahan' WHERE  `idDP` =$_POST[idP]");
       if($cek){
          header("location: ../view/content/master.php?m=dp&s=up");
       }else{
            header("location: ../view/content/master.php?m=dp&s=g");
       }
   }else if($master == "d"){
       $cek = mysql_query("DELETE from `detail_produk` WHERE  `idDP` =$_GET[id]");
       if($cek){
          header("location: ../view/content/master.php?m=dp&s=del");
       }else{
            header("location: ../view/content/master.php?m=dp&s=g");
       }
   }



?>