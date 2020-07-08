<?php
    include "connect.php";
    if (isset($_GET['quanly'])) {
        $row = $_GET['quanly'];
    } else $row = "";
    if ($row = "list") {
        include "product_listing.php";
    } else if ($row = "sua") {
        include "edit_product.php";
    } else if ($row = "add") {
        include "add_product.php";
    }
?>