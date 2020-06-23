<?php
	include 'connect.php';
    if (isset($_POST["submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
        $password = $_POST["password"];
        $re_password = $_POST["re_password"];
		$level = 0;
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $re_password == "") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
			$sql = "INSERT INTO users (Username, Pass, Muc) VALUES ('$username', '$password', '$level')";
			// // thực thi câu $sql với biến conn lấy từ file connect.php
			mysqli_query($conn, $sql);
			// echo "chúc mừng bạn đã đăng ký thành công";
		}
	}
	$result = $conn->query("SELECT * FROM user");

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["Username"]. " - Class: " . $row["Pass"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    // $conn->close();
?>