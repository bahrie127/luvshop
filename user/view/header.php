<?php
$BasePath = str_repeat("../", substr_count(dirname($_SERVER["SCRIPT_NAME"]), "/"));
$BasePath2 = str_repeat("../", substr_count(dirname($_SERVER["SCRIPT_NAME"]), "/"));
//include ($BasePath. "config/url.php");
$dd = substr($BasePath, 3);
$aa = substr($BasePath2, 6);

?>


<!DOCTYPE html>
<?php include($dd ."config/koneksi.php") ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="shortcut icon" href=""/>
        <link rel="stylesheet" type="text/css" href="<?php include ($dd. "config/url.php"); ?>user/css/style_utama.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include ($dd . "config/url.php"); ?>user/css/reset.css"/>
        <link rel="stylesheet" type="text/css" href="<?php include ($dd . "config/url.php"); ?>user/css/jquery.mCustomScrollbar.css"/>
        <script type="text/javascript" src="<?php include ($dd . "config/url.php"); ?>user/js/jquery.min.js"></script>
        <script src="<?php include ($dd . "config/url.php"); ?>user/js/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php include ($dd . "config/url.php"); ?>user/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php include ($dd . "config/url.php"); ?>user/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="<?php include ($dd . "config/url.php"); ?>user/js/addcart.js"></script>
        
    </head>
    <body>

        <div class="wrap"> <!--start wrap-->


            <div class="header">

                <img src="<?php include ($dd . "config/url.php"); ?>user/image/logo.png"/>
                <div class="logreg">
                    <form>
                        <table>

                            <tr>
                                <td><label>Username</label></td>
                                <td><label>Password</label></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="username"/></td>
                                <td><input type="password" name="password"/></td>
                                <td><input type="submit" value="LOGIN" style="margin-bottom: -1px;height: 24px;width: 79px;-webkit-border-radius: 20px;-moz-border-radius: 20px; -o-border-radius: 20px; background:-webkit-linear-gradient(top,#57a6f3,#b5e3fa);background:-moz-linear-gradient(top,#57a6f3,#b5e3fa);background:-o-linear-gradient(top,#57a6f3,#b5e3fa);cursor: pointer"/></td>
                            </tr>

                        </table>
                    </form>

                    <ul>
                        <li><a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=for" id="forgot">Forgot your username or password ?</a></li>
                        <li><a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=reg" id="sign">Sign Up!</a></li>
                    </ul>
                </div>
                
                <div class="home_img">
                    
                    <ul>
                        <li>
                            <img src="<?php include ($dd . "config/url.php"); ?>user/image/workTime.gif" id="img1"/>
                            <h3 class="judul_worktime">WORK TIME<br/>09.00 AM-09.00 PM</h3>
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=or"><img src="<?php include ($dd . "config/url.php"); ?>user/image/order.gif" id="img2"/></a></td>
                                    <td><a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=ship"><img src="<?php include ($dd . "config/url.php"); ?>user/image/shiping.gif" id="img3"/></a></td>
                                </tr>
                                <tr>
                                    <td><a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=co"><img src="" id="img4_shadow"/><img src="<?php include ($dd . "config/url.php"); ?>user/image/condition.gif" id="img4"/></a></td>
                                    <td><a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=pa"><img src="<?php include ($dd . "config/url.php"); ?>user/image/paymen.gif" id="img5"/></a></td>
                                </tr>
                            </table>
                        </li>
                        <li>
                            <div class="ym">
                                shinta
                            </div>
                        </li>
                    </ul>
                    <script type="text/javascript">
                        $("#img2").mouseover(function(){
                            $(this).css({
                                "height":" 100px",
                                "width": "120px",
                                "padding-top": "3px",
                                "margin-left": "3px"
                            });
                        });
                        $("#img2").mouseout(function(){
                            $(this).css({
                                "height":" 100px",
                                "width": "120px",
                                "padding-top": "10px",
                                "margin-left": "10px"
                            });
                        });
                        $("#img3").mouseover(function(){
                            $(this).css({
                                "height":" 100px",
                                "width": "120px",
                                "padding-top": "127px",
                                "margin-left": "5px"
                            });
                        });
                        $("#img3").mouseout(function(){
                            $(this).css({
                                "height":" 100px",
                                "width": "120px",
                                "padding-top": "120px",
                                "margin-left": "12px"
                            });
                        });
                        $("#img4").mouseover(function(){
                            $(this).css({
                                "height":" 100px",
                                "width": "120px",
                                "padding-top": "5px",
                                "margin-left": "0px"
                            });
                            $("#img4_shadow").css({
                                "height":"100px",
                                "width":"50px",
                                "padding-top":"5px",
                                "margin-left":"0px"
                            });
                        });
                        $("#img4").mouseout(function(){
                            $(this).css({
                                "height":" 100px",
                                "width": "120px",
                                "padding-top": "12px",
                                "margin-left": "-10px"
                            });
                            $("#img4_shadow").css({
                                "height":"100px",
                                "width":"50px",
                                "padding-top":"12px",
                                "margin-left":"-10px"
                            });
                        });
                        $("#img5").mouseover(function(){
                            $(this).css({
                                "height":" 100px",
                                "width": "120px",
                                "padding-top": "127px",
                                "margin-left": "0px"
                            });
                        });
                        $("#img5").mouseout(function(){
                            $(this).css({
                                "height":" 100px",
                                "width": "120px",
                                "padding-top": "120px",
                                "margin-left": "-10px"
                            });
                        });
                    </script>
                    <table class="menu_img">
                        <tr>
                            <td><a href="" target="_blank"><img src="<?php include ($dd . "config/url.php"); ?>user/image/fb.gif"/></a></td>
                            <td><a href="" target="_blank"><img src="<?php include ($dd . "config/url.php"); ?>user/image/sms.gif" style="margin-left: -20px;"/></a></td>
                            <td><a href="" target="_blank"><img src="<?php include ($dd . "config/url.php"); ?>user/image/pin.gif" style="margin-left: -30px;"/></a></td>
                            <td><a href="" target="_blank"><img src="<?php include ($dd . "config/url.php"); ?>user/image/sms2.gif" style="margin-left: -39px;"/></a></td>
                        </tr>
                    </table>

                </div>
            </div>