<?php include '../header.php'; ?>

<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">

    <?php include '../menu.php'; ?>
    <!-- Header Grid Container: Start -->
    <div id="breadcrumb">

        <!-- Breadcrumb: Start -->
        <ul class="left">
            <li class="icon dashboard"><a href="#">Dashboard</a></li>
        </ul>
        <!-- Breadcrumb: End -->

        <!-- Breadcrumb Icon Links: Start -->

        <!-- Breadcrumb Icon Links: End -->

    </div>
</div>
<!-- Breadcrumb Bar: End -->


<!-- Header Grid Container: End -->


<!-- 100% Box Grid Container: Start -->
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
        if (empty($_GET[s])) {
            echo "<div class=\"notice info\">
		<p>SELAMAT DATANG DI ADMIN LUVSHOP</p>
	</div>";
        }
    }
    ?>
    <!-- Info Notice: Start -->

    <!-- Info Notice: End -->

    <!-- Box Header: Start -->

    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->


<!-- 100% Box Grid Container: Start -->
<div class="grid_24">

    <!-- Box Header: Start -->
    <div class="box_top">

        <h2 class="icon graph">Visitor Statistics</h2>

        <!-- Graphs Stats Sorting: Start -->
        <ul class="sorting">
            <li><a href="#line" class="active">Line</a></li>
            <li><a href="#area">Area</a></li>
            <li><a href="#pie">Pie</a></li>
            <li><a href="#bar">Bars</a></li>
        </ul>
        <!-- Graphs Stats Sorting: End -->

    </div>
    <!-- Box Header: End -->

    <!-- Box Content: Start -->
    <div class="box_content">

        <!-- Graphs Stats Table: Start -->
        <table class="stats">
            <thead>
                <tr>
                    <td></td>
                    <th scope="col"> Jan </th>
                    <th scope="col"> Feb </th>
                    <th scope="col"> Mar </th>
                    <th scope="col"> Apr </th>
                    <th scope="col"> May </th>
                    <th scope="col"> Jun </th>
                    <th scope="col"> Jul </th>
                    <th scope="col"> Aug </th>
                    <th scope="col"> Sep </th>
                    <th scope="col"> Oct </th>
                    <th scope="col"> Nov </th>
                    <th scope="col"> Dec </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"> Visitors </th>
                    <td> 45 </td>
                    <td> 65 </td>
                    <td> 56 </td>
                    <td> 133 </td>
                    <td> 124 </td>
                    <td> 63 </td>
                    <td> 56 </td>
                    <td> 94 </td>
                    <td> 76 </td>
                    <td> 106 </td>
                    <td> 45 </td>
                    <td> 77 </td>
                </tr>
                <tr>
                    <th scope="row"> Returning </th>
                    <td> 34 </td>
                    <td> 34 </td>
                    <td> 45 </td>
                    <td> 45 </td>
                    <td> 34 </td>
                    <td> 56 </td>
                    <td> 34 </td>
                    <td> 56 </td>
                    <td> 45 </td>
                    <td> 65 </td>
                    <td> 56 </td>
                    <td> 78 </td>
                </tr>
                <tr>
                    <th scope="row"> Unique </th>
                    <td> 34 </td>
                    <td> 54 </td>
                    <td> 56 </td>
                    <td> 67 </td>
                    <td> 98 </td>
                    <td> 34 </td>
                    <td> 56 </td>
                    <td> 32 </td>
                    <td> 34 </td>
                    <td> 76 </td>
                    <td> 23 </td>
                    <td> 34 </td>
                </tr>
            </tbody>
        </table>	
        <!-- Graphs Stats Table: End -->

    </div>
    <!-- Box Content: End -->

</div>
<!-- 100% Box Grid Container: End -->




<?php include '../footer.php'; ?>