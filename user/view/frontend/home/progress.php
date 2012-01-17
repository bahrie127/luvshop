
        <script type="text/javascript">
            $(document).ready(function(){
                $("li#home").removeClass("background_menu");
                
                $("li#progress").addClass("background_menu").css({
                    "margin-top":"-1px"
                });
               $("li#account,li#shipment,li#confpayment").css({
                   "margin-top":"-1px"
               });
               
               $(".content_right,.header,.mycart").mouseover(function(){
                    $("li#progress").addClass("background_menu").css({
                        "z-index":"1"
                    });
                    $("li#home,li#shipment,li#confpayment,li#account").removeClass("background_menu");
                });
               
            });
        </script>
    
            <div class="content">
                <div class="content_left">
                    
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("li#home").hover(
                            function(){
                                $(this).addClass("background_menu");
                                $("li#account").removeClass("background_menu");
                                $("li#progress").removeClass("background_menu");
                                $("li#shipment").removeClass("background_menu");
                                $("li#confpayment").removeClass("background_menu");
                            },function(){
                                return true;
                            }
                        );
                            $("li#account").hover(
                            function(){
                                $(this).addClass("background_menu");
                                $("li#home").removeClass("background_menu");
                                $("li#progress").removeClass("background_menu");
                                $("li#shipment").removeClass("background_menu");
                                $("li#confpayment").removeClass("background_menu");
                            },function(){
                                return true;
                            }
                        );
                            $("li#progress").hover(
                            function(){
                                $(this).addClass("background_menu");
                                $("li#account").removeClass("background_menu");
                                $("li#home").removeClass("background_menu");
                                $("li#shipment").removeClass("background_menu");
                                $("li#confpayment").removeClass("background_menu");
                            },function(){
                                return true;
                            }
                        );
                            $("li#shipment").hover(
                            function(){
                                $(this).addClass("background_menu");
                                $("li#account").removeClass("background_menu");
                                $("li#progress").removeClass("background_menu");
                                $("li#home").removeClass("background_menu");
                                $("li#confpayment").removeClass("background_menu");
                            },function(){
                                return true;
                            }
                        );
                            $("li#confpayment").hover(
                            function(){
                                $(this).addClass("background_menu");
                                $("li#account").removeClass("background_menu");
                                $("li#progress").removeClass("background_menu");
                                $("li#shipment").removeClass("background_menu");
                                $("li#home").removeClass("background_menu");
                            },function(){
                                return true;
                            }
                        );
                        });
                    </script>
                    <ul>
                        <li style="background-image: url('<?php include ($dd. "config/url.php");?>user/image/menu.jpg');" id="lili">
                            <?php include($dd.'user/view/frontend/content_left/list_menu.php'); ?>
                        </li>
                        <li style="background-image: url('<?php include ($dd. "config/url.php");?>user/image/menu.jpg');" id="lili">
                            <?php include($dd.'user/view/frontend/content_left/my-cart.php'); ?>
                        </li>
                        <li style="text-align: center">
                            <img src="<?php include ($dd. "config/url.php");?>user/image/bni.gif"/><br/><p>0201226431<br/>Siska Pratiwi</p>
                            <img src="<?php include ($dd. "config/url.php");?>user/image/mandiri.gif"/><p>149004914372<br/>Sheli Rosita</p>
                            <img src="<?php include ($dd. "config/url.php");?>user/image/tiki.gif"/>
                        </li>
                    </ul>
                </div>
                <div class="content_right">
                   
                    <div class="submenu_right_progress">

                        <h3 style="color: black;font-size: 12px;float: left;font-weight: bold">Progress</h3>
                        <br/>
                        <label style="font-size: 10px;text-align: left">Number of Purchase : </label>
                        <input type="text" style="border: 1px solid #8ea8c1;width: 100px"/>
                        <div class="img_sort">
                            <hr/>
                            <img src="<?php include ($dd. "config/url.php");?>user/image/progress/robotpesan.gif" id="img2a"/>
                            <img src="<?php include ($dd. "config/url.php");?>user/image/progress/robotbayar.gif" id="img2a"/>
                            <img src="<?php include ($dd. "config/url.php");?>user/image/progress/robotprogress.gif" id="img1a"/>
                            <img src="<?php include ($dd. "config/url.php");?>user/image/progress/robotprogress2.gif" id="img2a"/>
                            <img src="<?php include ($dd. "config/url.php");?>user/image/progress/robotprogress3.gif" id="img2a"/>
                            <img src="<?php include ($dd. "config/url.php");?>user/image/progress/robotkirim.gif" id="img2a"/>
                        </div>
                        <p style="color: black; float: left">Keterangan : </p>
                    </div>
                </div>
            </div>
            