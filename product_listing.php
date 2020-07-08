<?php
    include "connect.php";
    include "function.php";
    // include "content.php";
    $result = $conn->query("SELECT * FROM product_listing ORDER BY 'ID' ASC");
    if(isset($_GET['del'])){
        $id = $_GET['del']; 
        del_product($id);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./admin.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
        <div style="padding: 10px 40px; width: 100%;">
                <table>   
                    <div class="header text-center">Quan ly san pham</div>
                    <div style="float: right;"><a href="admin.php?quanly=add">Them san pham</a></div>
                    <?php
                        $i = 1;
                        while ($row = $result->fetch_array()) {
                    ?>
                    <tr>
                        <td><?= $i?></td>
                        <td><img src="<?= $row['Images'] ?>" title="<?= $row['Car_name'] ?>" class="img-car"></td>
                        <td><?= $row['Car_name'] ?></td>
                        <td class="price"><?= number_format($row['Price'], 0, ",", ".") ?> VNĐ</span></td>
                        <td><a href="">Copy</a></td>
                        <td><a href="?edit=<?php echo $row['ID']?>&?quanly=sua">Sua</a></td>
                        <td><a href="?del=<?php echo $row['ID']; ?>">Xoa</a></td>
                    </tr>
                    <?php $i++; }?>
                </table>
        </div>             
    </body>
</html>