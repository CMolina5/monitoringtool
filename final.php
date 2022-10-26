<?php
    session_start();
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