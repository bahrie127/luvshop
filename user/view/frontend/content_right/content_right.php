<?php include $dd . 'config/koneksi.php'; ?>

<div class="content_right">

    <div class="submenu_right">
        <table>

            <tr>
                <?php
                $ma = mysql_query("select * from detail_produk order by idDP ASC limit 0,3");
                while ($fa = mysql_fetch_array($ma)) {
                    $m = mysql_query("select * from produk where idDP = $fa[idDP] limit 1");
                    while ($f = mysql_fetch_array($m)) {
                        ?>
                        <td>
                            <ul>
                                <li id="gm1"><a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=detail"<?php echo $f[idDP]; ?>"><img src="<?php include('url.php');
                echo $f['gambar']; ?>" /></a></li>
                                <li><p><?php echo $fa['namaDP'] ?></p></li>
                                <li><h3><?php
                                                                                                                                                  $harga = number_format($f['harga'], 0, ",", ".");
                                                                                                                                                  echo "Rp. $harga";
                        ?></h3></li>
                            </ul>
                        </td>


                    <?php }
                } ?>
            </tr>
            <tr>
                <?php
                $ma = mysql_query("select * from detail_produk order by idDP ASC limit 3,6");
                while ($fa = mysql_fetch_array($ma)) {
                    $m = mysql_query("select * from produk where idDP = $fa[idDP] limit 1");
                    while ($f = mysql_fetch_array($m)) {
                        ?>
                        <td>
                            <ul>
                                <li id="gm2"><a href="<?php include ($dd . "config/url.php"); ?>user/view/frontend/memberarea/memberarea-detail-stock_1.php?id=<?php echo $f[idDP]; ?>"><img src="<?php include('url.php');
                                                                                                                                                                                  echo $f['gambar']; ?>" /></a></li>
                                <li><p><?php echo $fa['namaDP'] ?></p></li>
                                <li><h3><?php
                                                                                                                                                                                  $harga = number_format($f['harga'], 0, ",", ".");
                                                                                                                                                                                  echo "Rp. $harga";
                                                                                                                                                                                  ?></h3></li>
                            </ul>
                        </td>


    <?php }
} ?>
            </tr>

            <tr>
                <?php
                $ma = mysql_query("select * from detail_produk order by idDP ASC limit 6,9");
                while ($fa = mysql_fetch_array($ma)) {
                    $m = mysql_query("select * from produk where idDP = $fa[idDP] limit 1");
                    while ($f = mysql_fetch_array($m)) {
                        ?>
                        <td>
                            <ul>
                                <li id="gm3"><a href="<?php include ($dd . "config/url.php"); ?>user/view/frontend/memberarea/memberarea-detail-stock_1.php?id=<?php echo $f['idDP']; ?>"><img src="<?php include('url.php');
                        echo $f['gambar']; ?>" /></a></li>
                                <li><p><?php echo $fa['namaDP'] ?></p></li>
                                <li><h3><?php
                                $harga = number_format($f['harga'], 0, ",", ".");
                                echo "Rp. $harga";
                                ?></h3></li>
                            </ul>
                        </td>


    <?php }
} ?>
            </tr>


        </table>

    </div>
    <div class="paging">
        <a>paging</a>
    </div>
    <script>
        $(document).ready(function(){
            $("li#gm1,li#gm2,li#gm3 ").hover(
            function(){
                $(this).css({
                    "box-shadow":"inset 0px 0px 40px 0px red",
                    "-webkit-box-shadow":"inset 0px 0px 40px 0px red",
                    "-moz-box-shadow":"inset 0px 0px 40px 0px red",
                    "-o-box-shadow":"inset 0px 0px 40px 0px red",
                    
                    "border-radius":"10px",
                    "-webkit-border-radius":"10px",
                    "-moz-border-radius":"10px",
                    "-o-border-radius":"10px"
                });
            },
            function(){
                $(this).css({
                    "box-shadow":"inset 0px 0px 40px 0px white",
                    "-webkit-box-shadow":"inset 0px 0px 40px 0px white",
                    "-moz-box-shadow":"inset 0px 0px 40px 0px white",
                    "-o-box-shadow":"inset 0px 0px 40px 0px white"
                });
            }
        );
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
                
                
            $("li#home").addClass("background_menu").css({
                "margin-top":"-1px"
            });
            $("li#account,li#shipment,li#confpayment,li#progress").css({
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
</div>