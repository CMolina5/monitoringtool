<?php
include 'includes/header.php';
include 'includes/stufap/inc_template.php';
?>

<div id="stufap-all" class="contact-clean hei-profile">
    <form method="POST" action="includes/stufap/inc_stufap_info_add.php">
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
                <label>No. of FHE Beneficiaries under LOA</label><label style='font-style: italic;'>Determine the no. of beneficiaries with loa per semester/term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label>
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
                <label>No. of TES Grantees under LOA</label><label style='font-style: italic;'>Determine the no. of beneficiaries with loa per semester/term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label>
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
                <label>No. of TDP Grantees under LOA</label><label style='font-style: italic;'>Determine the no. of beneficiaries with loa per semester/term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label>
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

        <div class="card card-style-out">
            <div class="card card-style-table">
                <div class="form-group text-right">
                    <div class="form-row">
                        <div class="col text-center"><a class="btn btn-info" role="button" id="btn-prev" href="heiprofile.php"><i class="fas fa-backward"></i>&nbsp; &nbsp;Previous</a></div>
                        <div class="col text-center"><button class="btn btn-primary" id="btn-next" type="submit">SAVE AND PROCEED&nbsp; &nbsp;<i class="fas fa-forward"></i></button></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<?php
include 'includes/stufap/inc_modals.php';
include 'includes/footer.php';
?>