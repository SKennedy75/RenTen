<!DOCTYPE html>
<!--Template Name: awesome-colourful-login
File Name: index.html
Author Name: ThemeVault
Author URI: http://www.themevault.net/
Licence URI: http://www.themevault.net/license/
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RenTen Login</title>
        <link rel="icon" href="images/renten.png"/>
        <link href="css/style.css" rel="stylesheet">
        <link href="fonts/stylesheet.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-3 col-xs-6 width-100">
                    <div class="title">
                        <h1>RenTen Login</h1>
                    </div>
                    <form action="#" method="post">
                        <div class="loginpage">
                            <input class="form-control placeholder-fix" type="text" placeholder="Username" name="uname" required="">
                            <input class="form-control placeholder-fix" type="password" placeholder="Password" name="password" required="">
                        </div>
                        <div class="action-button">
                            <button class="btn-block" type="submit">Login</button> 
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                </div>
                </div>
            </div>
        </div>
    </body>

</html>

<?php

require_once "F:\sk\userscall.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $user = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($check = $db->prepare("SELECT * FROM users WHERE username = ?")) {
        $check->blind_param('s', $user);
        $check->execute();
        $row = $check->fetch();
        if ($row) {
            if (password_verify($password, $row['password'])) {
                $_SESSION["userid"] = $row['id'];
                $_SESSION["user"] = $row;

                header("location: index2.php");
                exit;
            } else {
                $error = '<p class="error">The password is invalid.</p>';
            }
        } else {
            $error = '<p class="error">That username is invalid.</p>';
        }
        $check->close();
    }
    mysqli_close($db);
}
?>
