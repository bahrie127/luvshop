
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
                    
                    <div class="submenu_right_order" style="padding: 15px">
                        
                        <img src="<?php include ($dd. "config/url.php");?>user/image/home/girl1.gif" />
                        <div class="list_order">
                            <p>
                                How to Order ?
                            </p>
                            <br/>
                            <p>
                                Buat Account Baru
                            </p>
                            <br/>
                            <ol>
                                <li>Klik tulisan "Sign Up!" dikanan atas, isi data, tekan tombol Register.</li>
                                <li>Cek email kalian, cari email activation link dari LuvShop boutique.<br/>buka dan klik link yang ada, Kini kalian bisa login diwebsite kami. </li>
                            </ol>
                            <br/>
                            <p>
                                cara ORDER
                            </p>
                            <br/>
                            <ol>
                                <li>Login.</li>
                                <li>Pilih barang yang ingin dipesan.</li>
                                <li>Tekan tombol add to cart pada barang yang ingin dipesan.</li>
                                <li>Jika sudah selesai memilih barang2 yang ingin dipesan, <br/> klik tulisan "show cart" pada kotak Your Cart</li>
                                <li>Klik tulisan "Checkout".</li>
                                <li>Isi data Shipping Information.</li>
                                <li>Tekan tombol next.</li>
                                <li>Cek kembali data orderan kalian, jika sudah betul,<br/> tekan tombol Confirm Order.</li>
                                <li>Untuk melihat data orderan yang pernah kalian buat, <br/>cari menu My account yang ada didalam main menu.</li>
                                
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
           