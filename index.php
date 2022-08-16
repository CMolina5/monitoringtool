<?php
session_start();
include_once 'includes/db_connection.php'
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="icon" type="image/png" sizes="1024x1021" href="assets/img/UnifastLogo.png">
    <link rel="icon" type="image/png" sizes="1024x1021" href="assets/img/UnifastLogo.png">
    <link rel="icon" type="image/png" sizes="1024x1021" href="assets/img/UnifastLogo.png">
    <link rel="icon" type="image/png" sizes="1024x1021" href="assets/img/UnifastLogo.png">
    <link rel="icon" type="image/png" sizes="1024x1021" href="assets/img/UnifastLogo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Fillupform.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body id="page-top">
    <div class="contact-clean login">
        <form method="POST" action="includes/login/inc_login.php">
            <div class="card card-style-login">
                <div class="form-group text-center"><img class="img-fluid" src="assets/img/UnifastLogo.png" width="40%" height="40%"></div>
                <div class="form-group">
                    <h4 class="text-center">HEI MONITORING TOOL</h4>
                </div>
                <div class="form-group"><label>Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user icons-input"></i></span></div><input class="form-control" type="text" placeholder="Username" name="username"></div>
                </div>
                <div class="form-group"><label>Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-lock icons-input"></i></span></div><input class="form-control" type="password" placeholder="Password" name="password"></div>
                </div>
                <!--<div class="form-group text-center">
                    <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="formCheck-1"><label class="custom-control-label" for="formCheck-1">Show Password</label></div>
                </div>-->
                <div class="form-group frm-btn"><button class="btn btn-info btn-block" id="btn-login" type="submit" name="login">LOGIN</button></div>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>