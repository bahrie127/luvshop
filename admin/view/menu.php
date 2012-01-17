<div class="grid_24">

    <!-- User Panel: Start -->
    <div id="userpanel">

        <!-- User: Start -->
        <ul id="user" class="dropdown">
            <li class="topnav">
                <!-- User Name -->

                <a href="#" class="top icon user">Administrator</a>

                <!-- User Dropdown Content: Start -->
                <ul class="subnav">  <?php
$ma = mysql_query("select * from biodata_admin a INNER JOIN admin_login al ON a.idBA = al.idBA where al.idBA=$_SESSION[ID]");
while ($fa = mysql_fetch_array($ma)) {
    echo "<li><a href=\"javascript:void(0);\" class=\"icon settings edit-bio\" idBA=\"$fa[idBA]\" namaBA=\"$fa[namaBA]\" alamatBA=\"$fa[alamatBA]\" telpBA=\"$fa[telpBA]\" emailBA=\"$fa[emailBA]\" privilegeBA=\"$fa[privilegeBA]\" us=\"$fa[username]\">Settings</a></li>";
}
?>
                    <li><a href="<?php include '../../config/url.php' ?>model/model_logout.php" class="icon lock">Log out</a></li>  
                </ul>  
                <!-- User Dropdown Content: End -->
            </li>
        </ul>
        <!-- User: End -->


        <!-- Messages: End -->

        <!-- Messages Popup Content: Start -->

        <!-- Messages Popup Content: End -->

        <!-- Style (Themes) Switcher: Start -->

        <!-- Style Switcher: End -->

        <!-- Width Switcher: Start -->

        <!-- Width Switcher: End -->

    </div>
    <!-- User Panel: End -->

    <!-- Header: Start -->
    <div id="header">

        <!-- Logo: Start -->
        <a href="<?php include '../../config/url.php' ?>view/content/dashboard.php" id="logo">Admin Panel Luvshop</a>
        <!-- Logo: End -->

        <!-- Navigation: Start -->
        <ul id="navigation" class="dropdown">
            <li><a class="dashboard active" href="<?php include '../../config/url.php' ?>view/content/dashboard.php">Dashboard</a></li>

            <!-- Navigation Dropdown Menu Item: Start -->
            <li class="topnav">
                <a class="frames" href="#">Master</a>

                <!-- Navigation Dropdown Menu Item Content: Start -->
                <ul class="subnav">
                    <li><a href="<?php include '../../config/url.php' ?>view/content/master.php?m=tk" class="icon typography">Kota</a></li> 
                    <li><a href="<?php include '../../config/url.php' ?>view/content/master.php?m=pr" class="icon typography">Provinsi</a></li>
                    <li><a href="<?php include '../../config/url.php' ?>view/content/master.php?m=wp" class="icon typography">Warna Produk</a></li> 
                    <li><a href="<?php include '../../config/url.php' ?>view/content/master.php?m=dp" class="icon typography">Detail Produk</a></li> 
                    <li><a href="<?php include '../../config/url.php' ?>view/content/master.php?m=prd" class="icon typography">Produk</a></li> 

                </ul> 
                <!-- Navigation Dropdown Menu Item Content: End --> 
            </li>
            <!-- Navigation Dropdown Menu Item: End -->

            <!-- Navigation Dropdown Menu Item: Start -->
            <li class="topnav">
                <a class="pages" href="#">Marketing</a>

                <!-- Navigation Dropdown Menu Item Content: Start -->
                <ul class="subnav">
                    <li><a href="code.html" class="icon list">Pemesanan</a></li>  

                    <li><a href="login.html" class="icon user">User</a></li>  
                </ul>  
                <!-- Navigation Dropdown Menu Item Content: End --> 
            </li>
            <!-- Navigation Dropdown Menu Item: End -->

            <!-- Navigation Menu Item: Start -->
<?php if ($_SESSION[PRI] == "all") { ?>
                <li class="topnav">
                    <a class="pages" href="#">Admin</a>

                    <!-- Navigation Dropdown Menu Item Content: Start -->
                    <ul class="subnav">

                        <li><a href="<?php include '../../config/url.php' ?>view/content/ad.php" class="icon user">Admin</a></li>  
                    </ul>  
                    <!-- Navigation Dropdown Menu Item Content: End --> 
                </li>
<?php } ?>
            <!-- Navigation Menu Item: End -->
        </ul>
        <!-- Navigation: End -->

    </div>
    <!-- Header: End -->

    <!-- Breadcrumb Bar: Start -->
    <div class="box_content padding fadm" title="Edit Biodata">
        <form action="<?php include '../../config/url.php'; ?>model/model_setting.php?m=u" name="fadmin" id="fadmin" method="POST" onsubmit="return valiProduk()">

            <div class="field">
                <label class="left">Nama</label>
                <input type="text" name="nama" id="namaBA" class="medium validate">
                <input type="hidden" name="idBA" id="idBA" class="medium validate">

            </div>

            <div class="field">
                <label class="left">Alamat</label>
                <input type="text" name="alamat" id="alamatBA" class="medium validate">

            </div>

            <div class="field">
                <label class="left">Telp</label>
                <input type="text" name="telp" id="telpBA" class="medium validate">

            </div>

            <div class="field">
                <label class="left">Email</label>
                <input type="text" name="email" id="emailBA" class="medium validate">

            </div>
            <div class="field">
                <label class="left">Username</label>
                <input type="text" name="us" id="usBA" class="medium validate">

            </div>

            <div class="field">
                <label class="left">Password</label>
                <input type="password" name="pwd" id="pwd" class="medium validate">

            </div>



            <button>Simpan</button>

        </form>

    </div>

    <script type="text/javascript">
        $(function() {
            //$("#dialog").css({'display': 'none'});
            $(".edit-bio").click( function (){
                $('.fadm').dialog('open');
                var id = $(this).attr("idBA");
                var nama = $(this).attr("namaBA");
                var berat = $(this).attr("alamatBA");
                var panjang = $(this).attr("telpBA");
                var lebar = $(this).attr("emailBA");
                var us = $(this).attr("us");
           
            
                $('#idBA').val(id);
                $('#namaBA').val(nama);
                $('#alamatBA').val(berat);
                $('#telpBA').val(panjang);
                $('#emailBA').val(lebar);
                $('#usBA').val(us);
            
          
            
            });
            $(".fadm").dialog({
                bgiframe: true,
                autoOpen: false,
                height: 600,
                width :700,
                modal: true
			
            });
        });
    </script>