<?php
    function del_product($id) {
        include "connect.php";
        global $db;
        $sql = "DELETE FROM product_listing WHERE id = '$id'";
        $db = $conn->query($sql) or die('Loi truy van');
    }
    function add_product() {
        include 'connect.php';    
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {
            if ($_FILES['image']['error'] > 0)
                echo "Upload lỗi rồi!";
            else {
                $errors = array();
                // $file_name = $_FILES['image']['name'];
                // $file_size = $_FILES['image']['size'];
                // $file_tmp = $_FILES['image']['tmp_name'];
                // $file_type = $_FILES['image']['type'];
                $tmp = explode('.',$_FILES['image']['name']);
                $file_exit = strtolower(end($tmp));           
                $extensions= array("jpeg","jpg","png");            
                if(!in_array($file_exit, $extensions)){
                    $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
                }           
                if($_FILES['image']['size'] > 2097152) {
                    $errors[]='Kích thước file không được lớn hơn 2MB';
                }
                if (empty($errors)) {
                    move_uploaded_file($_FILES['image']['tmp_name'], 'images/'.$_FILES['image']['name']);
                    $name = $_POST['car_name'];
                    $price = $_POST['price'];
                    $img = 'images/'.$_FILES['image']['name'];
                    $sql = $conn->query("INSERT IGNORE INTO product_listing (Car_name, Images, Price) VALUES ('$name', '$img', '$price')");  
                }   
            }               
        }
    }
    function edit_product($name, $price, $img) {
        include 'connect.php';    
        global $db;
        $query = "UPDATE product_listing SET Car_name='$name', Price = '$price', Images = '$img' WHERE id = '$id'";
        $db = $conn->query($query) or die('Loi truy van');
    }
?>