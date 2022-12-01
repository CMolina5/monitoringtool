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

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#hei-profile-final">HEI PROFILE</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#stufap-all-final">unified stufap profile</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#hei-compliance-final">compliance to guidelines and moa</a></li>
                    <?php
                    if($_SESSION['ac_year']=='2022-2023'){
                        echo'<li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#hei-experience-final">unifast experience</a></li>';
                    }
                    
                    ?>

                </ul>
            </div>
        </div>
    </nav>

    <!--Academic Year, School Calendar and Programs-->
    <div class="contact-clean">
        <form id="hei-final">
        <?php
            echo "<iframe id='review-form' src='assets/pdf/". $_SESSION['hei_name'] . "-" . $_SESSION['ac_year'] . ".pdf'></iframe>"
        ?>
        </form>
    </div>

<?php
include 'includes/footer.php';
?>