
        <script type="text/javascript">
            $(document).ready(function(){
                 $("li#home").removeClass("background_menu");
                
                $("li#shipment").addClass("background_menu").css({
                    "margin-top":"-1px"
                });
               $("li#account,li#progress,li#confpayment").css({
                   "margin-top":"-1px"
               });
               
               $(".content_right,.header,.mycart").mouseover(function(){
                    $("li#shipment").addClass("background_menu").css({
                        "z-index":"1"
                    });
                    $("li#home,li#progress,li#confpayment,li#account").removeClass("background_menu");
                });
               
                });
        </script>
  
            <div class="content">
                <?php include $dd.'user/view/frontend/content_left/content_left.php'; ?>
                <div class="content_right">
                    <style>
                      
                    </style>
                    <div class="submenu_right_shipment">
                        
                        <form>
                            <table>
                                <tr>
                                    <td><h3 style="color: black; float: left; font-size: 10px;font-weight: bold;margin-bottom: 20px">Shipment</h3></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 150px"><label>Number of Purchase : </label></td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td><label>Sent Date : </label></td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td><label>Number of Resi : </label></td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td><label>Name : </label></td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td><label>Address : </label></td>
                                    <td><input type="text"/></td>
                                </tr>
                                <tr>
                                    <td><label>Phone</label></td>
                                    <td><input type="text"/></td>
                                </tr>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
           