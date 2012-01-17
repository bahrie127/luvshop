<!-- 100% Box Grid Container: Start -->
<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="#">Master</a></li>
        <li class="icon point_right active"><a href="#">Tambah Detail Produk</a></li>

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
            <li><a href="#addnews">Tambah Detail Produk</a></li>
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

                            <th class="align_left center">No</th>
                            <th class="align_left center">Nama Produk</th>
                            <th class="align_left center">Berat Produk</th>
                            <th class="align_left center">Panjang Produk</th>
                            <th class="align_left center">Lebar Produk</th>
                            <th class="align_left center">Tinggi Produk</th>
                            <th class="align_left center">Panjang Tali Produk</th>
                            <th class="align_left center">Bahan Produk</th>
                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 0;
                        $ma = mysql_query("select * from detail_produk");
                        while ($fa = mysql_fetch_array($ma)) {
                            $i++;
                            echo " <tr>
                           
                            <td class=\"align_left\">$i</td>
                            <td class=\"align_left center\">$fa[namaDP]</td>
                            <td class=\"align_left center\">$fa[beratDP]</td>
                            <td class=\"align_left center\">$fa[panjangDP]</td>
                            <td class=\"align_left center\">$fa[lebarDP]</td>
                            <td class=\"align_left center\">$fa[tinggiDP]</td>
                            <td class=\"align_left center\">$fa[panjangTaliDP]</td>
                            <td class=\"align_left center\">$fa[bahanDP]</td>
                            <td class=\"align_left tools center\">
                               <a href=\"javascript:void(0);\" class=\"edit tip edit-produk\" idDP=\"$fa[idDP]\" namaDP=\"$fa[namaDP]\" beratDP=\"$fa[beratDP]\" panjangDP=\"$fa[tinggiDP]\" lebarDP=\"$fa[lebarDP]\" tinggiDP=\"$fa[tinggiDP]\"panjangTaliDP=\"$fa[panjangTaliDP]\" bahanDP=\"$fa[bahanDP]\" title=\"edit\">edit</a>
                               ";
                            if ($_SESSION[PRI] == "all") {
                                echo "<a href=\"../../model/model_detail_produk.php?m=d&&id=$fa[idDP]\" class=\"delete tip\" title=\"delete\" onclick=\"return confirm('Apakah anda ingin menghapus data ini?')\">delete</a>
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


                <form action="<?php include '../../config/url.php'; ?>model/model_detail_produk.php?m=i" name="fproduk" id="fproduk" method="POST" onsubmit="return valiProduk()">

                    <div class="field">
                        <label class="left">Nama Produk</label>
                        <input type="text" name="namaP" id="namaP" class="medium validate">

                    </div>

                    <div class="field">
                        <label class="left">Berat Produk</label>
                        <input type="text" name="beratP" id="beratP" class="medium validate">

                    </div>

                    <div class="field">
                        <label class="left">Panjang Produk</label>
                        <input type="text" name="panjangP" id="panjangP" class="medium validate">

                    </div>

                    <div class="field">
                        <label class="left">Lebar Produk</label>
                        <input type="text" name="lebarP" id="lebarP"class="medium validate">

                    </div>

                    <div class="field">
                        <label class="left">Tinggi Produk</label>
                        <input type="text" name="tinggiP" id="tinggiP" class="medium validate">

                    </div>

                    <div class="field">
                        <label class="left">Panjang Tali Produk</label>
                        <input type="text" name="panjangTaliP" id="panjangTaliP" class="medium validate">

                    </div>

                    <div class="field">
                        <label class="left">Bahan Produk</label>
                        <input type="text" name="bahanP" id="bahanP" class="medium validate">

                    </div>



                    <button>Simpan</button>

                </form>

            </div>
            <!-- News Sorting Table - Add News Tab: End -->

        </div>
        <!-- News Table Tabs: End -->
        <div class="box_content padding fp" title="Edit Warna">
            <form action="<?php include '../../config/url.php'; ?>model/model_detail_produk.php?m=u" name="fproduk" id="fproduk" method="POST" onsubmit="return valiProduk()">

                <div class="field">
                    <label class="left">Nama Produk</label>
                    <input type="hidden" name="idP" id="idDP" class="medium validate">
                    <input type="text" name="namaP" id="namaDP" class="medium validate">

                </div>

                <div class="field">
                    <label class="left">Berat Produk</label>
                    <input type="text" name="beratP" id="beratDP" class="medium validate">

                </div>

                <div class="field">
                    <label class="left">Panjang Produk</label>
                    <input type="text" name="panjangP" id="panjangDP" class="medium validate">

                </div>

                <div class="field">
                    <label class="left">Lebar Produk</label>
                    <input type="text" name="lebarP" id="lebarDP"class="medium validate">

                </div>

                <div class="field">
                    <label class="left">Tinggi Produk</label>
                    <input type="text" name="tinggiP" id="tinggiDP" class="medium validate">

                </div>

                <div class="field">
                    <label class="left">Panjang Tali Produk</label>
                    <input type="text" name="panjangTaliP" id="panjangTaliDP" class="medium validate">

                </div>

                <div class="field">
                    <label class="left">Bahan Produk</label>
                    <input type="text" name="bahanP" id="bahanDP" class="medium validate">

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
            $('.fp').dialog('open');
            var id = $(this).attr("idDP");
            var nama = $(this).attr("namaDP");
            var berat = $(this).attr("beratDP");
            var panjang = $(this).attr("panjangDP");
            var lebar = $(this).attr("lebarDP");
            var tinggi = $(this).attr("tinggiDP");
            var panjangTali = $(this).attr("panjangTaliDP");
            var bahan = $(this).attr("bahanDP");
            
            $('#idDP').val(id);
            $('#namaDP').val(nama);
            $('#beratDP').val(berat);
            $('#panjangDP').val(panjang);
            $('#lebarDP').val(lebar);
            $('#tinggiDP').val(tinggi);
            $('#panjangTaliDP').val(panjangTali);
            $('#bahanDP').val(bahan);
          
            
        });
        $(".fp").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 600,
            width :700,
            modal: true
			
        });
    });
</script>