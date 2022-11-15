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
            <div class="card card-style-out">
                <div class="card card-style">
                    <div class="form-group"><label>Academic Year Covered</label>
                        <select name="ac_year" id="ac_year" class="form-control" disabled>
                            <optgroup>
                                <option 
                                <?php 
                                    if ($_SESSION['ac_year'] == "") {
                                        echo "selected";
                                    } 
                                ?>
                                disabled>--- Select Academic Year ---</option>
                                <option 
                                <?php 
                                    if ($_SESSION['ac_year'] == "2018-2019") {
                                        echo "selected";
                                    } 
                                ?>
                                value="2018-2019">2018-2019</option>
                                <option 
                                <?php 
                                    if ($_SESSION['ac_year'] == "2019-2020") {
                                        echo "selected";
                                    } 
                                ?>
                                value="2019-2020">2019-2020</option>
                                <option 
                                <?php 
                                    if ($_SESSION['ac_year'] == "2020-2021") {
                                        echo "selected";
                                    } 
                                ?>
                                value="2020-2021">2020-2021</option>
                                <option 
                                <?php 
                                    if ($_SESSION['ac_year'] == "2021-2022") {
                                        echo "selected";
                                    } 
                                ?>
                                value="2021-2022">2021-2022</option>
                                <option 
                                <?php 
                                    if ($_SESSION['ac_year'] == "2022-2023") {
                                        echo "selected";
                                    } 
                                ?>
                                value="2022-2023">2022-2023</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group"><label>Academic Calendar</label>
                        <div class="form-row">
                            <div class="col-12 col-md-3">
                                <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="semester" name="ac_calendar" 
                                <?php 
                                    if ($ac_calendar == "Semester") {
                                        echo "checked";
                                    } 
                                ?>
                                value="Semester" disabled><label class="custom-control-label" for="semester">Semester</label></div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="semwithsummer" name="ac_calendar" 
                                <?php 
                                    if ($ac_calendar == "Semester with Summer") {
                                        echo "checked";
                                    } 
                                ?>
                                value="Semester with Summer" disabled><label class="custom-control-label" for="semwithsummer">Semester with Summer</label></div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="trimester" name="ac_calendar" 
                                <?php 
                                    if ($ac_calendar == "Trimester") {
                                        echo "checked";
                                    } 
                                ?>
                                value="Trimester" disabled><label class="custom-control-label" for="trimester" va>Trimester</label></div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="trimesterwithsummer" name="ac_calendar" 
                                <?php 
                                    if ($ac_calendar == "Trimester with Summer") {
                                        echo "checked";
                                    } 
                                ?>
                                value="Trimester with Summer" disabled><label class="custom-control-label" for="trimesterwithsummer">Trimester with Summer</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><label>What type of RA No. 10931 beneficiaries does your institution have?&nbsp;</label>
                        <div class="form-row">
                            <div class="col-12 col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="hidden" id="" name="fhe" value="no" >
                                    <input class="custom-control-input" type="checkbox" id="fhe" name="fhe" 
                                    <?php 
                                        if ($fhe == "yes") {
                                            echo "checked";
                                        } 
                                    ?>
                                    value="yes" disabled>
                                    <label class="custom-control-label" for="fhe">Free Higher Education</label>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="hidden" id="" name="tes" value="no">
                                    <input class="custom-control-input" type="checkbox" id="tes" name="tes" 
                                    <?php 
                                        if ($tes == "yes") {
                                            echo "checked";
                                        } 
                                    ?>
                                    value="yes" disabled>
                                    <label class="custom-control-label" for="tes">Tertiary Education Subsidy</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="hidden" id="" name="tdp" value="no">
                                    <input class="custom-control-input" type="checkbox" id="tdp" name="tdp" 
                                    <?php 
                                        if ($tdp == "yes") {
                                            echo "checked";
                                        } 
                                    ?>
                                    value="yes" disabled>
                                    <label class="custom-control-label" for="tdp">Tulong Dunong Program</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--1st Part-->
        <form id="hei-profile-final">
            <div class="card card-style-out">
            <div class="card card-style-part">
            <h6 class="text-center header-1">PART I. HIGHER EDUCATION INSTITUTION PROFILE</h6>
            </div>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">I.A BASIC INFORMATION</label></div>
                <div class="form-group">
                    <label class="text-danger">*</label><label>&nbsp;Required Information</label><br>
                    <label>HEI Code/ Unique Institutional Identifier (UII)</label>
                    <input name="hei_uii" class="form-control" type="text" required="" value="<?php echo $_SESSION['hei_uii']; ?>" readonly>
                </div>
                <div class="form-group"><label>Name of Higher Education Institution (HEI)</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-school icons-input"></i></span></div><input name="hei_name" class="form-control" type="text" value="<?php echo utf8_encode($_SESSION['hei_name']); ?>" readonly>
                    </div>
                </div>
                <div class="form-group"><label>Type of HEI</label>
                    <div class="form-row">
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-4" name="typeofhei" 
                                <?php 
                                    if ($_SESSION['hei_it'] == "SUC") {
                                        echo "checked";
                                    } 
                                ?> value="SUC" disabled>
                                <label class="custom-control-label" for="formCheck-4">SUC</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-5" name="typeofhei" 
                                <?php 
                                    if ($_SESSION['hei_it'] == "LUC") {
                                        echo "checked";
                                    } 
                                ?> value="LUC" disabled>
                                <label class="custom-control-label" for="formCheck-5">LUC</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-123" name="typeofhei" 
                                <?php 
                                    if ($_SESSION['hei_it'] == "Private HEI") {
                                        echo "checked";
                                    }
                                ?> value="Private HEI" disabled>
                                <label class="custom-control-label" for="formCheck-123">Private HEI</label>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                if ($_SESSION['hei_it'] == "Private HEI" && $_SESSION['hei_pnsl'] == "1") {
                        echo"                   
                            <div class='form-group'><label>Is your Private HEI located in city/municipality with no SUC/LUC?</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-4'>
                                        <div class='custom-control custom-radio'>
                                            <input class='custom-control-input' type='radio' id='formCheck-70' name='pnsl' checked value='Private HEI' disabled>
                                            <label class='custom-control-label' for='formCheck-70'>Yes</label>
                                        </div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-4'>
                                        <div class='custom-control custom-radio'>
                                            <input class='custom-control-input' type='radio' id='formCheck-71' name='pnsl' value='Private HEI' disabled>
                                            <label class='custom-control-label' for='formCheck-71'>No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                }
                if ($_SESSION['hei_it'] == "Private HEI" && $_SESSION['hei_pnsl'] == "0") {
                    echo"                   
                        <div class='form-group'><label>Is your Private HEI located in city/municipality with no SUC/LUC?</label>
                            <div class='form-row'>
                                <div class='col-12 col-md-6 col-xl-4'>
                                    <div class='custom-control custom-radio'>
                                        <input class='custom-control-input' type='radio' id='formCheck-70' name='pnsl' value='Private HEI' disabled>
                                        <label class='custom-control-label' for='formCheck-70'>Yes</label>
                                    </div>
                                </div>
                                <div class='col-12 col-md-6 col-xl-4'>
                                    <div class='custom-control custom-radio'>
                                        <input class='custom-control-input' type='radio' id='formCheck-71' name='pnsl' checked value='Private HEI' disabled>
                                        <label class='custom-control-label' for='formCheck-71'>No</label>
                                    </div>
                                </div>
                            </div>
                        </div>";
                }
                ?>
                <div class="form-group"><label>HEI Campus</label>
                    <div class="form-row">
                        <div class="col-12 col-md-3">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-6" name="campustype" 
                                <?php 
                                    if ($_SESSION['hei_ct'] == "Main") {
                                        echo "checked";
                                    } 
                                ?> value="Main" disabled>
                                <label class="custom-control-label" for="formCheck-6">Main</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-7" name="campustype" 
                                <?php 
                                    if ($_SESSION['hei_ct'] == "Satellite") {
                                        echo "checked";
                                    } ?> value="Satellite" disabled>
                                <label class="custom-control-label" for="formCheck-7">Satellite</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-8" name="campustype" 
                                <?php 
                                    if ($_SESSION['hei_ct'] == "Private Sectarian") {
                                        echo "checked";
                                    } 
                                ?> value="Private Sectarian" disabled>
                                <label class="custom-control-label" for="formCheck-8">Private Sectarian</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" type="radio" id="formCheck-9" name="campustype" 
                                <?php 
                                    if ($_SESSION['hei_ct'] == "Private Non-Sectarian") {
                                        echo "checked";
                                    } 
                                ?> value="Private Non-Sectarian" disabled>
                                <label class="custom-control-label" for="formCheck-9">Private Non-Sectarian</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group"><label>HEI Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-map-marked-alt icons-input"></i></span></div><input name="hei_address" class="form-control" type="text" value="<?php echo utf8_encode($_SESSION['hei_address']); ?>" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label>Region</label>
                    <input name="hei_region_nir" class="form-control" type="text" required="" value="<?php echo $_SESSION['hei_region_nir']; ?>" readonly>
                </div>
                <div class="form-group">
                <label>Province</label>
                    <input name="hei_prov_name" class="form-control" type="text" required="" value="<?php echo utf8_encode($_SESSION['hei_prov_name']); ?>" readonly>
                </div>
                <div class="form-group"><label>Official Email Address</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons icons-input">email</i></span></div><input name="hei_email_add" class="form-control" type="email" value="<?php echo utf8_encode($hei_email) ?>" required="">
                        <div class="input-group-prepend"></div>
                    </div>
                </div>
                <div class="form-group"><label>Alternative Email Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons icons-input">email</i></span></div><input name="hei_alt_email_add" class="form-control" type="email" value="<?php echo $hei_alt_email ?>">
                        <div class="input-group-prepend"></div>
                    </div>
                </div>
                <div class="form-group"><label>Contact Number</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt icons-input"></i></span></div><input name="hei_contact_no" class="form-control" type="tel" pattern="^(09|\+639)\d{9}$" value="<?php echo $hei_contact_no ?>" required="" placeholder="Format: (09/+639)(9 digit phone number)">
                        <div class="input-group-prepend"></div>
                    </div>
                </div>
                <div class="form-group"><label>Alternative Contact Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt icons-input"></i></span></div><input name="hei_alt_contact_no" class="form-control" type="tel" pattern="^(09|\+639)\d{9}$" placeholder="Format: (09/+639)(9 digit phone number)" value="<?php echo $hei_alt_contact_no ?>" >
                        <div class="input-group-prepend"></div>
                    </div>
                </div>
            </div>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">I.B PROGRAM ADMINISTRATION</label></div>
                <div class="form-group"><label>Name of the Head of HEI</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user icons-input"></i></span></div><input name="hei_head_name" class="form-control" type="text" placeholder="Firstname   Middlename   Lastname" value="<?php echo utf8_encode($hei_head_name) ?>" required="">
                    </div>
                </div>
                <div class="form-group"><label>Full Designation</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-suitcase icons-input"></i></span></div><input name="hei_head_designation" class="form-control" type="text" value="<?php echo $hei_head_designation ?>" required="">
                    </div>
                </div>
                <div class="form-group"><label>Email Address</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons icons-input">email</i></span></div><input name="hei_head_email" class="form-control" type="email" value="<?php echo $hei_head_email_add ?>" required="">
                        <div class="input-group-prepend"></div>
                    </div>
                </div>
                <div class="form-group"><label>Alternative Email Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="material-icons icons-input">email</i></span></div><input name="hei_head_alt_email" class="form-control" type="email" value="<?php echo $hei_head_alt_email_add ?>">
                        <div class="input-group-prepend"></div>
                    </div>
                </div>
                <div class="form-group"><label>Contact Number</label><label class="text-danger" title="required">&nbsp;*</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt icons-input"></i></span></div><input name="hei_head_contact_no" class="form-control" type="tel" pattern="^(09|\+639)\d{9}$" value="<?php echo $hei_head_contact_no ?>" required="" placeholder="Format: (09/+639)(9 digit phone number)">
                        <div class="input-group-prepend"></div>
                    </div>
                </div>
                <div class="form-group"><label>Alternative Contact Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-phone-alt icons-input"></i></span></div><input name="hei_head_alt_contact_no" class="form-control" type="tel" pattern="^(09|\+639)\d{9}$" value="<?php echo $hei_head_alt_contact_no ?>" placeholder="Format: (09/+639)(9 digit phone number)">
                        <div class="input-group-prepend"></div>
                    </div>
                </div>
            </div>
            <?php
            if($fhe=='yes'){
                echo"<div class='card card-style'>
                <div class='form-group'><label>Name of Personnel In-charge of FHE</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-user icons-input'></i></span></div><input name='fhe_focal_name' class='form-control' type='text' placeholder='Firstname   Middlename   Lastname' value='".utf8_encode($fhe_focal_name)."' required=''>
                    </div>
                </div>
                <div class='form-group'><label>Full Designation</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-suitcase icons-input'></i></span></div><input name='fhe_focal_designation' class='form-control' type='text' value='$fhe_focal_designation'>
                    </div>
                </div>
                <div class='form-group'><label>Email Address</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='fhe_focal_email' class='form-control' type='email' value='$fhe_focal_email_add' required=''>
                        <div class='input-group-prepend'></div>
                    </div>
                </div>
                <div class='form-group'><label>Alternative Email Address</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='fhe_focal_alt_email' class='form-control' type='email' value='$fhe_focal_alt_email_add'>
                        <div class='input-group-prepend'></div>
                    </div>
                </div>
                <div class='form-group'><label>Contact Number</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='fhe_focal_contact_no' class='form-control' type='tel' pattern='^(09|\+639)\d{9}$' placeholder='Format: (09/+639)(9 digit phone number)' value='$fhe_focal_contact_no' required=''>
                        <div class='input-group-prepend'></div>
                    </div>
                </div>
                <div class='form-group'><label>Alternative Contact Number</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='fhe_focal_alt_contact_no' class='form-control' type='tel' pattern='^(09|\+639)\d{9}$' placeholder='Format: (09/+639)(9 digit phone number)' value='$fhe_focal_alt_contact_no'>
                        <div class='input-group-prepend'></div>
                    </div>
                </div>
                </div>";
            }
            if($tes=='yes'){
                echo"<div class='card card-style'>
                <div class='form-group'><label>Name of TES Focal Person</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-user icons-input'></i></span></div><input name='tes_focal_name' class='form-control' type='text' placeholder='Firstname   Middlename   Lastname' value='".utf8_encode($tes_focal_name)."' required=''>
                    </div>
                </div>
                <div class='form-group'><label>Full Designation</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-suitcase icons-input'></i></span></div><input name='tes_focal_designation' class='form-control' type='text' value='$tes_focal_designation' required=''>
                    </div>
                </div>
                <div class='form-group'><label>Email Address</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='tes_focal_email' class='form-control' type='email' value='$tes_focal_email_add' required=''>
                        <div class='input-group-prepend'></div>
                    </div>
                </div>
                <div class='form-group'><label>Alternative Email Address</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='tes_focal_alt_email' class='form-control' type='email' value='$tes_focal_alt_email_add'>
                        <div class='input-group-prepend'></div>
                    </div>
                </div>
                <div class='form-group'><label>Contact Number</label><label class='text-danger' title='required'>&nbsp;*</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='tes_focal_contact_no' class='form-control' type='tel' pattern='^(09|\+639)\d{9}$' placeholder='Format: (09/+639)(9 digit phone number)' value='$tes_focal_contact_no' required=''>
                        <div class='input-group-prepend'></div>
                    </div>
                </div>
                <div class='form-group'><label>Alternative Contact Number</label>
                    <div class='input-group'>
                        <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='tes_focal_alt_contact_no' class='form-control' type='tel' pattern='^(09|\+639)\d{9}$' placeholder='Format: (09/+639)(9 digit phone number)' value='$tes_focal_alt_contact_no'>
                        <div class='input-group-prepend'></div>
                    </div>
                </div>
                </div>";
            }
                if($tdp=='yes'){
                    echo"<div class='card card-style'>
                    <div class='form-group'><label>Name of Personnel In-charge of TDP</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-user icons-input'></i></span></div><input name='tdp_focal_name' class='form-control' type='text' placeholder='Firstname   Middlename   Lastname' value='".utf8_encode($tdp_focal_name)."' required=''>
                        </div>
                    </div>
                    <div class='form-group'><label>Full Designation</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-suitcase icons-input'></i></span></div><input name='tdp_focal_designation' class='form-control' type='text' value='$tdp_focal_designation' required=''>
                        </div>
                    </div>
                    <div class='form-group'><label>Email Address</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='tdp_focal_email' class='form-control' type='email' value='$tdp_focal_email_add' required=''>
                            <div class='input-group-prepend'></div>
                        </div>
                    </div>
                    <div class='form-group'><label>Alternative Email Address</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='material-icons icons-input'>email</i></span></div><input name='tdp_focal_alt_email' class='form-control' type='email' value='$tdp_focal_alt_email_add'>
                            <div class='input-group-prepend'></div>
                        </div>
                    </div>
                    <div class='form-group'><label>Contact Number</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='tdp_focal_contact_no' class='form-control' type='tel' pattern='^(09|\+639)\d{9}$' placeholder='Format: (09/+639)(9 digit phone number)' value='$tdp_focal_contact_no' required=''>
                            <div class='input-group-prepend'></div>
                        </div>
                    </div>
                    <div class='form-group'><label>Alternative Contact Number</label>
                        <div class='input-group'>
                            <div class='input-group-prepend'><span class='input-group-text'><i class='fas fa-phone-alt icons-input'></i></span></div><input name='tdp_focal_alt_contact_no' class='form-control' type='tel' pattern='^(09|\+639)\d{9}$' placeholder='Format: (09/+639)(9 digit phone number)' value='$tdp_focal_alt_contact_no'>
                            <div class='input-group-prepend'></div>
                        </div>
                    </div>
                </div>";
                }
            
            ?>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">I.C DEMOGRAPHIC INFORMATION</label></div>
                <div class="form-group"><label>Enrollment Period</label>
                    <div id='enrollment_date' class="form-row">
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                            <label>1st Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class="input-group"><div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fa fa-calendar-o"></i></span></div><input class="form-control date-size" id="picker" name="enrollment_1st" type="text" placeholder="MM/DD/YYYY-MM/DD/YYYY" value="<?php echo $enrollment_period_1st ?>" readonly required="">
                                
                            </div>
                        </div>
                        <script>
                            $('#picker').daterangepicker({
                                opens: 'left',
                                showDropdowns: true,
                                autoUpdateInput: false,
                                autoApply: true,
                                locale: {
                                    cancelLabel: 'Clear'
                                }
                            });
                            $('#picker').on('apply.daterangepicker', function(ev, picker) {
                                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                            });

                            $('#picker').on('cancel.daterangepicker', function(ev, picker) {
                                $(this).val('');
                            });
                        </script>
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                            <label>2nd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class="input-group"><div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fa fa-calendar-o"></i></span></div><input class="form-control date-size" id="picker2" name="enrollment_2nd" type="text" placeholder='MM/DD/YYYY-MM/DD/YYYY' value="<?php echo $enrollment_period_2nd ?>" readonly required="">
                            </div>
                        </div>
                        <script>
                            $('#picker2').daterangepicker({
                                opens: 'left',
                                showDropdowns: true,
                                autoUpdateInput: false,
                                autoApply: true,
                                locale: {
                                    cancelLabel: 'Clear'
                                }
                            });
                            $('#picker2').on('apply.daterangepicker', function(ev, picker) {
                                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                            });

                            $('#picker2').on('cancel.daterangepicker', function(ev, picker) {
                                $(this).val('');
                            });
                        </script>

                        <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                            <label>3rd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fa fa-calendar-o'></i></span></div><input class='form-control date-size' id='picker3' name='enrollment_3rd' type='text' placeholder='MM/DD/YYYY-MM/DD/YYYY' value='$enrollment_period_3rd' readonly required=''>
                            </div>
                        </div>
                        <script>
                            $('#picker3').daterangepicker({
                                opens: 'left',
                                showDropdowns: true,
                                autoUpdateInput: false,
                                autoApply: true,
                                locale: {
                                    cancelLabel: 'Clear'
                                }
                            });
                            $('#picker3').on('apply.daterangepicker', function(ev, picker) {
                                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                            });

                            $('#picker3').on('cancel.daterangepicker', function(ev, picker) {
                                $(this).val('');
                            });
                        </script>";
                        }
                        
                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                            <label>Summer/Midyear</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fa fa-calendar-o'></i></span></div><input class='form-control date-size' id='picker4' name='enrollment_summer_midyear' type='text' placeholder='MM/DD/YYYY-MM/DD/YYYY' value='$enrollment_period_summer_midyear' readonly required=''>
                            </div>
                        </div>
                        <script>
                            $('#picker4').daterangepicker({
                                opens: 'left',
                                showDropdowns: true,
                                autoUpdateInput: false,
                                autoApply: true,
                                locale: {
                                    cancelLabel: 'Clear'
                                }
                            });
                            $('#picker4').on('apply.daterangepicker', function(ev, picker) {
                                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                            });

                            $('#picker4').on('cancel.daterangepicker', function(ev, picker) {
                                $(this).val('');
                            });
                        </script>";
                        }
                        ?>

                    </div>
                </div>
                <div class="form-group"><label>Opening of Classes</label>
                    <div class="form-row">
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                            <label>1st Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class="input-group"><div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fa fa-calendar-o"></i></span></div><input class="form-control date-size" id="picker5" name="opening_1st" type="text" placeholder='MM/DD/YYYY' value="<?php echo  $opening_of_classes_1st ?>" readonly required="">
                            </div>
                            <script>
                                $('#picker5').daterangepicker({
                                    singleDatePicker: true,
                                    showDropdowns: true,
                                    autoUpdateInput: false,
                                    autoApply: true,
                                    locale: {
                                        cancelLabel: 'Clear'
                                    }
                                });
                                $('#picker5').on('apply.daterangepicker', function(ev, picker) {
                                    $(this).val(picker.startDate.format('MM/DD/YYYY'));
                                });

                                $('#picker5').on('cancel.daterangepicker', function(ev, picker) {
                                    $(this).val('');
                                });
                            </script>
                        </div>

                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                            <label>2nd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class="input-group"><div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fa fa-calendar-o"></i></span></div><input class="form-control date-size" id="picker6" name="opening_2nd" type="text" placeholder='MM/DD/YYYY' value="<?php echo  $opening_of_classes_2nd ?>" readonly required="">
                            </div>
                            <script>
                                $('#picker6').daterangepicker({
                                    singleDatePicker: true,
                                    showDropdowns: true,
                                    autoUpdateInput: false,
                                    autoApply: true,
                                    locale: {
                                        cancelLabel: 'Clear'
                                    }
                                });
                                $('#picker6').on('apply.daterangepicker', function(ev, picker) {
                                    $(this).val(picker.startDate.format('MM/DD/YYYY'));
                                });

                                $('#picker6').on('cancel.daterangepicker', function(ev, picker) {
                                    $(this).val('');
                                });
                            </script>
                        </div>

                        <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                            <label>3rd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fa fa-calendar-o'></i></span></div><input class='form-control date-size' id='picker7' name='opening_3rd' type='text' placeholder='MM/DD/YYYY' value='$opening_of_classes_3rd' readonly required=''>
                            </div>
                            <script>
                                $('#picker7').daterangepicker({
                                    singleDatePicker: true,
                                    showDropdowns: true,
                                    autoUpdateInput: false,
                                    autoApply: true,
                                    locale: {
                                        cancelLabel: 'Clear'
                                    }
                                });
                                $('#picker7').on('apply.daterangepicker', function(ev, picker) {
                                    $(this).val(picker.startDate.format('MM/DD/YYYY'));
                                });

                                $('#picker7').on('cancel.daterangepicker', function(ev, picker) {
                                    $(this).val('');
                                });
                            </script>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                            <label>Summer/Midyear</label><label class='text-danger' title='required'>&nbsp;*</label>
                            <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fa fa-calendar-o'></i></span></div><input class='form-control date-size' id='picker8' name='opening_summer_midyear' type='text' placeholder='MM/DD/YYYY' value='$opening_of_classes_summer_midyear' readonly required=''>   
                            </div>
                            <script>
                                $('#picker8').daterangepicker({
                                    singleDatePicker: true,
                                    showDropdowns: true,
                                    autoUpdateInput: false,
                                    autoApply: true,
                                    locale: {
                                        cancelLabel: 'Clear'
                                    }
                                });
                                $('#picker8').on('apply.daterangepicker', function(ev, picker) {
                                    $(this).val(picker.startDate.format('MM/DD/YYYY'));
                                });

                                $('#picker8').on('cancel.daterangepicker', function(ev, picker) {
                                    $(this).val('');
                                });
                            </script>                           
                        </div>";
                    }
                        ?>
                    </div>
                </div>
                <hr/>
                <!-- Male Undergraduate -->
                <div class="form-group"><label>Total Number of Undergraduate Students</label>
                    <div class="form-row">
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                        <label>1st Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class="input-group"><div class="input-group-prepend"><span class="input-group-text icon-container"><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_undergrad_1st_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_undergraduate_1st_male ?>" required="" min="0">
                        </div>
                    </div>
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                        <label>2nd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class="input-group"><div class="input-group-prepend"><span class="input-group-text icon-container"><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_undergrad_2nd_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_undergraduate_2nd_male ?>" required="" min="0">
                        </div>
                    </div>

                        <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <label>3rd Term</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_undergrad_3rd_male' class='form-control' type='number' placeholder='0' value='$total_undergraduate_3rd_male' required='' min='0'>
                        </div>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <label>Summer/Midyear</label><label class='text-danger' title='required'>&nbsp;*</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_undergrad_summer_midyear_male' class='form-control' type='number' placeholder='0' value='$total_undergraduate_summer_midyear_male' required='' min='0'>
                        </div>
                        </div>";
                        }
                        ?>

                    </div>
                </div>
                <!-- Female Undergraduate -->
                    <div class="form-row">
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                       <div class="input-group"><div class="input-group-prepend"><span class="input-group-text icon-container"><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_undergrad_1st_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_undergraduate_1st_female ?>" required="" min="0">
                        </div>
                    </div>
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                        <div class="input-group"><div class="input-group-prepend"><span class="input-group-text icon-container"><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_undergrad_2nd_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_undergraduate_1st_female ?>" required="" min="0">
                        </div>
                    </div>

                        <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_undergrad_3rd_female' class='form-control' type='number' placeholder='0' value='$total_undergraduate_3rd_female' required='' min='0'>
                        </div>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_undergrad_summer_midyear_female' class='form-control' type='number' placeholder='0' value='$total_undergraduate_summer_midyear_female' required='' min='0'>
                        </div>
                        </div>";
                        }
                        ?>

                    </div>
                    <hr/>
                <!-- Male Foreign -->
                <div class="form-group"><label>Total Number of Foreign Students</label>
                    <div class="form-row">
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                        <label>1st Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_foreign_1st_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_foreign_1st_male ?>" min="0">
                        </div>
                    </div>    
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>    
                        <label>2nd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_foreign_2nd_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_foreign_2nd_male ?>" min="0">
                        </div>
                    </div>


                        <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <label>3rd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_foreign_3rd_male' class='form-control' type='number' placeholder='0' value='$total_foreign_3rd_male' min='0'>
                        </div>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <label>Summer/Midyear</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_foreign_summer_midyear_male' class='form-control' type='number' placeholder='0' value='$total_foreign_summer_midyear_male' min='0'>
                        </div>
                        </div>";
                        }
                        ?>
                    </div>
                </div>
                <!-- Female Foreign -->
                <div class="form-group">
                    <div class="form-row">
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_foreign_1st_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_foreign_1st_female ?>" min="0">
                        </div>
                    </div>
                        
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>    
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_foreign_2nd_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_foreign_2nd_female ?>" min="0">
                    </div>
                    </div>

                        <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_foreign_3rd_female' class='form-control' type='number' placeholder='0' value='$total_foreign_3rd_female' min='0'></div>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_foreign_summer_midyear_female' class='form-control' type='number' placeholder='0' value='$total_foreign_summer_midyear_female' min='0'>
                        </div>
                        </div>";
                        }
                        ?>
                    </div>
                </div>
                <hr/>
                <!-- Male Second Coursers -->
                <div class="form-group"><label>Total Number of Second Coursers</label>
                    <div class="form-row">

                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>        
                        <label>1st Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_2nd_courser_1st_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_second_courser_1st_male ?>" min="0">
                        </div>
                        </div>
                        
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>            
                        <label>2nd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name="total_2nd_courser_2nd_male" class="form-control" type="number" placeholder="0" value="<?php echo  $total_second_courser_2nd_male ?>" min="0">
                        </div>
                    </div>

                    <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                            echo"
                            <div class='col-12 col-md-3'>";
                            }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                echo"
                                <div class='col-12 col-md-4'>";
                            }else
                            echo"
                            <div class='col-12 col-md-3 col-xl-6'>";
                        
                        echo"
                        <label>3rd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_2nd_courser_3rd_male' class='form-control' type='number' placeholder='0' value='$total_second_courser_3rd_male' min='0'>
                        </div>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <label>Summer/Midyear</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input name='total_2nd_courser_summer_midyear_male' class='form-control' type='number' placeholder='0' value='$total_second_courser_summer_midyear_male' min='0'>
                        </div>
                        </div>";
                        }
                        ?>
                    </div>
                </div>
                <!-- Female Second Coursers -->
                <div class="form-group">
                    <div class="form-row">

                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>        
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_2nd_courser_1st_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_second_courser_1st_female ?>" min="0">
                        </div>
                    </div>
                  
                        
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    ?>            
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name="total_2nd_courser_2nd_female" class="form-control" type="number" placeholder="0" value="<?php echo  $total_second_courser_2nd_female ?>" min="0">
                        </div>
                    </div>

                    <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                            echo"
                            <div class='col-12 col-md-3'>";
                            }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                echo"
                                <div class='col-12 col-md-4'>";
                            }else
                            echo"
                            <div class='col-12 col-md-3 col-xl-6'>";
                        
                        echo"
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_2nd_courser_3rd_female' class='form-control' type='number' placeholder='0' value='$total_second_courser_3rd_female' min='0'>
                        </div>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input name='total_2nd_courser_summer_midyear_female' class='form-control' type='number' placeholder='0' value='$total_second_courser_summer_midyear_female' min='0'>
                        </div>
                        </div>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">I.D PROGRAM OFFERINGS</label><label style="font-style: italic;">Please list all bachelor's degree programs offered for the Academic Year. Indicate the Government Recognition and Certificate of Program Compliance Nos. for each program.</label>
                    
                    <div class="form-row text-right">
                    <div class="col">
                    <p class="text-right">
                        <div role="group" class="btn-group">
                            <button class="btn btn-success" data-toggle="modal" id="btn-add-program" type="button" data-target="#addprogram">ADD PROGRAM</button>
                            <button class="btn btn-danger d-none" data-toggle="modal" id="btn-delete-program" name="btn-delete-program" type="button" data-target="#removeprogram">REMOVE PROGRAM</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id="tbl_programs" class="table table-responsive tbl-style">
                        
                                <?php
                                include 'includes/heiprofile/inc_degree_programs.php';
                                ?>
                            
                    </div>
                </div>
            </div>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">I.E OTHER LOCALLY-AND-NATIONALLY-FUNDED STUFAPS</label><label style="font-style: italic;">List of all locally-and-nationally-funded StuFAPs availed in the institution, and number of beneficiaries per year level</label>

                    <div class="form-row text-right">
                    <div class="col">
                    <p class="text-right">
                        <div role="group" class="btn-group">
                            <button class="btn btn-success" data-toggle="modal" id="btn-add-stufap" type="button" data-target="#addstufap">ADD STUFAP</button>
                            <button class="btn btn-danger d-none" data-toggle="modal" id="btn-delete-other-stufap" name="btn-delete-other-stufap" type="button" data-target="#removestufap">REMOVE STUFAP</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id="tbl_stufaps" class="table table-responsive tbl-style">
                        
                                <?php
                                include 'includes/heiprofile/inc_other_stufaps.php';
                                ?>
                            
                    </div>
                </div>
            </div>
            <?php
            if($form_status=='ongoing' OR $form_status=='Saved'){
                echo'<div class="card card-style">
                    <div class="form-group text-right"><a class="btn btn-info" role="button" id="btn-next" href="heiprofile.php">EDIT</a></div>
                </div>';
            }
                ?>
            </div>
        </form>

        <!--2nd Part-->
        <form id="stufap-all-final">
        <div class="card card-style-part-2">
            <div class="card card-style-part-stufap">
            <h6 class="text-center header-1"><strong>PART II. UNIFIED STUFAP PROFILE</strong><br></h6>
            </div>
        </div>
        <?php
        if($fhe=='yes'){
            echo"
            <div class='card card-style-out'>
            <div class='card card-style-table'>
                <div class='form-group'><label class='label-parts'>II.A FREE HIGHER EDUCATION</label></div>
                <div class='form-group'>
                    <div id='tbl_programs_fhe_div' class='table table-responsive tbl-style'>";
                        
                        include 'includes/stufap/inc_fhe_programs_table.php';
                        
                    echo"
                    </div>
                </div>
            </div>
            <div class='card card-style-table'>
                <div class='form-group'>

                    <div class='form-row text-right'>
                    <div class='col'>
                    <p class='text-right'>
                        <div role='group' class='btn-group'>
                        <button class='btn btn-success' id='btn-add-fhe-category' type='button' data-toggle='modal' data-target='#add_fhe_category_modal'>ADD FHE CATEGORY</button>
                            <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-fhe-category' name='btn-delete-fhe-category' type='button' data-target='#remove_fhe_category_modal'>REMOVE CATEGORY</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id='tbl_fhe_category_div' class='table table-responsive tbl-style'>";
                
                        include 'includes/stufap/inc_fhe_category_table.php';
            
                    echo"</div>
                 </div>
            </div>
            <div class='card card-style-table'>
                <div class='form-group'><label>No. of FHE Beneficiaries Who Opted Out of FHE</label>
                    <div class='form-row'>";

                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    
                    echo"
                        <label>1st Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id='total_fhe_opt_out_1st_male' name='total_fhe_opt_out_1st_male' class='form-control' type='number' value='$total_fhe_opt_out_1st_male' min='0'>
                        </div></div>";
                    
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    echo"
                        <label>2nd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id='total_fhe_opt_out_2nd_male' name='total_fhe_opt_out_2nd_male' class='form-control' type='number' value='$total_fhe_opt_out_2nd_male' min='0'>
                        </div>
                        </div>";
                    
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <label>3rd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id='total_fhe_opt_out_3rd_male' name='total_fhe_opt_out_3rd_male' class='form-control' type='number' value='$total_fhe_opt_out_3rd_male' min='0'>
                        </div>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <label>Summer/Midyear</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id='total_fhe_opt_out_summer_midyear_male' name='total_fhe_opt_out_summer_midyear_male' class='form-control' type='number' value='$total_fhe_opt_out_summer_midyear_male' min='0'>
                        </div>
                        </div>";
                        }
                echo"
                    </div>
                </div>

                <div class='form-group'>
                <div class='form-row'>";

                    if( $ac_calendar=='Trimester with Summer'){
                    echo"
                    <div class='col-12 col-md-3'>";
                    }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                        echo"
                        <div class='col-12 col-md-4'>";
                    }else
                    echo"
                    <div class='col-12 col-md-3 col-xl-6'>";
                
                echo"
                    <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input id='total_fhe_opt_out_1st_female' name='total_fhe_opt_out_1st_female' class='form-control' type='number' value='$total_fhe_opt_out_1st_female' min='0'>
                    </div></div>";
                
                    if( $ac_calendar=='Trimester with Summer'){
                    echo"
                    <div class='col-12 col-md-3'>";
                    }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                        echo"
                        <div class='col-12 col-md-4'>";
                    }else
                    echo"
                    <div class='col-12 col-md-3 col-xl-6'>";
                echo"
                    <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input id='total_fhe_opt_out_2nd_female' name='total_fhe_opt_out_2nd_female' class='form-control' type='number' value='$total_fhe_opt_out_2nd_female' min='0'>
                    </div>
                    </div>";
                
                    if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                        if( $ac_calendar=='Trimester with Summer'){
                            echo"
                            <div class='col-12 col-md-3'>";
                            }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                echo"
                                <div class='col-12 col-md-4'>";
                            }else
                            echo"
                            <div class='col-12 col-md-3 col-xl-6'>";
                    echo"
                    <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input id='total_fhe_opt_out_3rd_female' name='total_fhe_opt_out_3rd_female' class='form-control' type='number' value='$total_fhe_opt_out_3rd_female' min='0'>
                    </div>
                    </div>";
                    }

                    if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                        if( $ac_calendar=='Trimester with Summer'){
                            echo"
                            <div class='col-12 col-md-3'>";
                            }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                echo"
                                <div class='col-12 col-md-4'>";
                            }else
                            echo"
                            <div class='col-12 col-md-3 col-xl-6'>";
                    echo"
                    <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input id='total_fhe_opt_out_summer_midyear_female' name='total_fhe_opt_out_summer_midyear_female' class='form-control' type='number' value='$total_fhe_opt_out_summer_midyear_female' min='0'>
                    </div>
                    </div>";
                    }
            echo"
                </div>
            </div>
                
                <div class='form-group'><label>No. of FHE Beneficiaries Who Voluntarily Contributed for FHE</label>
                    <div class='form-row'>";
                    
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    echo"
                        <label>1st Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id='total_fhe_vol_cont_1st_male' name='total_fhe_vol_cont_1st_male' class='form-control' type='number' value='$total_fhe_vol_cont_1st_male' min='0'>
                        </div>
                        </div>";
                    
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    echo"
                        <label>2nd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id='total_fhe_vol_cont_2nd_male' name='total_fhe_vol_cont_2nd_male' class='form-control' type='number' value='$total_fhe_vol_cont_2nd_male' min='0'>
                        </div>
                        </div>";
                    
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <label>3rd Term</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id='total_fhe_vol_cont_3rd_male' name='total_fhe_vol_cont_3rd_male' class='form-control' type='number' value='$total_fhe_vol_cont_3rd_male' min='0'>
                        </div>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <label>Summer/Midyear</label>
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id='total_fhe_vol_cont_summer_midyear_male' name='total_fhe_vol_cont_summer_midyear_male' class='form-control' type='number' value='$total_fhe_vol_cont_summer_midyear_male' min='0'>
                        </div>
                        </div>";
                        }

                    echo"</div>
                </div>
                <div class='form-group'>
                    <div class='form-row'>";
                    
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    echo"
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input id='total_fhe_vol_cont_1st_female' name='total_fhe_vol_cont_1st_female' class='form-control' type='number' value='$total_fhe_vol_cont_1st_female' min='0'>
                    </div>
                        </div>";
                    
                        if( $ac_calendar=='Trimester with Summer'){
                        echo"
                        <div class='col-12 col-md-3'>";
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo"
                            <div class='col-12 col-md-4'>";
                        }else
                        echo"
                        <div class='col-12 col-md-3 col-xl-6'>";
                    echo"
                        
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input id='total_fhe_vol_cont_2nd_female' name='total_fhe_vol_cont_2nd_female' class='form-control' type='number' value='$total_fhe_vol_cont_2nd_female' min='0'>
                    </div>
                        </div>";
                    
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input id='total_fhe_vol_cont_3rd_female' name='total_fhe_vol_cont_3rd_female' class='form-control' type='number' value='$total_fhe_vol_cont_3rd_female' min='0'>
                    </div>
                        </div>";
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo"
                                <div class='col-12 col-md-3'>";
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo"
                                    <div class='col-12 col-md-4'>";
                                }else
                                echo"
                                <div class='col-12 col-md-3 col-xl-6'>";
                        echo"
                        <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input id='total_fhe_vol_cont_summer_midyear_female' name='total_fhe_vol_cont_summer_midyear_female' class='form-control' type='number' value='$total_fhe_vol_cont_summer_midyear_female' min='0'>
                    </div>
                        </div>";
                        }

                    echo"</div>
                </div>
            </div>

            <div class='card card-style-table'>
                    <div class='form-group'>
                        <div class='form-row'>
                            <div class='col-12 col-md-3 col-xl-6'>
                                <div class='custom-control custom-checkbox'>
                                    <input class='custom-control-input fhe_dropouts' type='checkbox' id='fhe_dropouts' name='fhe_dropouts'";
                                    
                                    if($program=='FHE'){
                                        echo"checked disabled";
                                    }

                                    echo"><label class='custom-control-label' for='fhe_dropouts'>With students who dropped out under Free Higher Education?</label>
                                </div>
                            </div>

                            <div class='col-12 col-md-3 col-xl-6'>
                                <div class='custom-control custom-checkbox'>
                                    <input class='custom-control-input fhe_loa' type='checkbox' id='fhe_loa' name='fhe_loa'";
                                    
                                    if($program4=='FHE'){
                                        echo"checked disabled";
                                    }

                                    echo"><label class='custom-control-label' for='fhe_loa'>With students who filed LOA under Free Higher Education?</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            
            <div id='fhe_dropouts_div' class='card card-style-table fhe_dropouts_div' style='display : none'>
                <div class='form-group'>
                <label>No. of FHE Beneficiaries Who Dropped</label><label style='font-style: italic;'>Determine the no. of dropouts per semester/term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label>
                </div>
                <div class='form-group'>

                    <div class='form-row text-right'>
                    <div class='col'>
                    <p class='text-right'>
                        <div role='group' class='btn-group'>
                        <button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_dropouts_fhe'>Add reason for dropping</button>
                            <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-fhe-dropouts' name='btn-delete-fhe-dropouts' type='button' data-target='#remove_fhe_dropouts_modal'>REMOVE DROP OUTS</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id='tbl_fhe_dropouts_div' class='table table-responsive tbl-style'>";
                        
                        include 'includes/stufap/inc_fhe_dropouts.php';
                    
                    echo"</div>
                </div>
            </div>

            <div id='fhe_loa_div' class='card card-style-table fhe_loa_div' style='display : none'>
                <div class='form-group'>
                <label>No. of FHE Beneficiaries under LOA</label><label style='font-style: italic;'>Determine the no. of with loa per semester/term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label>
                </div>
                <div class='form-group'>
                   
                    <div class='form-row text-right'>
                    <div class='col'>
                    <p class='text-right'>
                        <div role='group' class='btn-group'>
                            <button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_loa_fhe'>Add reason for loa</button>
                            <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-fhe-loa' name='btn-delete-fhe-loa' type='button' data-target='#remove_fhe_loa_modal'>REMOVE LOA</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id='tbl_fhe_loa_div' class='table table-responsive tbl-style'>";
                        
                        include 'includes/stufap/inc_fhe_loa.php';
                    
                    echo"</div>
                </div>
            </div>
            
        </div>";
        }
        ?>

        <?php
        if($tes=='yes'){
        echo"<div class='card card-style-out'>
            <div class='card card-style-table'>
                <div class='form-group'>
                <label class='label-parts'>II.B TERTIARY EDUCATION SUBSIDY</label>
                </div>
                <div class='form-group'>
                <label>Total No. of TES Applicants</label>
                <div class='form-row'>
                <div class='col-12 col-md-6 col-xl-6'>
                <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-male' style='font-size:20px; color:#1a5676'></i></span></div><input id='total_tes_applicant_male' name='total_tes_applicant_male' class='form-control' type='number' min='0' value='$total_tes_applicant_male'>
                </div>
                </div>
                <div class='col-12 col-md-6 col-xl-6'>
                <div class='input-group'><div class='input-group-prepend'><span class='input-group-text icon-container'><i class='fas fa-female' style='font-size:20px; color:#9a0694'></i></span></div><input id='total_tes_applicant_female' name='total_tes_applicant_female' class='form-control' type='number' min='0' value='$total_tes_applicant_female'>
                </div>
                </div>
                </div>
                </div>
                <div class='form-group'>

                    <div class='form-row text-right'>
                    <div class='col'>
                    <p class='text-right'>
                        <div role='group' class='btn-group'>
                        <button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_tes_category_modal'>ADD TES CATEGORY</button>
                            <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-tes-category' name='btn-delete-tes-category' type='button' data-target='#remove_tes_category_modal'>REMOVE CATEGORY</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id='tbl_tes_category_div' class='table table-responsive tbl-style'>";
                        
                        include 'includes/stufap/inc_tes_category_table.php';
                    
                    echo"</div>
                </div>
            </div>
            <div class='card card-style-table'>

                <div class='form-row text-right'>
                <div class='col'>
                <p class='text-right'>
                    <div role='group' class='btn-group'>
                        <button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_program_tes_modal'>ADD PROGRAM</button>
                        <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-tes-programs' name='btn-delete-tes-programs' type='button' data-target='#remove_tes_program_modal'>REMOVE DEGREE PROGRAM</button>
                    </div>
                </p>
                </div>
                </div>

                <div class='form-group'>
                    <div id='tbl_programs_tes_div' class='table table-responsive tbl-style'>";
                        
                        include 'includes/stufap/inc_tes_programs_table.php';
                    
                    echo"</div>
                </div>
            </div>
            <div class='card card-style-table'>
                    <div class='form-group'>
                        <div class='form-row'>
                            <div class='col-12 col-md-3 col-xl-6'>
                                <div class='custom-control custom-checkbox'>
                                    <input class='custom-control-input tes_dropouts' type='checkbox' id='tes_dropouts' name='tes_dropouts'";
                                    
                                    if($program2=='TES'){
                                        echo"checked disabled";
                                    }

                                    echo"><label class='custom-control-label' for='tes_dropouts'>With students who dropped out under Tertiary Education Subsidy?</label>
                                </div>
                            </div>
                            <div class='col-12 col-md-3 col-xl-6'>
                                <div class='custom-control custom-checkbox'>
                                    <input class='custom-control-input tes_loa' type='checkbox' id='tes_loa' name='tes_loa'";
                                    
                                    if($program5=='TES'){
                                        echo"checked disabled";
                                    }

                                    echo"><label class='custom-control-label' for='tes_loa'>With students who filed LOA under Tertiary Education Subsidy?</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>";
            echo"<div id='tes_dropouts_div' class='card card-style-table tes_dropouts_div' style='display : none'><label>Total No. TES Grantees Who Dropped</label>
                <div class='form-group'><label style='font-style: italic;'>Determine the no. of dropouts per semester/ term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label></div>
                <div class='form-group'>

                    <div class='form-row text-right'>
                    <div class='col'>
                    <p class='text-right'>
                        <div role='group' class='btn-group'>
                            <button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_dropouts_tes_modal'>ADD REASON FOR DROPPING</button>
                            <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-tes-dropouts' name='btn-delete-tes-dropouts' type='button' data-target='#remove_tes_dropouts_modal'>REMOVE DROP OUTS</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id='tbl_tes_dropouts_div' class='table table-responsive tbl-style'>";
                        
                        include 'includes/stufap/inc_tes_dropouts.php';
                    
                    echo"</div>
                </div>
            </div>

            <div id='tes_loa_div' class='card card-style-table tes_loa_div' style='display : none'>
                <div class='form-group'>
                <label>No. of TES Grantees under LOA</label><label style='font-style: italic;'>Determine the no. of with loa per semester/term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label>
                </div>
                <div class='form-group'>

                    <div class='form-row text-right'>
                    <div class='col'>
                    <p class='text-right'>
                        <div role='group' class='btn-group'>
                            <button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_loa_tes'>ADD REASON FOR LOA</button>
                            <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-tes-loa' name='btn-delete-tes-loa' type='button' data-target='#remove_tes_loa_modal'>REMOVE DROP OUTS</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id='tbl_tes_loa_div' class='table table-responsive tbl-style'>";
                        
                        include 'includes/stufap/inc_tes_loa.php';
                    
                    echo"</div>
                </div>
            </div>
            
        </div>";
        }
        ?>

        <?php
        if($tdp=='yes'){
        echo"<div class='card card-style-out'>
            <div class='card card-style-table'>
                <div class='form-group'><label class='label-parts'>II.C TULONG DUNONG PROGRAM</label></div>
                <div class='form-group'>

                    <div class='form-row text-right'>
                    <div class='col'>
                    <p class='text-right'>
                        <div role='group' class='btn-group'>
                            <button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_program_tdp_modal'>ADD program</button>
                            <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-tdp-programs' name='btn-delete-tdp-programs' type='button' data-target='#remove_tdp_program_modal'>REMOVE DEGREE PROGRAM</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id='tbl_programs_tdp_div' class='table table-responsive tbl-style'>";
                     
                        include "includes/stufap/inc_tdp_programs_table.php";
            
                    echo"</div>
                </div>
            </div>
            <div class='card card-style-table'>
                <div class='form-group'>
                <div class='form-row'>
                    <div class='col-12 col-md-3 col-xl-6'>
                        <div class='custom-control custom-checkbox'>
                            <input class='custom-control-input tdp_dropouts' type='checkbox' id='tdp_dropouts' name='tdp_dropouts'";
                            
                            if($program3=='TDP'){
                                echo"checked disabled";
                            }

                            echo"><label class='custom-control-label' for='tdp_dropouts'>With students who dropped out under Tulong Dunong Program?</label>
                        </div>
                    </div>

                    <div class='col-12 col-md-3 col-xl-6'>
                        <div class='custom-control custom-checkbox'>
                            <input class='custom-control-input tdp_loa' type='checkbox' id='tdp_loa' name='tdp_loa'";
                            
                            if($program6=='TDP'){
                                echo"checked disabled";
                            }

                            echo"><label class='custom-control-label' for='tdp_loa'>With students who filed LOA under Tulong Dunong Program?</label>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div id='tdp_dropouts_div' class='card card-style-table tdp_dropouts_div' style='display : none'>
                <div class='form-group'><label>Total No. TDP Grantees Who Dropped</label><label style='font-style: italic;'>Determine the no. of dropouts per semester/ term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label></div>
                <div class='form-group'>

                    <div class='form-row text-right'>
                    <div class='col'>
                    <p class='text-right'>
                        <div role='group' class='btn-group'>
                            <button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_dropouts_tdp_modal'>ADD REASON FOR DROPPING</button>
                            <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-tdp-dropouts' name='btn-delete-tdp-dropouts' type='button' data-target='#remove_tdp_dropouts_modal'>REMOVE DROP OUTS</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id='tbl_tdp_dropouts_div' class='table table-responsive tbl-style'>";
                        
                            include 'includes/stufap/inc_tdp_dropouts.php';
                        
                    echo"</div>
                </div>
            </div>

            <div id='tdp_loa_div' class='card card-style-table tdp_loa_div' style='display : none'>
                <div class='form-group'>
                <label>No. of TDP Grantees under LOA</label><label style='font-style: italic;'>Determine the no. of with loa per semester/term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label>
                </div>
                <div class='form-group'>
                
                    <div class='form-row text-right'>
                    <div class='col'>
                    <p class='text-right'>
                        <div role='group' class='btn-group'>
                            <button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_loa_tdp'>ADD REASON FOR LOA</button>
                            <button class='btn btn-danger d-none' data-toggle='modal' id='btn-delete-tdp-loa' name='btn-delete-tdp-loa' type='button' data-target='#remove_tdp_loa_modal'>REMOVE DROP OUTS</button>
                        </div>
                    </p>
                    </div>
                    </div>

                    <div id='tbl_tdp_loa_div' class='table table-responsive tbl-style'>";
                        
                        include 'includes/stufap/inc_tdp_loa.php';
                    
                    echo"</div>
                </div>
            </div>

        </div>";
        }
        ?>
            <?php
            if($form_status=='ongoing' OR $form_status=='Saved'){
                echo'<div class="card card-style-out">
                        <div class="card card-style-table">
                            <div class="form-group text-right">
                                <a class="btn btn-info" role="button" id="btn-next" href="stufap-all.php">EDIT</a>
                            </div>
                        </div>
                </div>';
            }
            ?>
        </form>
        <!--3rd Part-->
        <?php
            $cnt = 1;
        ?>
        <form id="hei-compliance-final">
            <div class="card card-style-out">
            <div class="card card-style-part">
            <h6 class="text-center header-1">PART III. COMPLIANCE TO GUIDELINES AND MOA</h6>
            </div>
            <div class="card card-style">
                <div class="form-group"><label class="label-parts">III.A COMPLIANCE TO THE FHE, TES AND TDP GUIDELINES, AND THE MOA BETWEEN CHED, UNIFAST AND HEI</label></div>
                <div class="form-group"><label style="font-style: italic;">The HEI certifies its compliance/noncompliance with the following information:</label></div>
                <div class="form-group">
                    <ul class="list-group list-group-numbered">
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Conducted orientation to students about FHE, TES, and/or TDP</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-1" name="answer" 
                                        <?php 
                                            if ($question_1 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-1">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-2" name="answer" 
                                        <?php 
                                            if ($question_1 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-2">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Provided guidance and financial counseling programs to the qualified enrolled students to enable them to avail of FHE, TES, and/or TDP</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-3" name="answer1" 
                                        <?php 
                                            if ($question_2 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-3">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-4" name="answer1" 
                                        <?php 
                                            if ($question_2 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-4">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Submitted to the UniFAST the Certification of Tuition and Other School Fees (TOSF) signed by the HEI Head (if applicable)</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-5" name="answer2" 
                                        <?php 
                                            if ($question_3 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-5">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-6" name="answer2" 
                                        <?php 
                                            if ($question_3 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-6">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Maintained a bank account intended only for FHE, TES, and/or TDP</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-7" name="answer3" 
                                        <?php 
                                            if ($question_4 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-7">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-8" name="answer3" 
                                        <?php 
                                            if ($question_4 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-8">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Issued an official receipt for every amount received from CHED concerning FHE, TES, and/or TDP</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-9" name="answer4" 
                                        <?php 
                                            if ($question_5 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-9">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-10" name="answer4" 
                                        <?php 
                                            if ($question_5 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-10">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Reverted to CHED excess fund transfer (if applicable)</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-11" name="answer5" 
                                        <?php 
                                            if ($question_6 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-11">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-12" name="answer5" 
                                        <?php 
                                            if ($question_6 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-12">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-white">
                            <div class="form-group"><label><?php echo"".$cnt++."" ?>. Submitted reports on time regarding the implementation of FHE, TES, and/or TDP as required </label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-13" name="answer6" 
                                        <?php 
                                            if ($question_7 == "Yes") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="Yes" required=""><label class="custom-control-label" for="formCheck-13">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-14" name="answer6" 
                                        <?php 
                                            if ($question_7 == "No") {
                                                echo "checked";
                                            } 
                                        ?>
                                        value="No" required=""><label class="custom-control-label" for="formCheck-14">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    <?php
                        if($fhe=='yes'){
                            echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt++.". Submitted to the UniFAST the list of qualified students and FHE beneficiaries on time</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-15' name='answer7'"; 
                                         
                                            if ($question_8 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-15'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-16' name='answer7'"; 
                                         
                                            if ($question_8 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-16'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                        

                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt++.". Implemented a voluntary opt-out and/or voluntary contribution mechanism for FHE</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-17' name='answer8'"; 
                                        
                                            if ($question_9 == 'Yes') {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-17'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-18' name='answer8'"; 
                                         
                                            if ($question_9 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-18'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted to the UniFAST the list of students who voluntarily opted out from FHE (if applicable)</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-19" name="answer9"'; 
                                        
                                            if ($question_10 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-19">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-20" name="answer9"'; 
                                         
                                            if ($question_10 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-20">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                     }
                    if($_SESSION['hei_it']=='SUC' OR $_SESSION['hei_it']=='LUC'){
                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted to the UniFAST the list of students who voluntarily contributed to the SUC/LUC (if applicable)</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-21" name="answer10"'; 
                                         
                                            if ($question_11 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-21">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-22" name="answer10"'; 
                                          
                                            if ($question_11 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-22">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                    }
                    
                    if($tes=='yes'){
                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Signed the TES Sharing Agreement between the HEI and TES grantees</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-23" name="answer11"'; 
                                        
                                            if ($question_12 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-23">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-24" name="answer11"'; 
                                         
                                            if ($question_12 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-24">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                    

                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Disseminated continously information to qualified TES grantees</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-25" name="answer12"'; 
                                         
                                            if ($question_13 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-25">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-26" name="answer12"'; 
                                         
                                            if ($question_13 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-26">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted TES liquidation reports within the prescribed period</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-27" name="answer13"'; 
                                         
                                            if ($question_14 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-27">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-28" name="answer13"'; 
                                         
                                            if ($question_14 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-28">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                    }
                    if($tes=='yes' OR $tdp=='yes'){
                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Returned excess or unutilized Administrative Support Cost (ASC) to the UniFAST</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-29" name="answer14"'; 
                                         
                                            if ($question_15 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-29">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-30" name="answer14"'; 
                                         
                                            if ($question_15 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-30">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';

                    }
                        if($tdp=='yes'){
                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Issued individual Notice of Award (NOA) to qualified TDP-TES applicants</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-31" name="answer15"'; 
                                         
                                            if ($question_16 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-31">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-32" name="answer15"'; 
                                         
                                            if ($question_16 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-32">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted to the CHED Regional Office (RO) the signed NOA of qualified TDP-TES grantees and other billing requirements</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-33" name="answer16"'; 
                                         
                                            if ($question_17 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-33">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-34" name="answer16"'; 
                                         
                                            if ($question_17 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-34">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted to the CHEDRO the payroll for the release of TDP-TES benefits</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-35" name="answer17"'; 
                                        
                                            if ($question_18 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-35">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-36" name="answer17"'; 
                                         
                                            if ($question_18 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-36">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';


                        echo'<li class="list-group-item border-white">
                            <div class="form-group"><label>'.$cnt++.'. Submitted TDP-TES liquidation reports within the prescribed period</label>
                                <div class="form-row">
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-37" name="answer18"'; 
                                        
                                            if ($question_19 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="Yes" required=""><label class="custom-control-label" for="formCheck-37">Yes</label></div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="formCheck-38" name="answer18"'; 
                                         
                                            if ($question_19 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo'value="No" required=""><label class="custom-control-label" for="formCheck-38">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>';
                        }
                    
                    ?>

                    </ul>
                </div>
            </div>


            <?php
            $cnt2=1;
            if($tes=='yes'){
            echo"<div class='card card-style'>
                <div class='form-group'><label class='label-parts'>III.B COMPLIANCE TO TES SHARING AGREEMENT</label></div>
                <div class='form-group' style='font-style: italic;'><label>The HEI certifies its compliance/ noncompliance with the following information:</label></div>
                <div class='form-group'>
                    <ul class='list-group'>
                        <li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Received from the UniFAST the exact amount of TES for the term</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-39' name='answer19'";  
                                            if ($question_20 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-39'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-40' name='answer19'";

                                            if ($question_20 == "No") {
                                                echo " "."checked"." ";
                                            } 

                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-40'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                                        
                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Released the amount intended for the TES grantees</label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-41' name='answer20'";  
                                            if ($question_21 == 'Yes') {
                                                echo " "."checked"." ";
                                            } 
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-41'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-42' name='answer20'"; 
                                            if ($question_21 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-42'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";

                    if($_SESSION['hei_it']=='Private HEI'){
                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Released to the grantees the difference in TES amount if the share of the private HEI is greater than the actual TOSF of the grantees (if applicable)<br></label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-43' name='answer21'"; 
                                       
                                            if ($question_22 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-43'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-44' name='answer21'"; 
                                        
                                            if ($question_22 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-44'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                    

                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Obliged the grantees to pay the difference in TES amount if the share of the private HEI is less than the actual TOSF of the grantees (if applicable)<br></label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-45' name='answer22'"; 
                                        
                                            if ($question_23 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-45'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-46' name='answer22'"; 
                                        
                                            if ($question_23 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-46'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                    

                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Released the full amount of the TES to the grantees who have fully paid the TOSF for the term<br></label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-47' name='answer23'"; 
                                        
                                            if ($question_24 == "Yes") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-47'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-48' name='answer23'"; 
                                        
                                            if ($question_24 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                       
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-48'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";
                    }

                        echo"<li class='list-group-item border-white'>
                            <div class='form-group'><label>".$cnt2++.". Released to the grantees their share within two (2) weeks upon the receipt of fund transfer for TES<br></label>
                                <div class='form-row'>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-49' name='answer24'"; 
                                         
                                            if ($question_25 == 'Yes') {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='Yes' required=''><label class='custom-control-label' for='formCheck-49'>Yes</label></div>
                                    </div>
                                    <div class='col-12 col-md-6 col-xl-3'>
                                        <div class='custom-control custom-radio'><input class='custom-control-input' type='radio' id='formCheck-50' name='answer24'"; 
                                         
                                            if ($question_25 == "No") {
                                                echo " "."checked"." ";
                                            } 
                                        
                                        echo"value='No' required=''><label class='custom-control-label' for='formCheck-50'>No</label></div>
                                    </div>
                                </div>
                            </div>
                        </li>";

                    echo"</ul>
                </div>
            </div>";
        }
            if($form_status=='ongoing' OR $form_status=='Saved'){
                echo'<div class="card card-style">
                    <div class="form-group text-right"><a class="btn btn-info" role="button" id="btn-next" href="compliance.php">EDIT</a></div>
                </div>';
            }

            echo'</div>
        </form>';
        ?>
        <!--4th Part-->
        <?php
        if($_SESSION['ac_year']=='2022-2023'){
        echo'<form id="hei-experience-final">
            <div class="card card-style-out">
                <div class="card card-style-part">
                    <h6 class="text-center header-1"><strong>PART IV. UNIFAST EXPERIENCE</strong><br></h6>
                </div>
                <div class="card card-style">
                    <div class="form-group"><label style="font-style: italic;">List down or enumerate what is being asked from the following statements. Please provide a brief explanation for your answers.</label></div>
                    <div class="form-group"><label>1. Good Practices in the implementation of RA No. 10931 Programs</label><textarea class="form-control" name="answer1" required="" disabled>'.$question_26.'</textarea></div>
                    <hr>
                    <div class="form-group"><label>2. Challenges/Concerns in the Implementation of RA No. 10931</label><textarea       class="form-control" name="answer2" required="" disabled>'.$question_27.'</textarea></div>
                    <hr>
                    <div class="form-group"><label>3. Recommendations for the Improvement of Program Implementation</label><textarea class="form-control" name="answer3" required="" disabled>'.$question_28.'</textarea></div>
                </div>';

                if($form_status=='ongoing' OR $form_status=='Saved'){
                echo'<div class="card card-style">
                    <div class="form-group text-right"><a class="btn btn-info" role="button" id="btn-next" href="experience.php">EDIT</a></div>
                </div>';
                }

            echo'</div>
        </form>';
        }
        ?>
        
        <form method="POST" id="finalize_form">
            <div  class="card card-style-out">
                <div class="card card-style">
                    <div id="finalize_div" class="form-group text-right">
                        <div class="form-row">
                            <?php
                            if($form_status=='ongoing' OR $form_status=='Saved'){
                            echo'<div class="col text-center">
                                <a class="btn btn-primary save_form" role="button" id="btn-next" href="includes/final/save.php">Save&nbsp; &nbsp;<i class="fas fa-save"></i></a>
                            </div>
                            <div class="col text-center">
                                <a class="btn btn-primary save_form" role="button" id="btn-next" href="includes/final/save.php">Save&nbsp; &nbsp;<i class="fas fa-save"></i></a>
                            </div>
                            <div class="col text-center">
                            <button class="btn btn-success finalize_form" id="btn-next" type="button">Finalize&nbsp; &nbsp;<i class="fas fa-file-signature"></i></button>
                            </div>';
                        }
                            if($form_status=='Approved'){
                            echo'<div class="col text-right">
                                <a class="btn btn-info print_form" role="button" id="btn-next" href="masterlist.php">Print&nbsp; &nbsp;<i class="fas fa-print"></i></a>
                            </div>';
                        }
                        if($form_status=='For Review of Regional Coordinator'){
                            echo'<div class="col text-center">
                            <h6 class="text-danger">This form is being reviewed by the Regional Coordinators in-charged to your HEI.</h6>
                            <a href="home.php">Back to Homepage</a>
                            </div>';
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        

    </div>

    <div role="dialog" tabindex="-1" class="modal fade show" id="finalize_form_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" id="finalize_form_modal_form">
                <div class="modal-header">
                    <h4 class="modal-title">Finalize Form Confirmation</h4><button  type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Are you sure you want to finalize this form?</p> 
                    <p>This will disable you from editing the form, please make sure all details provided are correct and complete.
                    </p>
                </div>
                <div class="modal-footer"><button id="btn-next" class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button id="btn-next" class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<div role="dialog" tabindex="-1" class="modal fade show" id="print_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form method="POST" id="print_modal_form">
                <div class="modal-header">
                    <h4 class="modal-title">Finalize Form Confirmation</h4><button  type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer"><button id="btn-next" class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button id="btn-next" class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>