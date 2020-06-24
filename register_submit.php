<?php
	include "connect.php";
	// header("location:register.php");
    if (isset($_POST["submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
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