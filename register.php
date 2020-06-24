<?php
    // header("location:register.php");
    include "connect.php";
    $nameErr = '';
    if (isset($_POST["submit"])) {
        $nameErr = '123123123123123';
		// lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
        $password = $_POST["password"];
        $re_password = $_POST["re_password"];
		$email = $_POST["email"];
		$result = $conn->query("SELECT * FROM users");
		$rows_users = array(
			"user_name" => array(), "e_mail" => array()
		); 
		$i = 0;
		$check_1 = true;
		$check_2 = true;
		while ($row = $result->fetch_assoc()) {
			$rows_users["user_name"][$i] = $row["Username"];
			$rows_users["e_mail"][$i] = $row["Email"];
			$i++;
		}
		for ($j = 0; $j <= $i; $j++) {
			if ($username == $rows_users["user_name"][$j]) {
				$check_1 = false;
				break;
			}
			if ($email == $rows_users["e_mail"][$j]) {
				$check_2 = false;
				break;
			}
		}
		//Kiểm tra điều kiện 
		if ($username == "" || $password == "" || $re_password == "" || $email == "") {
			echo "<script language='javascript'>alert('Bạn vui lòng nhập đầy đủ thông tin!'); window.location='register.php';</script>";
		} else if ($password != $re_password) {
			echo "<script language='javascript'>alert('Mật khẩu không trùng khớp!'); window.location='register.php';</script>";
		} else if (!$check_1) {
			echo "<script language='javascript'>alert('Tên tài khoản đã được sử dụng!'); window.location='register.php';</script>";
		} else if (!$check_2) {
			echo "<script language='javascript'>alert('Email đã được sử dụng!'); window.location='register.php';</script>";
		} else {
			$password = md5($password);
			$sql = "INSERT INTO users (Username, Password, Email) VALUES ('$username', '$password', '$email')";
			// thực thi câu $sql với biến conn lấy từ file connect.php
			mysqli_query($conn, $sql);
			echo "<script language='javascript'>alert('Đăng ký thành công!'); window.location='register.php';</script>";
		}
	}

	// $result = $conn->query("SELECT * FROM users");

    // if ($result->num_rows > 0) {
    //   // output data of each row
    //   	while($row = $result->fetch_assoc()) {
    //     	echo "id: " . $row["ID"]. " - Name: " . $row["Username"]. " - Pass: " . $row["Password"]. "<br>";
    //   	}
    // } else {
    //   echo "0 results";
    // }
    $conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <link rel="stylesheet" type="text/css" href="./1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng ký thành viên</title>
    </head>
    <body>
        <div id="action_bar">
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
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" class="register">
            <div class="container">
                <div>
                    <label>Username: </label>
                    <input type="text" name="username" class="form-control">
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>                  
                <div>
                </div>
                    <label>Password: </label>
                    <input type="password" name="password" class="form-control">
                <div>
                    <label>Repassword: </label>
                    <input type="password" name="re_password" class="form-control">
                </div>
                    
                <div>
                </div>
                    <label>Email: </label>
                    <input type="email" name="email" class="form-control">
                <div>
                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                </div>   
            </div>                                                          
        </form>
    </body>
</html>
