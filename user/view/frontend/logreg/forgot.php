<script type="text/javascript">
    $(document).ready(function(){
        $("a#forgot").css({
            "color":"black"
        });
        $("li#home").removeClass("background_menu");
        
        $("li#progress,li#shipment,li#confpayment,li#account").css({
            "margin-top":"-1px"
        });
        $(".content_right,.header,.mycart").mouseover(function(){
            
            $("li#home,li#shipment,li#confpayment,li#progress,li#account").removeClass("background_menu");
        });
    });
    
</script>

<div class="content">
    <?php include $dd . 'user/view/frontend/content_left/content_left.php'; ?>
    <div class="content_right">

        <div class="submenu_right_forgot" style="padding: 15px">

            <h2>Forgot Your Login or Password?</h2><br/>
            <p>Enter the email address currently associated with your luvshop.com account.<br>We will send you an email with your account information and instructions to reset your password.</p>
            <form>
                <table>
                    <tr>
                        <td><label>E-mail Address: </label></td>
                        <td><input type="email"/></td>

                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="submit"/></td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</div>