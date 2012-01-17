
        <script type="text/javascript">
            $(document).ready(function(){
                $("li#home").removeClass("background_menu");
                
                $("li#confpayment").addClass("background_menu").css({
                    "margin-top":"-1px"
                });
                $("li#account,li#shipment,li#progress").css({
                    "margin-top":"-1px"
                });
                $(".content_right,.header,.mycart").mouseover(function(){
                    $("li#confpayment").addClass("background_menu").css({
                        "z-index":"1"
                    });
                    $("li#home,li#shipment,li#account,li#progress").removeClass("background_menu");
                });
            });
               
        </script>
    

            <div class="content">
                <?php include $dd.'user/view/frontend/content_left/content_left.php'; ?>
                <div class="content_right">
                   
                    <div class="submenu_right_confpayment" >
                        <form>
                            <table>
                                <tr>
                                    <td><label>Number of Purchase : </label></td>
                                    <td><input type="number"  required="required"/></td>
                                </tr>
                                <tr>
                                    <td><label>Destination Bank : </label></td>
                                    <td>
                                        <select style="width: 86px" required="required">
                                            <option>

                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Your Bank</label></td>
                                    <td><input type="text" required="required"/></td>
                                </tr>
                                <tr>
                                    <td><label>Account Holder's Name : </label></td>
                                    <td><input type="text" required="required"/></td>
                                </tr>
                                <tr>
                                    <td><label>Date Transfer : </label></td>
                                    <td>
                                        <select style="width: 40px" required="required">
                                            <option>

                                            </option>
                                        </select>
                                        <select style="width: 40px" required="required">
                                            <option>

                                            </option>
                                        </select>
                                        <select style="width: 72px" required="required">
                                            <option>

                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Amount : </label></td>
                                    <td><input type="text" required="required"/></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: right;"><input type="submit" style="background-image: url(../image/cart/submit.gif);width: 108px;cursor: pointer;-webkit-border-radius: 10px;-moz-border-radius: 10px;-o-border-radius: 10px;outline: none;border: 1px solid white" value=""/></td>
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

                    </div>
                </div>
            </div>
            