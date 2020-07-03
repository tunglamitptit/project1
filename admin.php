<?php
    include "connect.php";
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
                // echo "upload thành công <br/>";
                // echo  $_FILES['image']['tmp_name'] . '<br>';
                // echo $_FILES['image']['name'] . '<br>';
                // echo 'Dường dẫn: upload/' . $_FILES['image']['name'] . '<br>';
                // echo 'Loại file: ' . $_FILES['image']['type'] . '<br>';
                // echo 'Dung lượng: ' . ((int)$_FILES['image']['size'] / 1024) . 'KB';
            }              
        }
        $name = $_POST['car_name'];
        $price = $_POST['price'];
        $img = 'images/'.$_FILES['image']['name'];
        $sql = $conn->query("INSERT INTO product_listing (Car_name, Image, price) VALUES ('$name', '$img', '$price')");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" type="text/css" href="./home.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="./1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    </head>
    <body>
        <div id="upload-zone" class="box-content">
            <fieldset>
                <form action="?upload=file" method="POST" enctype="multipart/form-data">
                    <div>
                        <label>Ten: </label>
                        <input type="text" name="car_name" class="form-control">
                    </div>                  
                    <div>
                        <label>Price: </label>
                        <input type="price" name="price" class="form-control">
                    </div>
                    <div>
                        <label>Content: </label>
                        <input type="text" name="content" class="form-control" >
                    </div>                   
                    <div>
                        <input multiple type="file" name="image">
                    </div>
                    <div>
                        <input type="submit" value="Upload File" name="up">
                    </div>                 
                </form>
            </fieldset>
            <!-- <?php
                $result = $conn->query("SELECT * FROM product_listing ORDER BY 'ID' ASC");             
                while ($row = $result->fetch_array()) {
                    echo '<img src='.$row['Image'].' />';

                }
            ?> -->
        </div>      
    </body>
</html>