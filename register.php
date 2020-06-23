<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <title>Đăng ký thành viên</title>
    </head>
    <body>
        <form action="register_submit.php" method="POST">
            <table>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Re_password: </td>
                    <td><input type="password" name="re_password"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Register</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>