<?php
    include "connect.php";
    include_once "function.php";
    include "header.php";
    include "footer.php";
    $result = $conn->query("SELECT * FROM product_listing ORDER BY 'ID' ASC");
?>
    <div style="padding: 10px 40px; width: 100%;" class="col-sm-10" id="content">
        <table>   
            <div class="header text-center">Quan ly san pham</div>
            <div style="float: right;"><a href="add_product.php">Them san pham</a></div>
            <?php
                $i = 1;
                while ($row = $result->fetch_array()) {
            ?>
            <tr>
                <td class="text-center"><?= $i?></td>
                <td><img src="<?= $row['Images'] ?>" title="<?= $row['Car_name'] ?>" class="img-car"></td>
                <td class="text-center"><?= $row['Car_name'] ?></td>
                <td class="price text-center"><?= number_format($row['Price'], 0, ",", ".") ?> VNĐ</span></td>
                <td class="text-center"><a href="edit_product.php?edit_id=<?php echo $row['ID']; ?>">Sua</a></td>
                <td class="text-center"><a onclick="window.confirm('Bạn muốn xóa không');" href="?del_id=<?php echo $row['ID']; ?>">Xoa</a></td>
            </tr>
            <?php $i++; }?>
        </table>
        <?php
            if (isset($_GET['del_id'])) {
                $id = $_GET['del_id'];
                del_product($id);
            }
        ?>
    </div>             
