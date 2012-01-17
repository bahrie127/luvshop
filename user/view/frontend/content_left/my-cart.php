<div class="mycart">
    
    <img src="<?php include ($dd . "config/url.php"); ?>user/image/cart.gif" class="img_cart" />
    <img src="<?php include ($dd . "config/url.php"); ?>user/image/cart2.gif" class="img_cart2" />
    <p class="p_cart">My Cart</p>
    <br/>
    <br/>


    <!-- content block -->
    <div id="mcs_container" style="position: absolute">
        <div class="customScrollBox">
            <div class="container">
                <div class="content">
<!--                    <h1 id="harga_barang">&nbsp;</h1>-->
<!--                    <p id="nama_barang">dbjhbdbcsbjbcjsb</p><p id="nama_barang">dbjhbdbcsbjbcjsb</p><p id="nama_barang">dbjhbdbcsbjbcjsb</p><p id="nama_barang">dbjhbdbcsbjbcjsb</p><p id="nama_barang">dbjhbdbcsbjbcjsb</p><p id="nama_barang">dbjhbdbcsbjbcjsb</p><p id="nama_barang">dbjhbdbcsbjbcjsb</p><p id="nama_barang">dbjhbdbcsbjbcjsb</p><p id="nama_barang">dbjhbdbcsbjbcjsb</p>-->
<!--                    <div id="cartfadein">
                        <table>
                            <tr>
                                <td><p id="nama_barang">&nbsp;</p></td>
                                <td><h1 id="harga_barang">&nbsp;</h1></td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr/></td>
                            </tr>
                            <tr>
                                <td><p>Total</p></td>
                                <td>
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            var n = ""
                                            if (n == 1)
                                                {
                                                    n+n;
                                                }
                                                
                                        });
                                    </script>
                                </td>
                            </tr>
                        </table>
                    </div>-->



                                        <div id="cartfadein">
                                            <table>
                                                <tr>
                                                    <td><p  id="nama_barang"></p></td>
                                                    <td ><h1 id="harga_barang"></h1></td>
                                                </tr>
                                            </table>
                                            <hr/>
                                            <table>
                                                <tr>
                                                    <td><p>Total</p></td>
                                                    <td><p>IDR 95.000</p></td>
                                                </tr>
                                            </table>                        
                                        </div>

                </div>
            </div>
            <div class="dragger_container">
                <div class="dragger"></div>
            </div>
        </div>
        <a href="#" class="scrollUpBtn"></a> <a href="#" class="scrollDownBtn"></a>
        <a href="<?php include ($dd . "config/url.php"); ?>user/view/tamp.php?menu=check" style="z-index: 10;"><p id="showcart">SHOW CART</p></a>
    </div>

    <!-- content to show if javascript is disabled -->
    <noscript>
    <style type="text/css">
        #mcs_container .customScrollBox{overflow:auto;}
        #mcs_container .dragger_container{display:none;}
    </style>
    </noscript>

    <script>
        $(window).load(function() {
            mCustomScrollbars();
        });

        function mCustomScrollbars(){
            /* 
            malihu custom scrollbar function parameters: 
            1) scroll type (values: "vertical" or "horizontal")
            2) scroll easing amount (0 for no easing) 
            3) scroll easing type 
            4) extra bottom scrolling space for vertical scroll type only (minimum value: 1)
            5) scrollbar height/width adjustment (values: "auto" or "fixed")
            6) mouse-wheel support (values: "yes" or "no")
            7) scrolling via buttons support (values: "yes" or "no")
            8) buttons scrolling speed (values: 1-20, 1 being the slowest)
             */
            $("#mcs_container").mCustomScrollbar("vertical",300,"easeOutCirc",1.05,"auto","yes","yes",15); 
        }

        /* function to fix the -10000 pixel limit of jquery.animate */
        $.fx.prototype.cur = function(){
            if ( this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null) ) {
                return this.elem[ this.prop ];
            }
            var r = parseFloat( jQuery.css( this.elem, this.prop ) );
            return typeof r == 'undefined' ? 0 : r;
        }

        /* function to load new content dynamically */
        function LoadNewContent(id,file){
            $("#"+id+" .customScrollBox .content").load(file,function(){
                mCustomScrollbars();
            });
        }
    </script>


    <script type="text/javascript" src="<?php include ($dd . "config/url.php"); ?>user/js/jquery.mCustomScrollbar.js"></script>

    
    <!--    <div id="cartfadein">
            <table>
                <tr>
                    <td id="nama_barang"></td>
                    <td id="harga_barang"></td>
                </tr>
            </table>
            <hr/>
            <table>
                <tr>
                    <td><p>Total</p></td>
                    <td><p>IDR 95.000</p></td>
                </tr>
            </table>
            <a href="<?php //include('url.php');      ?>memberarea/memberarea-check-out.php"><p id="showcart">SHOW CART</p></a>
        </div>-->

    <p style="font-size: 13px;margin-top: 69px" id="cartempty">Your Cart is Empty</p>

</div>