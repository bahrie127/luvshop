<?php

include 'header.php';
$menu = $_GET['menu'];


if (empty($menu)) {
    
} else if ($menu == "ma") {
    include 'frontend/home/my-account.php';
} else if ($menu == "pr") {
    include 'frontend/home/progress.php';
} else if ($menu == "sh") {
    include 'frontend/home/shipment.php';
} else if ($menu == "cp") {
    include 'frontend/home/confirmation-payment.php';
} else if ($menu == "or") {
    include 'frontend/home/order.php';
} else if ($menu == "co") {
    include 'frontend/home/condition.php';
} else if ($menu == "pa") {
    include 'frontend/home/payment.php';
} else if ($menu == "ship") {
    include 'frontend/home/shipping.php';
} else if ($menu == "detail") {
    include 'frontend/memberarea/memberarea-detail-stock_1.php';
} else if ($menu == "check") {
    include 'frontend/memberarea/memberarea-check-out.php';
} else if ($menu == "con") {
    include 'frontend/memberarea/memberarea-continue-shopping.php';
} else if ($menu == "car") {
    include 'frontend/memberarea/memberarea-cart.php';
} else if ($menu == "mship") {
    include 'frontend/memberarea/memberarea-shipping.php';
} else if ($menu == "com") {
    include 'frontend/memberarea/memberarea-complete-order.php';
} else if ($menu == "reg") {
    include 'frontend/logreg/register.php';
}

include 'footer.php';
?>
