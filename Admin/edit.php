<?php
    include_once "function.php";
    include "../connect.php";
    $id = 16;
    $sql = "UPDATE product_listing SET Car_name='28' WHERE id=16"; 
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('thanh cong'); </script>";
    }
?>
