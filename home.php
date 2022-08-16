<?php
session_start();
include_once 'includes/db_connection.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
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
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#" target="_top">Unifast</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#home-page">HOME</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" target="_blank" href="https://unifast.gov.ph/">about us</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://unifast.gov.ph/contact-us.php" target="_blank">contact us</a></li>
                    <li class="nav-item mx-0 mx-lg-1" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="home-page" class="contact-clean">
        <form>
            <div class="card card-style-out">
                <div class="card card-style-table">
                    <div class="form-group">
                        <label style="font-weight: bold;"> <?php echo "".strtoUpper($_SESSION['hei_name'])." "; ?>/ LIST OF FORMS CREATED</label>
                        <p class="text-right"><button class="btn btn-success" id="btn-new-form" type="button" data-toggle="modal" data-target="#createform_modal">CREATE NEW FORM</button></p>
                        <?php
                        if ($_SESSION['alert'] == 'found') {
                            echo '<div role="alert" class="alert alert-warning alert-style">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h6 class="alert-heading">Record already exist!</h6><span><strong>Please select the record in the table</strong></span>
                            </div>';
                        }
                        $_SESSION['alert'] = '';
                        ?>
                        <div id="tbl_list_of_forms_div" class="table-responsive tbl-style">
                            <?php
                                include 'includes/home/inc_hei_records.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="createform_modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" action="includes/home/inc_newform.php" id="createform_modal_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Form</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group"><label>Academic Year Covered</label>
                            <select name="ac_year" id="ac_year" class="form-control" required>
                                    <option selected disabled value="">Select Academic Year</option> 
                                    <option value="2018-2019">2018-2019</option>
                                    <option value="2019-2020">2019-2020</option>
                                    <option value="2020-2021">2020-2021</option>
                                    <option value="2021-2022">2021-2022</option>
                                    <option value="2022-2023">2022-2023</option>
                            </select>
                        </div>
                        <div class="form-group"><label>Academic Calendar</label>
                            <div class="form-row">
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="semester" name="ac_calendar" value="Semester" required=""><label class="custom-control-label" for="semester">Semester</label></div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="semwithsummer" name="ac_calendar" value="Semester with Summer" required=""><label class="custom-control-label" for="semwithsummer">Semester with Summer</label></div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="trimester" name="ac_calendar" value="Trimester" required=""><label class="custom-control-label" for="trimester" va>Trimester</label></div>
                                </div> 
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="trimesterwithsummer" name="ac_calendar" value="Trimester with Summer" required=""><label class="custom-control-label" for="trimesterwithsummer">Trimester with Summer</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label>What type of RA No. 10931 beneficiaries does your institution have?&nbsp;</label><label style="color: rgb(255,15,0);font-style: italic;">(Please select all that apply)</label>
                            <div class="form-row">
                                    <div class='col-12 col-md-4'>
                                    <div class='custom-control custom-checkbox'>
                                        <input class='custom-control-input' type='hidden' id='' name='fhe' value='no'>
                                        <input class='custom-control-input' type='checkbox' id='fhe' name='fhe' value='yes' 
                                        <?php
                                        if ($_SESSION['hei_it'] == "SUC" OR $_SESSION['hei_it'] == "LUC") {
                                            echo "checked";
                                        }else if($_SESSION['hei_it'] == "Private HEI"){
                                            echo "disabled";
                                        }
                                        ?>
                                        >
                                        <label class='custom-control-label' for='fhe'>Free Higher Education </label>
                                    </div>
                                    </div>
                                    <div class='col-12 col-md-4'>
                                        <div class='custom-control custom-checkbox'>
                                            <input class='custom-control-input' type='hidden' id='' name='tes' value='no'>
                                            <input class='custom-control-input' type='checkbox' id='tes' name='tes' value='yes'>
                                            <label class='custom-control-label' for='tes'>Tertiary Education Subsidy</label>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class='custom-control custom-checkbox'>
                                            <input class='custom-control-input' type='hidden' id='' name='tdp' value='no'>
                                            <input class='custom-control-input' type='checkbox' id='tdp' name='tdp' value='yes'>
                                            <label class='custom-control-label' for='tdp'>Tulong Dunong Program</label>
                                        </div>
                                    </div>                

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit" id="btn_save" name="btn_save">Save</button></div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="editform_modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST" id="editform_modal_form">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Form</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group"><label>Academic Year Covered</label>
                        <input name="ac_year1" id="ac_year1" class="form-control" type="text" disabled="">
                        </div>
                        <div class="form-group"><label>Academic Calendar</label>
                            <div class="form-row">
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="semester1" name="ac_calendar1" value="Semester"><label class="custom-control-label" for="semester1">Semester</label></div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="semwithsummer1" name="ac_calendar1" value="Semester with Summer"><label class="custom-control-label" for="semwithsummer1">Semester with Summer</label></div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="trimester1" name="ac_calendar1" value="Trimester"><label class="custom-control-label" for="trimester1">Trimester</label></div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input class="custom-control-input" type="radio" id="trimesterwithsummer1" name="ac_calendar1" value="Trimester with Summer"><label class="custom-control-label" for="trimesterwithsummer1">Trimester with Summer</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label>What type of RA No. 10931 beneficiaries does your institution have?&nbsp;</label><label style="color: rgb(255,15,0);font-style: italic;">(Please select all that apply)</label>
                            <div class="form-row">
                                    <div class='col-12 col-md-4'>
                                    <div class='custom-control custom-checkbox'>
                                        <input class='custom-control-input' type='hidden' id='' name='fhe1' value='no'>
                                        <input class='custom-control-input' type='checkbox' id='fhe1' name='fhe1' value='yes' 
                                        <?php
                                        if ($_SESSION['hei_it'] == "SUC" OR $_SESSION['hei_it'] == "LUC") {
                                            echo "checked";
                                        }else if($_SESSION['hei_it'] == "Private HEI"){
                                            echo "disabled";
                                        }
                                        ?>
                                        >
                                        <label class='custom-control-label' for='fhe1'>Free Higher Education </label>
                                    </div>
                                    </div>
                                    <div class='col-12 col-md-4'>
                                        <div class='custom-control custom-checkbox'>
                                            <input class='custom-control-input' type='hidden' id='' name='tes1' value='no'>
                                            <input class='custom-control-input' type='checkbox' id='tes1' name='tes1' value='yes'>
                                            <label class='custom-control-label' for='tes1'>Tertiary Education Subsidy</label>
                                        </div>
                                    </div>
                                    <div class='col'>
                                        <div class='custom-control custom-checkbox'>
                                            <input class='custom-control-input' type='hidden' id='' name='tdp1' value='no'>
                                            <input class='custom-control-input' type='checkbox' id='tdp1' name='tdp1' value='yes'>
                                            <label class='custom-control-label' for='tdp1'>Tulong Dunong Program</label>
                                        </div>
                                    </div>                

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="submit" id="btn_save" name="btn_save">Save</button></div>
                </form>
            </div>
        </div>
    </div>


    <div role="dialog" tabindex="-1" class="modal fade show" id="removeform_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" id="removeform_modal_form">
                <div class="modal-header">
                    <h4 class="modal-title">Remove Program Confirmation</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Are you sure you want to remove this Form?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button><button class="btn btn-danger" type="submit">Confirm</button></div>
            </form>
        </div>
    </div>
</div>


<?php
include 'includes/footer.php';
?>