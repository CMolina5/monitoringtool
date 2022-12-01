<?php
    session_start();
    if (empty($_SESSION["hei_uii"])) {
        header("Location:./index.php");
    }
    include_once 'includes/db_connection.php';
    include 'includes/final/inc_template.php';
    include 'includes/heiprofile/inc_template.php';
    include 'includes/stufap/inc_template.php';
    include 'includes/compliance/inc_template.php';
    include 'includes/experience/inc_template.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>UniFAST Monitoring Tool</title>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />   
   
</head>

<body id="review-form">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">AY 2021-2022</a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li role="presentation" class="nav-item mx-0 mx-lg-1"><a href="home.php" class="btn btn-primary btn-final" role="button" data-toggle="tooltip" type="button" title="Home"><i class="fas fa-home"></i></a></li>
                    <li role="presentation" class="nav-item mx-0 mx-lg-1"><a href="heiprofile.php" class="btn btn-primary btn-final" data-toggle="tooltip" type="button" title="Edit"><i class="far fa-edit"></i></a></li>
                    <li role="presentation" class="nav-item mx-0 mx-lg-1"><button class="btn btn-primary btn-final" data-toggle="tooltip" type="button" title="Save"><i class="far fa-save"></i></button></li>
                    <li role="presentation" class="nav-item mx-0 mx-lg-1"><button class="btn btn-primary btn-final" data-toggle="tooltip" type="button" title="Finalize"><i class="far fa-check-circle"></i></button></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--Academic Year, School Calendar and Programs-->
    <div class="contact-clean">
        <form id="hei-final">

                <?php
                echo "<iframe src='assets/pdf/". $_SESSION['hei_name'] . "-" . $_SESSION['ac_year'] . ".pdf' height='600px' width='100%'></iframe>"
                ?>
            
        </form>
    </div>

<?php
include 'includes/footer.php';
?>