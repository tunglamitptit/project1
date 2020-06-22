<?php
    if (isset($_POST['submit'], $_POST['username'], $_POST['password'], $_POST['repassword'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $level = 0;
        if ($password != $repassword) {
            echo 'Mat khau khong trung khop';
        }
        $sql = "INSERT INTO user (Username, Password, Level) VALUE ($username)";
    }
    else {
        echo "<script>"."alert('Nhap lai')"."</script>";
        header('location: register.php');
    }
?>