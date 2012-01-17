<!-- 100% Box Grid Container: Start -->
<div id="breadcrumb">

    <!-- Breadcrumb: Start -->
    <ul class="left">
        <li class="icon dashboard"><a href="#">Master</a></li>
        <li class="icon point_right active"><a href="#">Tambah Provinsi</a></li>

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

        <h2 class="icon pages">Data Daftar Provinsi</h2>

        <!-- Tab Select: Start -->
        <ul class="sorting">
            <li><a href="#listing" class="active">Table Data</a></li>
            <li><a href="#addnews">Tambah Provinsi</a></li>
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
                            <th class="align_left center">Nama Provinsi</th>

                            <th class="align_left center tools">Tools</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 0;
                        $ma = mysql_query("select * from provinsi");
                        while ($fa = mysql_fetch_array($ma)) {
                            $i++;
                            echo " <tr>
                            <td class=\"align_left\">$i</td>
                            <td class=\"align_left center\">$fa[namapro]</td>

                            <td class=\"align_left tools center\">
                                <a href=\"javascript:void(0);\" class=\"edit tip edit-pro\" idprovinsi=\"$fa[idprovinsi]\" nPro=\"$fa[namapro]\" title=\"edit\">edit</a>
                                ";
                            if ($_SESSION[PRI] == "all") {
                                echo "<a href=\"../../model/model_provinsi.php?m=d&&id=$fa[idprovinsi]\" class=\"delete tip\" title=\"delete\" onclick=\"return confirm('Apakah anda ingin menghapus data ini?')\">delete</a>
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

                <form action="<?php include '../../config/url.php'; ?>model/model_provinsi.php?m=i" name="fpro" id="fpro" method="POST"  onsubmit="return valiPro()">


                    <div class="field">
                        <label class="left">Nama Propinsi</label>
                        <input type="text" name="provinsi" id="provinsi" class="medium validate">

                    </div>



                    <button>Simpan</button>
                </form>

            </div>
            <!-- News Sorting Table - Add News Tab: End -->

        </div>
        <!-- News Table Tabs: End -->
        <div class="box_content padding fp" title="Edit Provinsi">
            <form action="<?php include '../../config/url.php'; ?>model/model_provinsi.php?m=u" method="POST">
                <div class="field" >
                    <label>Nama Provinsi</label>
                    <input type="hidden" name="idprovinsi" id="idprovinsi" class="big validate" >
                    <input type="text" name="provinsi" id="nProvinsi" class="big validate">



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
        $(".edit-pro").click( function (){
            $('.fp').dialog('open');
            var id = $(this).attr("idprovinsi");
            var nama = $(this).attr("nPro");
            
            $('#idprovinsi').val(id);
            $('#nProvinsi').val(nama);
          
            
        });
        $(".fp").dialog({
            bgiframe: true,
            autoOpen: false,
            height: 250,
            width :450,
            modal: true
			
        });
    });
</script>