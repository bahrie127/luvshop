
        <script type="text/javascript">
            $(document).ready(function(){
                $("li#home").removeClass("background_menu");
                
                $("li#progress").css({
                    "margin-top":"-1px"
                });
               $("li#account,li#shipment,li#confpayment").css({
                   "margin-top":"-1px"
               });
               $("p#cartempty").css({
                    "display":"none"
                });
                   
                $("div#cartfadein").css({
                    "display":"block"
                });
               
            });
        </script>

            <div class="content">
                <?php include $dd.'user/view/frontend/content_left/content_left.php'; ?>
                <div class="content_right">
                    <style>
                        .content_right .submenu_right
                        {
                            border: 1px solid #cbcbcb;
                            padding: 15px;
                            margin-top: -10px;
                            border-radius: 30px;
                            -webkit-border-radius: 30px;
                            -moz-border-radius: 30px;
                            -o-border-radius: 30px;
                        }
                        .content_right .submenu_right table
                        {
                            margin: 0;
                            padding: 0;
                        }
                        .content_right .submenu_right table tr
                        {
                            margin: 0;
                            padding: 0;

                        }
                        .content_right .submenu_right table tr td
                        {
                            width: 110px;

                            font-size: 12px;
                            font-family: sans-serif;

                        }
                        .content_right .submenu_right ul
                        {
                            margin: 0;
                            padding: 0;
                        }
                        .content_right .submenu_right ul li img
                        {
                            margin: 0;
                            padding: 0;
                            height: 206px;
                            width: 189px;
                        }
                        .content_right .submenu_right h3
                        {
                            color: #00438d;
                            text-align: center;
                            font-size: 15px;
                        }
                        .content_right .submenu_right p
                        {
                            color: #32597a;
                            text-align: center;
                            font-size: 11px;
                        }
                        .content_right .submenu_right .tombol
                        {
                            margin-top: 172px;
                            text-align: center;
                        }
                        .content_right .submenu_right .tombol img
                        {
                            height: 24px;
                            width: 88px;
                        }
                        .content_right .submenu_right .img_sort
                        {
                            margin-bottom: 20px;
                            text-align: center;
                        }
                        .content_right .submenu_right .img_sort img
                        {
                            margin-bottom: 10px;
                            margin-right: 44px;
                        }

                        .content_right .submenu_right .img_sort #img1a
                        {
                            height: 58px;
                            width: 67px;
                            margin-bottom: -6px;
                        }

                        .content_right .submenu_right .img_sort #img2a
                        {
                            height: 30px;
                            width: 41px;
                            margin-bottom: 4px;
                        }
                        .content_right .submenu_right .img_sort hr
                        {
                            width: 292px;
                            margin-left: 116px;
                            border: 1px solid #3473ba;
                            position: absolute;
                            margin-top: 33px;
                        }

                    </style>
                    <div class="submenu_right">
                        <div class="img_sort">
                            <hr/>
                            <img src="<?php include ($dd . "config/url.php"); ?>user/image/cart/cartorder.gif" id="img1a"/>
                            <img src="<?php include ($dd . "config/url.php"); ?>user/image/cart/shippingorder.gif" id="img2a"/>
                            <img src="<?php include ($dd . "config/url.php"); ?>user/image/cart/completeorder.gif" id="img2a"/>
                        </div>
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Quantity</td>
                                <td>Weight</td>
                                <td>Subtotal</td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td>vebtago magenta</td>
                                <td>IDR 95.000</td>
                                <td></td>
                                <td>0,5</td>
                                <td>IDR 95.000</td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr style="border-bottom: 1px dashed black">
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Shipping fee: </td>
                                <td>0,5</td>
                                <td>Waiting</td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total: </td>
                                <td>IDR 95.000</td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>
                            <tr style="border-bottom: 1px dashed black">
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td><p style="margin-top: 5px;"></p></td>
                            </tr>

                            <tr style="border-bottom: 1px solid black;"> 
                                <td colspan="5"></td>
                            </tr>
                            <tr>
                                <td><br/></td>
                            </tr>

                        </table>
                        <div class="tombol">
                            <a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=check"><img src="<?php include ($dd . "config/url.php"); ?>user/image/cart/back.gif"/></a>
                            <a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=mship"><img src="<?php include ($dd . "config/url.php"); ?>user/image/cart/next.gif"/></a>
                        </div>

                    </div>
                </div>
            </div>
            