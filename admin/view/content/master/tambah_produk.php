<!-- 100% Box Grid Container: Start -->
<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="#">Master</a></li>
        <li class="icon point_right active"><a href="#">Tambah Produk</a></li>

    </ul>
    <!-- Breadcrumb: End -->

    <!-- Breadcrumb Icon Links: Start -->

    <!-- Breadcrumb Icon Links: End -->

</div>
</div>

<div class="grid_24">
    <?php
    if (!empty($_GET[s])) {
        if ($_GET[s] == "ok") {
            echo "<div class=\"notice success\"><p>Data Baru Berhasil Di Simpan.</div>";
        }
        if ($_GET[s] == "up") {
            echo "<div class=\"notice success\"><p>Data Baru Berhasil Di Update.</div>";
        }
        if ($_GET[s] == "del") {
            echo "<div class=\"notice success\"><p>Data Baru Berhasil Di dihapus.</div>";
        }
        if ($_GET[s] == "g") {
            echo "<div class=\"notice error\"><p>Data Gagal Disimpan, Tolong ulangi lagi.</div>";
        }
    }
    ?>
    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon pages">Data Produk</h2>

        <!-- Tab Select: Start -->
        <ul class="sorting">
            <li><a href="#listing" class="active">Table Data</a></li>
            <li><a href="#addnews">Tambah Produk</a></li>
        </ul>
        <!-- Tab Select: End -->

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">



        <!-- News Table Tabs: Start -->
        <div class="tabs">

            <!-- News Sorting Table: Start -->
            <div id="listing">

                <table class="sorting">
                    <thead>
                        <tr>

                            <th class="align_left">NO</th>
                            <th class="align_left center">Nama Produk</th>
                            <th class="align_left center">Warna Produk</th>
                            <th class="align_left center">Stock</th>
                            <th class="align_left center">Harga</th>
                            <th class="align_left center">Gambar</th>
                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        $ma = mysql_query("select * from produk p INNER JOIN produk_warna pw ON pw.idPW = p.idPW INNER JOIN detail_produk dp ON dp.idDP = p.idDP");
                        while ($fa = mysql_fetch_array($ma)) {
                            $i++;
                            echo "  <tr>
                            <td class=\"align_left\">$i</td>
                          
                            
                            <td class=\"align_left center\">$fa[namaDP]</td>
                            
                            
                            <td class=\"align_left center\">$fa[warnaPW]</td>
                            
                            
                          <td class=\"align_left center\">$fa[stock]</td>
                            <td class=\"align_left center\">$fa[harga]</td>
                            <td class=\"align_left tools center\"><a class=\"view popup\" href=\"http://localhost/luvshop/$fa[gambar]\" title=\"View Gambar\">view</a></td>
                            <td class=\"align_left tools center\">
                                <a href=\"#\" class=\"edit tip edit-produk\" idproduk=\"$fa[idproduk]\" stock=\"$fa[stock]\" harga=\"$fa[harga]\" title=\"edit\">edit</a>
                                ";
                            if ($_SESSION[PRI] == "all") {
                                echo "<a href=\"../../model/model_produk.php?m=d&&id=$fa[idproduk]\" class=\"delete tip\" title=\"delete\" onclick=\"return confirm('Apakah anda ingin menghapus data ini?')\">delete</a>
                            </td>
                        </tr>";
                            }
                        }
                        ?>





                    </tbody>
                </table> 

                <!-- News Sorting Table Actions: Start -->

                <!-- News Sorting Table Actions: End -->

            </div>
            <!-- News Sorting Table: End -->

            <!-- News Sorting Table - Add News Tab: Start -->
            <div id="addnews" class="padding">

                <form action="<?php include '../../config/url.php'; ?>model/model_produk.php?m=i" name="fpr" id="fpr" method="POST" onsubmit="return valiProd()" enctype="multipart/form-data">

                    <div class="field">
                        <label>Nama Produk</label>
                        <select name="produk" id="produk">
                            <option>=====PILIH PRODUK======</option>
                            <?php
                            $ma = mysql_query("select * from detail_produk");
                            while ($fa = mysql_fetch_array($ma)) {

                                echo "<option value=\"$fa[idDP]\">$fa[namaDP]</option>";
                            }
                            ?>

                        </select>
                    </div>

                    <div class="field">
                        <label>Warna</label>
                        <select name="warna" id="warna">
                            <option>=====PILIH WARNA======</option>
                            <?php
                            $ma = mysql_query("select * from produk_warna");
                            while ($fa = mysql_fetch_array($ma)) {

                                echo "<option value=\"$fa[idPW]\">$fa[warnaPW]</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="field">
                        <label class="left">Stock Barang</label>
                        <input type="text" name="stock" id="stock"class="medium validate">

                    </div>

                    <div class="field">
                        <label class="left">Harga</label>
                        <input type="text" name="harga" id="harga" class="medium validate">

                    </div>

                    <div class="field">
                        <label>Gambar</label>
                        <input type="file" name="picture"/>
                    </div>

                    <button>Simpan</button>

                </form>
            </div>
            <!-- News Sorting Table - Add News Tab: End -->

        </div>
        <!-- News Table Tabs: End -->
        <div class="box_content padding fprd" title="Edit Produk">
            <form action="<?php include '../../config/url.php'; ?>model/model_produk.php?m=u" name="fpr" id="fpr" method="POST" enctype="multipart/form-data">

                <div class="field">
                    <label>Nama Produk</label>
                    <select name="produk" id="produkU">
                        <option>=====PILIH PRODUK======</option>
                        <?php
                        $ma = mysql_query("select * from detail_produk");
                        while ($fa = mysql_fetch_array($ma)) {

                            echo "<option value=\"$fa[idDP]\">$fa[namaDP]</option>";
                        }
                        ?>

                    </select>
                </div>

                <div class="field">
                    <label>Warna</label>
                    <select name="warna" id="warnaU">
                        <option>=====PILIH WARNA======</option>
                        <?php
                        $ma = mysql_query("select * from produk_warna");
                        while ($fa = mysql_fetch_array($ma)) {

                            echo "<option value=\"$fa[idPW]\">$fa[warnaPW]</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="field">
                    <label class="left">Stock Barang</label>
                    <input type="text" name="stock" id="stockU"class="medium validate">
                    <input type="hidden" name="idPR" id="idU"class="medium validate">

                </div>

                <div class="field">
                    <label class="left">Harga</label>
                    <input type="text" name="harga" id="hargaU" class="medium validate">

                </div>

                <div class="field">
                    <label>Gambar</label>
                    <input type="file" name="picture"/>
                </div>

                <button>Simpan</button>

            </form>
        </div>
    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->
<script type="text/javascript">
    $(function() {
        //$("#dialog").css({'display': 'none'});
        $(".edit-produk").click( function (){
            $('.fprd').dialog('open');
            var id = $(this).attr("idproduk");
            var stock = $(this).attr("stock");
            var harga = $(this).attr("harga");
            
            
            $('#idU').val(id);
            $('#stockU').val(stock);
            $('#hargaU').val(harga);
           
          
            
        });
        $(".fprd").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 600,
            width :700,
            modal: true
			
        });
    });
</script>