<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
        <link rel="stylesheet" type="text/css" href="./1.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
        <form action="register_submit.php" method="POST" class="register">
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
                    <td>Email: </td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Register</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>