
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
                    
                    <div class="submenu_right_condition">
                        
                        <img src="<?php include ($dd. "config/url.php");?>user/image/home/girl3.gif"/>
                        <div class="list_condition">
                            <p>Term & Condition</p>
                            <br/>
                            <ul>
                                <li>Barang yang dijual adalah Ready Stock dan PO (pre order) yang <br/><br/> dibuat secara handmade, kemiripan dengan foto 80-100%.</li><br/>
                                <li>Harga yang tertera adalah fixed price dan belum<br/><br/> termasuk ongkos kirim. Ongkir dapat dilihat di<br/><br/>www.tiki-online.com dengan mengisikan FROM "Yogyakarta".</li><br/>
                                <li>Masa booking 2x24 jam. Lebih dari 2x24 jam tidak melakukan <br/><br/> payment, maka order akan otomatis dibatalkan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
