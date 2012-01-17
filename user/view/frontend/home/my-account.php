
            <script type="text/javascript">
            $(document).ready(function(){
                $("li#home").removeClass("background_menu");
                $("li#account").addClass("background_menu").css({
                    "margin-top":"-1px"
                });
                $("li#progress,li#shipment,li#confpayment").css({
                   "margin-top":"-1px"
               });
                $(".content_right,.header,.mycart").mouseover(function(){
                    $("li#account").addClass("background_menu").css({
                        "z-index":"1"
                    });
                    $("li#home,li#shipment,li#confpayment,li#progress").removeClass("background_menu");
                });
            });
        </script>

            <div class="content">
              <?php include $dd.'user/view/frontend/content_left/content_left.php'; ?>
                <div class="content_right">
                    
                    <div class="submenu_right_account">
                        
                        <form id="myform">
                            
                                <table>
                                    <tr>
                                        <td><h3 style="color: black; font-size: 12px;font-weight: bold; float: left">My Account</h3></td>
                                    </tr>
                                    <tr>
                                        <td><label>Name : </label></td>
                                        <td><input type="text" name="nama" pattern="[a-zA-Z ]{5,}" maxlength="30" required="required" /></td>
                                    </tr>
                                    <tr>
                                        <td><label>Address : </label></td>
                                        <td><input type="text" name="address" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label style="margin-right: 6px">District/City : </label>
                                            <select style="background-color: white; margin-bottom: 5px;border: 1px solid #8ea8c1;" name="city" required="required">

                                                <?php
                                                $ma = mysql_query("select * from kota order by namakota ASC");
                                                while ($fa = mysql_fetch_array($ma)) {
                                                    echo "<option style=\"width: 90px;\" value=\"$fa[idkota]\" >$fa[namakota]</option>";
                                                }
                                                ?>
                                            </select>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <label style="margin-right: 25px;" >Province : </label>
                                            <select style="background-color: white; margin-bottom: 5px;border: 1px solid #8ea8c1;" name="province" required="required">
                                                <?php
                                                $ma = mysql_query("select * from provinsi order by namapro ASC");
                                                while ($fa = mysql_fetch_array($ma)) {
                                                    echo "<option  style=\"width: 90px;\" value=\"$fa[idprovinsi]\" >$fa[namapro]</option>";
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email : </td>
                                        <td><input type="email" name="email" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td>Telp : </td>
                                        <td><input type="number" name="telp" min="9" max="15" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td><input type="text" name="username" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input type="password" name="password" required="required"/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <input type="submit" value="Edit" style="border-radius: 5px;background-color: white;float: right;cursor: pointer"/>
                                            <input type="submit" value="Save" style="border-radius: 5px; background-color: white;float: right;cursor: pointer"/>
                                        </td>
                                    </tr>
                                </table>
                            
                        </form>
                        <script>

                        
                            $.tools.validator.localize("fi", {
                                '*'			: 'empty',
                                ':email'  	: 'empty email',
                                ':number' 	: 'not valid number',
                                ':url' 		: 'not valid url',
                                '[max]'	 	: 'max, kuin $1',
                                '[min]'		: 'min, kuin $1',
                                '[required]'	: 'please fill'
                            });

                            $("#myform").validator({ lang: 'fi' });
                        </script>
                        
                        <table class="table_on">
                            <tr>
                                <td>Number of Purchase</td>
                                <td>The Date of Booking</td>
                                <td>Product</td>
                                <td>Quantity</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
          