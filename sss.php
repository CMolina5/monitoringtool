<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="Fillupform.css" />
    <link rel="stylesheet" href="Icon-Input.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#" target="_top">Unifast</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li role="presentation" class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#home-page">HOME</a></li>
                    <li role="presentation" class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" target="_blank" href="https://unifast.gov.ph/">about us</a></li>
                    <li role="presentation" class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="https://unifast.gov.ph/contact-us.php" target="_blank">contact us</a></li>
                    <li role="presentation" class="nav-item mx-0 mx-lg-1"></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="home-page" class="contact-clean">
        <form>
            <div class="card card-style-out">
                <div class="form-group"><label style="font-weight: bold;">LIST OF FORMS CREATED</label>
                    <p class="text-right"><button class="btn btn-success" id="btn-new-form-1" type="button" data-toggle="modal" data-target="#createform">CREATE NEW FORM</button></p>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-9 col-sm-11 col-md-11 col-lg-11"><span class="badge badge-success" style="font-size: 16px;">ONGOING</span>
                                    <p></p>
                                </div>
                                <div class="col-3 col-sm-1 col-md-1 col-lg-1 col-xl-1 text-right"><a class="text-muted" href="#"></a></div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-5 text-center">
                                    <h1 class="text-center text-info mt-4">2020-2021</h1>
                                </div>
                                <div class="col-xl-5 p-3 border rounded" style="background-color: #f5f5f5;">
                                    <div class="form-row">
                                        <div class="col-xl-9">
                                            <h6 class="mt-2">Trimester with Semester</h6>
                                        </div>
                                        <div class="col">
                                            <h6 class="text-right mb-2"><button class="btn btn-outline-secondary btn-sm text-center border rounded" id="btn-new-form" type="button" style="font-size: 20p;">edit</button></h6>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>FHE, TES, TDP</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-center"><i class="fas fa-pencil-alt mt-4" style="font-size: 50px;" title="Fill-up Form"></i></div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <p class="text-right"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-9 col-sm-11 col-md-11 col-lg-11"><span class="badge badge-warning" style="font-size: 16px;">FOR REVIEW</span>
                                    <p></p>
                                </div>
                                <div class="col-3 col-sm-1 col-md-1 col-lg-1 col-xl-1 text-right"><a class="text-muted" href="#"></a></div>
                            </div>
                            <div class="form-row">
                                <div class="col-xl-5 text-center">
                                    <h1 class="text-center text-info mt-4">2019-2020</h1>
                                </div>
                                <div class="col-xl-5 p-3 border rounded" style="background-color: #f5f5f5;">
                                    <div class="form-row">
                                        <div class="col-xl-9">
                                            <h6 class="mt-2">Trimester with Semester</h6>
                                        </div>
                                        <div class="col">
                                            <h6 class="text-right mb-2"><button class="btn btn-outline-secondary btn-sm text-center border rounded" id="btn-new-form" type="button" style="font-size: 20p;">edit</button></h6>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>FHE, TES, TDP</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <p class="text-primary"></p><i class="far fa-eye mt-4" style="font-size: 50px;" title="Fill-up Form"></i></div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <p class="text-right"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div role="dialog" tabindex="-1" class="modal fade" id="createform">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Form</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                        <div role="alert" class="alert alert-danger alert-style"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h6 class="alert-heading">No selection on the required fields!</h6><span><strong>No Academic Year Covered, Academic Calendar or Program/s Selected</strong><br /></span></div>
                        <div class="form-group"><label>Academic Year Covered</label><select class="form-control" required><optgroup label="Select Academic Year"><option value>2018-2019</option><option value>2020-2021</option><option value>2021-2022</option></optgroup></select></div>
                        <div
                            class="form-group"><label>Academic Calendar</label>
                            <div class="form-row">
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" id="semester" name="calendar" required /><label class="custom-control-label" for="semester">Semester</label></div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" id="semwithsummer" name="calendar" /><label class="custom-control-label" for="semwithsummer">Semester with Summer</label></div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" id="trimester" name="calendar" /><label class="custom-control-label" for="trimester">Trimester</label></div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="custom-control custom-radio"><input type="radio" class="custom-control-input" id="trimesterwithsummer" name="calendar" /><label class="custom-control-label" for="trimesterwithsummer">Trimester with Summer</label></div>
                                </div>
                            </div>
                    </div>
                    <div class="form-group"><label>What type of RA No. 10931 beneficiaries does your institution have? </label><label style="color: rgb(255,15,0);font-style: italic;">(Please select all that apply)</label>
                        <div class="form-row">
                            <div class="col-12 col-md-4">
                                <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="formCheck-1" required /><label class="custom-control-label" for="formCheck-1">Free Higher Education</label></div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="formCheck-2" /><label class="custom-control-label" for="formCheck-2">Tertiary Education Subsidy</label></div>
                            </div>
                            <div class="col">
                                <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="formCheck-3" /><label class="custom-control-label" for="formCheck-3">Tulong Dunong Program</label></div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>