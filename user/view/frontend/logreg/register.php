<!DOCTYPE html>
<?php include $dd.'config/koneksi.php'; ?>

        <script type="text/javascript">
            $(document).ready(function(){
                $("li#home").removeClass("background_menu");
                
                $("li#progress").css({
                    "margin-top":"-1px"
                });
                $("li#account,li#shipment,li#confpayment").css({
                    "margin-top":"-1px"
                });
                $(".content_right,.header,.mycart").mouseover(function(){
                    
                    $("li#home,li#shipment,li#confpayment,li#account,li#progress").removeClass("background_menu");
                });
               $("a#sign").css({
                   "color":"black"
               });
            });
        </script>


            <div class="content">
                <?php include $dd.'user/view/frontend/content_left/content_left.php'; ?>
                <div class="content_right">
                    <style>
                        .content_right .register
                        {
                            border: 1px solid #cbcbcb;
                            padding: 20px;
                            border-radius: 20px;
                            -webkit-border-radius: 20px;
                            -moz-border-radius: 20px;
                            -o-border-radius: 20px;
                            margin-top: -10px;
                        }
                        .content_right .register h3
                        {
                            margin-bottom: 10px;
                            color: #050505;
                        }
                        .content_right .register table
                        {
                            margin: 0;
                            padding: 0;
                        }
                        .content_right .register table label
                        {
                            color: #0c0c0c;
                        }
                        .content_right .register table tr td input
                        {
                            margin: 0 0 5px 0;
                            padding: 0;
                        }
                        .content_right .register form
                        {
                            margin: 0;
                            padding: 0;
                        }
                        .content_right .register img
                        {
                            float: right;
                            height: 50px;
                            width: 61px;
                            margin-top: -10px;
                        }

                    </style>
                    <div class="register">
                        <style type="text/css">
                            .register h3
                            {
                                font-weight: bold;
                                font-family: sans-serif;
                                font-size: 13px;
                                color: #070707;
                            }
                            .register label
                            {
                                font-family: sans-serif;
                                font-size: 12px;
                                color: #000000;
                            }
                            .register input
                            {
                                border: 1px solid #9cb2c9;
                                width: 170px
                            }
                            .register select
                            {
                                background-color: white;
                                outline: none;
                                border: 1px solid #9cb2c9;
                                margin-bottom: 5px;
                                width: 94px;

                            }
                            .register button
                            {

                                float: right;
                                height: auto;
                                width: 58px;
                                border-radius: 10px;
                                background-color: #d6e7ff;
                                color: #001136;
                                padding: 5px;
                                font-weight: bold;
                                font-size: 12px;
                                cursor: pointer
                            }
                        </style>
                        <h3>Registration</h3>
                        <form action="<?php include '../elemen/url.php'?>model/model_biodataUser.php?m=i" method="POST">
                            <table>
                                <tr>
                                    <td><label>Name:</label></td>
                                    <td><input type="text" name="nama" required="required"/></td>
                                </tr>
                                <tr>
                                    <td><label>Address:</label></td>
                                    <td><input  type="text" name="address" required="required"/></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <label>District/City:</label>
                                        <select name="kota" >
                                            <?php
                                            $ma = mysql_query("select * from kota order by namakota ASC");
                                            while ($fa = mysql_fetch_array($ma)) {
                                                echo "<option value=\"$fa[idkota]\" >$fa[namakota]</option>";
                                            }
                                            ?>
                                        </select>
<!--                                        <img src="<?php include ($dd . "config/url.php"); ?>image/tandabawah.gif" style="height: 20px; width: 20px;position: absolute;margin-left: -20px;margin-top: 0px;"/>-->
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <label style="margin-right: 18px">Province:</label>
                                        <select name="provinsi">
                                            <?php
                                            $ma = mysql_query("select * from provinsi order by namapro ASC");
                                            while ($fa = mysql_fetch_array($ma)) {
                                                echo "<option value=\"$fa[idprovinsi]\" >$fa[namapro]</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Email:</label></td>
                                    <td><input type="email" name="email" required="required" /></td>
                                </tr>
                                <tr>
                                    <td><label>Telp:</label></td>
                                    <td><input type="text" name="telp" required="required"/></td>
                                </tr>
                                <tr>
                                    <td><label>Username</label></td>
                                    <td><input type="text" name="username" required="required"/></td>
                                </tr>
                                <tr>
                                    <td><label>Password</label></td>
                                    <td><input type="password" name="password" required="required"/></td>
                                </tr>
                                <tr>
                                    <td><label>Verify Password:</label></td>
                                    <td><input type="password" name="password2" required="required"/></td>
                                </tr>
                                <tr>
                                    
                                    <td colspan="2"><input type="submit" value="register" style="width: 64px;background-color: #d4e6fe;-webkit-border-radius: 10px;-moz-border-radius: 10px;-o-border-radius: 10px;padding: 3px;float: right;cursor: pointer"/></td>
                                </tr>

                            </table>
                        </form>
                        <script>

                            $.tools.validator.localize("fi", {
                                '*'			: 'empty',
                                ':email'  	: 'empty email',
                                ':number' 	: 'not valid number',
                                ':url' 		: 'not valid url',
                                '[max]'	 	: 'max, kuin $1',
                                '[min]'		: 'min, kuin $1',
                                '[required]'	: 'please fill'
                            });

                            $("#myform").validator({ lang: 'fi' });

                        </script>
                    </div>
                </div>
            </div>
            
