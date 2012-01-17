<!-- 100% Box Grid Container: Start -->
<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="#">Master</a></li>
        <li class="icon point_right active"><a href="#">Tambah Kota</a></li>

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

        <h2 class="icon pages">Data Daftar Kota</h2>

        <!-- Tab Select: Start -->
        <ul class="sorting">
            <li><a href="#listing" class="active">Table Data</a></li>
            <li><a href="#addnews">Tambah Kota</a></li>
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
                            <th class="align_left">No.</th>
                            <th class="align_left center">Nama Kota</th>

                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        $ma = mysql_query("select * from kota");
                        while ($fa = mysql_fetch_array($ma)) {
                            $i++;
                            echo " <tr>
                            <td class=\"align_left\">$i</td>
                            <td class=\"align_left center\">$fa[namakota]</td>

                            <td class=\"align_left tools center\">
                                <a href=\"javascript:void(0);\" class=\"edit tip edit-kota\" idkota=\"$fa[idkota]\" nKota=\"$fa[namakota]\" title=\"edit\">edit</a>
                                ";
                            if ($_SESSION[PRI] == "all") {
                                echo "<a href=\"../../model/model_kota.php?m=d&&id=$fa[idkota]\" class=\"delete tip\" title=\"delete\" onclick=\"return confirm('Apakah anda ingin menghapus data ini?')\">delete</a>
                            </td>
                        </tr>";
                            }}
                            ?>

                        </tbody>
                    </table> 

                    <!-- News Sorting Table Actions: Start -->

                    <!-- News Sorting Table Actions: End -->

                </div>
                <!-- News Sorting Table: End -->

                <!-- News Sorting Table - Add News Tab: Start -->
                <div id="addnews" class="padding">

                    <form action="<?php include '../../config/url.php'; ?>model/model_kota.php?m=i" name="fkota" id="fkota" method="POST"  onsubmit="return valiKota()">


                        <div class="field">
                            <label class="left">Nama Kota</label>
                            <input type="text" name="kota" id="kota" class="medium validate">

                        </div>



                        <button>Simpan</button>
                    </form>

                </div>
                <!-- News Sorting Table - Add News Tab: End -->

            </div>
            <!-- News Table Tabs: End -->
            <div class="box_content padding fk" title="Edit Kota">
                <form action="<?php include '../../config/url.php'; ?>model/model_kota.php?m=u" method="POST">
                <div class="field" >
                    <label>Nama Kota</label>
                    <input type="hidden" name="idkota" id="idkota" class="big validate" >
                    <input type="text" name="kota" id="nKota" class="big validate">



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
        $(".edit-kota").click( function (){
            $('.fk').dialog('open');
            var id = $(this).attr("idkota");
            var nama = $(this).attr("nKota");
            
            $('#idkota').val(id);
            $('#nKota').val(nama);
          
            
        });
        $(".fk").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 250,
            width :450,
            modal: true
			
        });
    });
</script>