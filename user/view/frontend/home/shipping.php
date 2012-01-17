
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
                    
                    <div class="submenu_right_shipping">
                        
                        <img src="<?php include ($dd. "config/url.php");?>user/image/home/keramik.gif"/>
                        <div class="list_shipping">
                            <p>Semua pengiriman ACE BOUTIQUE menggunakan jasa pengiriman TIKI.<br/>Tarif kirim dapat dilihat dari YOGYAKARTA ke KOTA-KOTA lain.<br/>keterangan : </p>
                            <ol>
                                <li style="margin-left: 0px">1.Estimasi berat 1 kg = 1-2 bags.<br/>untuk tas besar minimal 2kg (dihitung volume) </li>
                                <li style="margin-left: 0px">2.Segera setelah barang dikirim, kami akan memberikan <br/> nomer resi TIKI agar informasi status pengiriman dapat <br/> dicek secara online di http://www.tiki-online.com</li>
                                <li style="margin-left: 0px">3.Jadwal pengiriman JNE oleh LuvShop boutique dilakukan <br/> setiap hari (senin-jumat, kecuali hari libur) dengan syarat,<br/>payment sebelum jam 13.00 WIB.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
           
