
        <script type="text/javascript">
            $(document).ready(function(){
                $("li#home").removeClass("background_menu").css({
                    });
                $("li#account,li#progress,li#shipment,li#confpayment").css({
                    "margin-top":"-1px"
                });
                
                });
        </script>
    
            <div class="content">
                <?php include $dd.'user/view/frontend/content_left/content_left.php'; ?>
                
                <div class="content_right">
                   
                    <div class="submenu_right_payment">
                       
                        <img src="<?php include ($dd. "config/url.php");?>user/image/home/girl2.gif"/>
                        <div class="list_payment">
                            <p style="font-weight: bold;font-family: sans-serif">Pembayaran</p>
                            <p>Pembayaran dilakukan ke rekening BNI<br/> dan Mandiri via TRANSFER</p>
                            <ol>
                                <li style="margin-left: 20px;">Mandiri : 1490004914372<br/><span style="margin-left: -20px">Atas nama Sheli Rosita</span></li>
                                <li style="margin-left: 20px;">BNI : 0201226431<br/><span style="margin-left: -20px">Atas nama Siska Pratiwi</span></li>
                            </ol>
                            <p style="font-weight: bold">Konfirmase Pembayaran</p>
                            <ul>
                                <li style="list-style: outside;margin-left: 15px;">Konfirmasi pembayaran paling lambat<br/>2 x 24 jam setelah pemesanan.</li>
                                <li style="list-style: outside;margin-left: 15px;">Jika tidak ada konfirmasi maka kami<br/> berhak meng-cancel order.</li>
                                <li style="list-style: outside;margin-left: 15px;">Konfirmasi pembayaran dapat dilakukan <br/>pada menu Confirmation of Payment.</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
           
