<?php
	include "connect.php";
	// header("location:register.php");
	$result = $conn->query("SELECT * FROM users");
    if (isset($_POST["submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
        $password = $_POST["password"];
        $re_password = $_POST["re_password"];
		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $re_password == "" || $email == "") {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
		} else if ($password != $re_password) {
			echo "Mật khẩu không trùng khớp";
		} else {
			$password = md5($password);
			$sql = "INSERT INTO users (Username, Password, Email) VALUES ('$username', '$password', '$email')";
			// // thực thi câu $sql với biến conn lấy từ file connect.php
			mysqli_query($conn, $sql);
			echo "<script language='javascript'>alert('Đăng ký thành công!'); window.location='register.php';</script>";
		}
	}

	// $result = $conn->query("SELECT * FROM user");

    // if ($result->num_rows > 0) {
    //   // output data of each row
    //   	while($row = $result->fetch_assoc()) {
    //     	echo "id: " . $row["ID"]. " - Name: " . $row["Username"]. " - Class: " . $row["Pass"]. "<br>";
    //   	}
    // } else {
    //   echo "0 results";
    // }
    $conn->close();
?>