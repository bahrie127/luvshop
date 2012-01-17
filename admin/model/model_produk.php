<?php

include '../config/koneksi.php';
$produk = $_POST[produk];
$warna = $_POST[warna];
$stock = $_POST[stock];
$harga = $_POST[harga];


$master = $_GET[m];
if (empty($master)) {
    
} else if ($master == "i") {
    //insert data base ke warna produk
    $fileName = $_FILES['picture']['name']; //get the file name
    $fileSize = $_FILES['picture']['size']; //get the size
    $fileError = $_FILES['picture']['error']; //get the error when upload
    if ($fileSize > 0 || $fileError == 0) { //check if the file is corrupt or error
        $move = move_uploaded_file($_FILES['picture']['tmp_name'], '../../upload/' . $fileName); //save image to the folder
        if ($move) {
            $gmb = 'upload/' . $fileName;
            $cek = mysql_query("insert into produk values (NULL,$stock,$harga,$produk,$warna,'$gmb')");
            if ($cek) {
                header("location: ../view/content/master.php?m=prd&s=ok");
            } else {
                header("location: ../view/content/master.php?m=prd&s=g");
            }
        } else {
            header("location: ../view/content/master.php?m=prd&s=g");
        }
    } else {
        header("location: ../view/content/master.php?m=prd&s=g");
    }
} else if ($master == "u") {
    $fileName = $_FILES['picture']['name']; //get the file name
    $fileSize = $_FILES['picture']['size']; //get the size
    $fileError = $_FILES['picture']['error']; //get the error when upload
    if ($fileSize > 0 || $fileError == 0) { //check if the file is corrupt or error
        $move = move_uploaded_file($_FILES['picture']['tmp_name'], '../../upload/' . $fileName); //save image to the folder
        if ($move) {
             $gmb = 'upload/' . $fileName;
            $cek = mysql_query("UPDATE produk SET  stock = $stock,harga = $harga, idDP=$produk,idPW=$warna,gambar='$gmb' WHERE  `idproduk` =$_POST[idPR]");
            if ($cek) {
                header("location: ../view/content/master.php?m=prd&s=up");
            } else {
                header("location: ../view/content/master.php?m=prd&s=g");
            }
        } else {
            header("location: ../view/content/master.php?m=prd&s=g");
        }
    } else {
        header("location: ../view/content/master.php?m=prd&s=g");
    }
} else if ($master == "d") {
    $cek = mysql_query("DELETE from `produk` WHERE  `idproduk` =$_GET[id]");
    if ($cek) {
        header("location: ../view/content/master.php?m=prd&s=del");
    } else {
        header("location: ../view/content/master.php?m=prd&s=g");
    }
}
?>