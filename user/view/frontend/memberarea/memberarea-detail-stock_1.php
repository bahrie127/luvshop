    
<script type="text/javascript">
    $(document).ready(function(){
                
                
        $("li#home").addClass("background_menu").css({
            "margin-top":"-1px"
        });
        $("li#account,li#shipment,li#confpayment").css({
            "margin-top":"-1px"
        });
               
        $(".content_right,.header,.mycart").mouseover(function(){
            $("li#home").addClass("background_menu").css({
                "z-index":"1"
            });
            $("li#progress,li#shipment,li#confpayment,li#account").removeClass("background_menu");
        });
               
    });
</script>

<div class="content">
    <?php include($dd . 'user/view/frontend/content_left/content_left.php'); ?>
    <div class="content_right">
        <div class="submenu_right_detail">
            
            <ul style="list-style: none">
                <li style="display: inline-block">
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/home/tas5.gif"  id="img_utama"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil1.gif"  id="img_utama_tk1"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil2.gif"  id="img_utama_tk2"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil3.gif"  id="img_utama_tk3"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil4.gif"  id="img_utama_tk4"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil5.gif"  id="img_utama_tk5"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil6.gif"  id="img_utama_tk6"/>
                </li>
                <li style="display: inline-block">
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/home/tas5.gif" id="img_utama_shadow"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil1.gif"  id="img_utama_tk1_shadow"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil2.gif"  id="img_utama_tk2_shadow"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil3.gif"  id="img_utama_tk3_shadow"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil4.gif"  id="img_utama_tk4_shadow"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil5.gif"  id="img_utama_tk5_shadow"/>
                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil6.gif"  id="img_utama_tk6_shadow"/>
                </li>
                <li style="display: inline-block;margin-left: 288px">
                    <ul style="margin-top: 10px">
                        <li>
                            <table>
                                <tr>
                                    <td><img  src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil1.gif" class="img_kedua" id="tk1"/></td>
                                    <td><img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil2.gif" class="img_kedua" id="tk2"/></td>
                                    <td><img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil3.gif" class="img_kedua" id="tk3"/></td>
                                </tr>
                                <tr>
                                    <td><img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil4.gif" class="img_kedua" id="tk4"/></td>
                                    <td><img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil5.gif" class="img_kedua" id="tk5"/></td>
                                    <td><img src="<?php include ($dd. "config/url.php"); ?>user/image/stock/taskecil6.gif" class="img_kedua" id="tk6"/></td>
                                </tr>
                            </table>
                        </li>
                        
                        <li>
                            <ul style="margin-top: 70px; position: static">
                                <li>
                                    <h1 style="color: #960316;margin-bottom: 10px;" id="list_harga_barang">Rp.95.000</h1>
                                    <h1 style="color: #960316;margin-bottom: 10px;" id="list_harga_barang_tk1">Rp.295.000</h1>
                                    <h1 style="color: #960316;margin-bottom: 10px;" id="list_harga_barang_tk2">Rp.195.000</h1>
                                    <h1 style="color: #960316;margin-bottom: 10px;" id="list_harga_barang_tk3">Rp.495.000</h1>
                                    <h1 style="color: #960316;margin-bottom: 10px;" id="list_harga_barang_tk4">Rp.295.000</h1>
                                    <h1 style="color: #960316;margin-bottom: 10px;" id="list_harga_barang_tk5">Rp.955.000</h1>
                                    <h1 style="color: #960316;margin-bottom: 10px;" id="list_harga_barang_tk6">Rp.905.000</h1>
                                </li>
                                <li>
                                    <p style="font-weight: bold; display: inline-block; margin-top: 10px">Colour:</p>

                                    <select style="width: 102px; background-color: white;border: 1px solid #bec6d3;display: inline-block; margin-left: 12px; margin-bottom: 10px;">
                                        <option>

                                        </option>
                                    </select>
                                </li>
                                <li>
                                    <p style="font-weight: bold; display: inline-block">Quantity:</p>
                                    <input style="border: 1px solid #bec6d3; width: 50px;"/>
                                </li>
                                <li>
                                    <p style="text-align: left;font-size: 10px; margin-top: 5px; display: none;position: absolute;z-index: 2;background-color: white" id="confirmasi">
                                        Available Pre Order<br/>*waktu pembuatan 2 minggu dari tanggal<br/>Confirmation of Payment
                                    </p>
                                </li>
                                <li>
                                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer" class="addcart"/>
                                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer;display: none" class="addcart_tk1"/>
                                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer;display: none" class="addcart_tk2"/>
                                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer;display: none" class="addcart_tk3"/>
                                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer;display: none" class="addcart_tk4"/>
                                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer;display: none" class="addcart_tk5"/>
                                    <img src="<?php include ($dd. "config/url.php"); ?>user/image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer;display: none" class="addcart_tk6"/>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <ul style="margin-left: 24px;margin-top: 40px;" id="list_list">
                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang">VENTAGO</p></li>
                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>

                    </ul>
                    <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk1">
                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk1">VENTAGO tas kecil 1</p></li>
                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>

                    </ul>
                    <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk2">
                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk2">VENTAGO tas kecil 2</p></li>
                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>

                    </ul>
                    <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk3">
                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk3">VENTAGO tas kecil 3</p></li>
                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>

                    </ul>
                    <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk4">
                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk4">VENTAGO tas kecil 4</p></li>
                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>

                    </ul>
                    <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk5">
                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk5">VENTAGO tas kecil 5</p></li>
                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>

                    </ul>
                    <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk6">
                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk6">VENTAGO tas kecil 6</p></li>
                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    
    <!--                    <div class="submenu_right_detail">
                            
    
                            <ul style="list-style: none">
    
                                <li style="display: inline-block">
    <?php
    $i = 0;
    $ma = mysql_query("select * from produk where idDP=$_GET[id]");
    while ($fa = mysql_fetch_array($ma)) {
        $i++;
        ?>
                                            <img src="<?php include ($dd . "config/url.php");
    echo $fa['gambar'] ?>"  id="img_utama"/>
                                            <img src="<?php include ($dd . "config/url.php");
    echo $fa['gambar'] ?>"  id="img_utama_shadow" />
                                            <img src="<?php include ($dd . "config/url.php");
    echo $fa['gambar']; ?>"  id="img_utama_tk<?php echo $i; ?>"/>
        
    <?php } ?>
                                    <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil1.gif"  id="img_utama_tk1"/>
    <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil2.gif"  id="img_utama_tk2"/>
    <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil3.gif"  id="img_utama_tk3"/>
    <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil4.gif"  id="img_utama_tk4"/>
    <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil5.gif"  id="img_utama_tk5"/>
    <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil6.gif"  id="img_utama_tk6"/>
    
                                </li>
                                                            <li style="display: inline-block">
    <?php
    $i = 0;
    $ma = mysql_query("select * from produk where idDP=$_GET[id]");
    while ($fa = mysql_fetch_array($ma)) {
        $i++;
        ?>
                                                                                        <img src="<?php include ($dd . "config/url.php");
    echo $fa['gambar'] ?>"  id="img_utama"/>
                                                                                        <img src="<?php include ($dd . "config/url.php");
    echo $fa['gambar'] ?>"  id="img_utama_shadow" />
                                                                                        <img src="<?php include ($dd . "config/url.php");
    echo $fa['gambar']; ?>"  id="img_utama_tk<?php echo $i; ?>"/>
                                                    
                                                    
    <?php } ?>
                                                                <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil1.gif"  id="img_utama_tk1_shadow"/>
                                <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil2.gif"  id="img_utama_tk2_shadow"/>
                                <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil3.gif"  id="img_utama_tk3_shadow"/>
                                <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil4.gif"  id="img_utama_tk4_shadow"/>
                                <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil5.gif"  id="img_utama_tk5_shadow"/>
                                <img src="<?php include ($dd . "config/url.php"); ?>image/stock/taskecil6.gif"  id="img_utama_tk6_shadow"/>
                                                            </li>
                                <li style="display: inline-block;margin-left: 288px">
                                    <ul style="margin-top: 10px">
                                        <li>
                                            <table>
                                                <tr>
    <?php
    $i = 0;
    $ma = mysql_query("select * from produk where idDP=$_GET[id] limit 0,3");
    while ($fa = mysql_fetch_array($ma)) {
        $i++;
        ?>
                                                            <td><img  src="<?php include ($dd . "config/url.php");
    echo $fa['gambar'] ?>" class="img_kedua" id="tk<?php echo $i ?>"/></td>
        
    <?php } ?>
    
                                                </tr>
                                                <tr>
    <?php
    $i = 3;
    $ma = mysql_query("select * from produk where idDP=$_GET[id] limit 3,6");
    while ($fa = mysql_fetch_array($ma)) {
        $i++;
        ?>
                                                            <td><img  src="<?php include ($dd . "config/url.php");
    echo $fa[gambar] ?>" class="img_kedua" id="tk<?php echo $i ?>"/></td>
        
    <?php } ?>
                                                </tr>
                                            </table>
                                        </li>
                                       
                                        <li>
                                            <ul style="margin-top: 70px; position: static">
                                                <li>
    <?php
    $i = 0;
    $ma = mysql_query("select * from produk where idDP=$_GET[id] limit 1");
    while ($fa = mysql_fetch_array($ma)) {
        $i++;
        ?>
                                                            <h1 style="color: #960316;margin-bottom: 10px;" id="list_harga_barang"><?php
    $harga = number_format($fa[harga], 0, ",", ".");
    echo "Rp. $harga";
        ?></h1>
        
    <?php } ?>
    <?php
    $i = 0;
    $ma = mysql_query("select * from produk where idDP=$_GET[id]");
    while ($fa = mysql_fetch_array($ma)) {
        $i++;
        ?>
                                                            <h1 style="color: #960316;margin-bottom: 10px;" id="list_harga_barang_tk<?php echo $i; ?>"><?php
    $harga = number_format($fa[harga], 0, ",", ".");
    echo "Rp. $harga";
        ?>
    <?php } ?>
                                                </li>
                                                <li>
                                                    <p style="font-weight: bold; display: inline-block; margin-top: 10px">Colour:</p>
    
                                                    <select name="color" style="width: 102px; background-color: white;border: 1px solid #bec6d3;display: inline-block; margin-left: 12px; margin-bottom: 10px;">
    <?php
    $i = 0;
    $ma = mysql_query("select * from produk p INNER JOIN produk_warna pw ON pw.idPW = p.idPW INNER JOIN detail_produk dp ON dp.idDP = p.idDP where p.idDP=$_GET[id]");
    while ($fa = mysql_fetch_array($ma)) {

        echo "<option value=\"$fa[idproduk]\">
                                                            $fa[warnaPW]
                                                        </option>";
    }
    ?>
                                                    </select>
                                                </li>
                                                <li>
                                                    <p style="font-weight: bold; display: inline-block">Quantity:</p>
                                                    <input style="border: 1px solid #bec6d3; width: 50px;"/>
                                                </li>
                                                <li>
                                                    <p style="text-align: left;font-size: 10px; margin-top: 5px; display: none;position: absolute;z-index: 2;background-color: white" id="confirmasi">
                                                        Available Pre Order<br/>*waktu pembuatan 2 minggu dari tanggal<br/>Confirmation of Payment
                                                    </p>
                                                </li>
                                                <li>
                                                    <img src="<?php include ($dd . "config/url.php"); ?>user/image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer" class="addcart"/>
    <?php
    $i = 0;
    $ma = mysql_query("select * from produk where idDP=$_GET[id]");
    while ($fa = mysql_fetch_array($ma)) {
        $i++;
        ?>
                                                            <img src="<?php include ($dd . "config/url.php"); ?>user/image/addcart.gif" style="height: 23px; width: 87px;position: absolute; margin-top: 11px;cursor: pointer;display: none" class="addcart_tk<?php echo $i; ?>"/>
                                                          
    <?php } ?>
    
                                                </li>
    
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li>
    <?php
    $i = 0;
    $ma = mysql_query("select * from detail_produk where idDP=$_GET[id]");
    while ($fa = mysql_fetch_array($ma)) {
        $i++;

        echo "<ul style=\"margin-left: 24px;margin-top: 40px;\" id=\"list_list\">
                                        <li><p style=\"text-align: left; font-weight: bold\" id=\"list_nama_barang\">$fa[namaDP]1</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Berat $fa[beratDP] kg</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Panjang: $fa[panjangDP]cm</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Lebar : $fa[lebarDP]cm</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Tinggi : $fa[tinggiDP]cm</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Panjang Tali : $fa[panjangTaliDP]cm</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Bahan : $fa[bahanDP]</p></li>

                                    </ul>";
    }
    ?>
    <?php
    $i = 0;
    $ma = mysql_query("select * from produk p INNER JOIN produk_warna pw ON pw.idPW = p.idPW INNER JOIN detail_produk dp ON dp.idDP = p.idDP where p.idDP=$_GET[id]");
    while ($fa = mysql_fetch_array($ma)) {
        $i++;

        echo "<ul style=\"margin-left: 24px;margin-top: 40px;\" id=\"list_list_tk$i\">
                                        <li><p style=\"text-align: left; font-weight: bold\" id=\"list_nama_barang\">$fa[namaDP]$i</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Berat $fa[beratDP] kg</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Panjang: $fa[panjangDP]cm</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Lebar : $fa[lebarDP]cm</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Tinggi : $fa[tinggiDP]cm</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Panjang Tali : $fa[panjangTaliDP]cm</p></li>
                                        <li><p style=\"text-align: left; font-weight: bold\">Bahan : $fa[bahanDP]</p></li>

                                    </ul>";
    }
    ?>
                                                                        <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk2">
                                                                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk2">VENTAGO tas kecil 2</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>
                                            
                                                                        </ul>
                                                                        <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk3">
                                                                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk3">VENTAGO tas kecil 3</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>
                                            
                                                                        </ul>
                                                                        <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk4">
                                                                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk4">VENTAGO tas kecil 4</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>
                                            
                                                                        </ul>
                                                                        <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk5">
                                                                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk5">VENTAGO tas kecil 5</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>
                                            
                                                                        </ul>
                                                                        <ul style="margin-left: 24px;margin-top: 40px;" id="list_list_tk6">
                                                                        <li><p style="text-align: left; font-weight: bold" id="list_nama_barang_tk6">VENTAGO tas kecil 6</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Berat 0.5 kg</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang: 40cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Lebar : 9cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Tinggi : 33cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Panjang Tali : 30cm</p></li>
                                                                        <li><p style="text-align: left; font-weight: bold">Bahan : Kulit Sintetis</p></li>
                                            
                                                                        </ul>
                                </li>
                            </ul>
                        </div>-->
</div>

