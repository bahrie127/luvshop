
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

                <?php include $dd.'user/view/frontend/content_right/content_right.php'; ?>
            </div>
        
        