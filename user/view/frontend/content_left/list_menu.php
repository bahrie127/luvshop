
<ul style="margin: 0;padding: 0;list-style: none" >
    <li style="border-bottom: 1px solid black;height: 20px;margin-bottom: 20px">Main Menu</li>
    <li class="background_menu" id="home" style="height: 30px"><a href="<?php include ($dd. "config/url.php"); ?>index.php" style="color: #f08cca;" >Home</a></li>
    <li style="height: 30px" id="account"><a href="<?php include ($dd. "config/url.php"); ?>user/view/tamp.php?menu=ma" style="color: #f08cca;"  >My Account</a></li>
    <li style="height: 30px" id="progress"><a href="<?php include ($dd. "config/url.php"); ?>user/view/tamp.php?menu=pr" style="color: #f08cca;" >Progress</a></li>
    <li style="height: 30px" id="shipment"><a href="<?php include ($dd. "config/url.php"); ?>user/view/tamp.php?menu=sh" style="color: #f08cca;" >Shipment</a></li>
    <li style="height: 30px" id="confpayment"><a href="<?php include ($dd. "config/url.php"); ?>user/view/tamp.php?menu=cp" style="color: #f08cca;font-size: 13px" >Confirmation of Payments</a></li>
</ul>

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