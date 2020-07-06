<!-- <?php
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
            }   
        } 
        $name = $_POST['car_name'];
        $price = $_POST['price'];
        $img = 'images/'.$_FILES['image']['name'];
        $sql = $conn->query("INSERT IGNORE INTO product_listing (Car_name, Image, price) VALUES ('$name', '$img', '$price')");                
    }
?> -->
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <!-- <link rel="stylesheet" type="text/css" href="./home.css"> -->
        <link rel="stylesheet" type="text/css" href="./admin.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../jQuery v3.5.1.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
        
    </head>
    <body>
        <!-- <div id="action_bar">
            <div class="container">
                <ul class="contact_details">
                    <li class="slogan">Have any question?</li>
                    <li class="phone">
                        <i class="fa fa-phone" style="color: #adadad"></i>
                        <a href="#">+84 397 561 148</a>
                    </li>
                    <li class="email">
                        <i class="fa fa-envelope" style="color: #adadad"></i>
                        <a href="#">tunglamldk@gmail.com</a>
                    </li>
                </ul>
                <ul class="social">
                    <li class="skype">
                        <a href="#" title="Skype">
                            <i class="fa fa-skype"></i>
                        </a>
                    </li>
                    <li class="facebook">
                        <a href="#" title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="twitter">
                        <a href="#" title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="instagram">
                        <a href="#" title="Instagram">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="youtube">
                        <a href="#" title="YouTube">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div> -->
        <div style="background-color: #333333;">
            <div class="container">
                <div class="navbar">
                    <div class="navbar-nav" style="color: #ffffff; display: inline-block;">Hello <a href="#">Admin</a></div>
                    <!-- <div class="navbar-nav">Logout</div> -->
                </div>
            </div>
        </div>
        <div style="padding: 10px 40px; width: 100%;" class="row">
            <div class="col-sm-2">
                <ul class="nav flex-column" style="width: 100%">
                    <li class="nav-item header text-center">Admin menu</li>
                    <li class="nav-item">
                        <a class="nav-link action" href="#">Tin tuc</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link action" href="product_listing.php">Quan ly san pham</a>           
                    </li>
                    <li class="nav-item">
                        <a class="nav-link action" href="#">Don hang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link action" href="#">User</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-10" id="content"></div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {             
                $(".action").click(function() {
                    var x = $(this).html();
                    if (x === "Quan ly san pham") {
                        $("#content").load("product_listing.php");              
                    } else if (x === "Tin tuc") {
                        $("$content").load("product_listing.php")
                    } else if (x === "Don hang") {
                        $("$content").load("product_listing.php")
                    } else if (x === "User") {
                        $("$content").load("product_listing.php")
                    }
                });
            });
        </script>     
    </body>
</html>