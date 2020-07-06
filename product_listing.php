<?php
    include "connect.php";
    $result = $conn->query("SELECT * FROM product_listing ORDER BY 'ID' ASC");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Danh sach san pham</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <!-- <link rel="stylesheet" type="text/css" href="./home.css"> -->
        <link rel="stylesheet" type="text/css" href="./admin.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <style>
            table {
                width: 100%;
                height: 100%;
                border-collapse: collapse;
            }
            table, td {
                border: 1px solid black;
            }
            .img-car {
                position: relative;
                width: 50px;
                height: 50px;
            }
        </style>   
    </head>
    <body>
        <table>
            <div class="header text-center">Quan ly san pham</div>
            <div style="float: right;"><a href="add_product.php">Them san pham</a></div>
            <?php
                while ($row = $result->fetch_array()) {
            ?>
            <tr>
                <td><img src="<?= $row['Images'] ?>" title="<?= $row['Car_name'] ?>" class="img-car"></td>
                <td><?= $row['Car_name'] ?></td>
                <td class="price"><?= number_format($row['Price'], 0, ",", ".") ?> VNĐ</span></td>
                <td><a href="">Copy</a></td>
                <td><a href="">Sua</a></td>
                <td><a href="delete_product.php">Xoa</a></td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>