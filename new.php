<?php
echo"
        <div class='card card-style-out'>
            <div class='card card-style-table'>
                <div class='form-group'><label class='label-parts'>I.A FREE HIGHER EDUCATION</label></div>
                <div class='form-group'>
                    <div id='tbl_programs_fhe_div' class='table table-responsive tbl-style'>
                        <?php
                        include 'includes/stufap/inc_fhe_programs_table.php';
                        ?>
                    </div>
                </div>
            </div>
            <div class='card card-style-table'>
                <div class='form-group'><label>No. of FHE Beneficiaries Who Opted Out of FHE</label>
                    <div class='form-row'>
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo'
                        <div class='col-12 col-md-3'>';
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo'
                            <div class='col-12 col-md-4'>';
                        }else
                        echo'
                        <div class='col-12 col-md-3 col-xl-6'>';
                    ?>
                        <label>1st Term</label><input id='total_fhe_opt_out_1st' name='total_fhe_opt_out_1st' class='form-control' type='number' value='<?php echo $total_fhe_opt_out_1st; ?>' required='' min='0'></div>
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo'
                        <div class='col-12 col-md-3'>';
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo'
                            <div class='col-12 col-md-4'>';
                        }else
                        echo'
                        <div class='col-12 col-md-3 col-xl-6'>';
                    ?>
                        <label>2nd Term</label><input id='total_fhe_opt_out_2nd' name='total_fhe_opt_out_2nd' class='form-control' type='number' value='<?php echo $total_fhe_opt_out_2nd; ?>' required='' min='0'></div>

                        <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo'
                                <div class='col-12 col-md-3'>';
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo'
                                    <div class='col-12 col-md-4'>';
                                }else
                                echo'
                                <div class='col-12 col-md-3 col-xl-6'>';
                        echo'
                        <label>3rd Term</label><input id='total_fhe_opt_out_3rd' name='total_fhe_opt_out_3rd' class='form-control' type='number' value='$total_fhe_opt_out_3rd' required='' min='0'></div>';
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo'
                                <div class='col-12 col-md-3'>';
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo'
                                    <div class='col-12 col-md-4'>';
                                }else
                                echo'
                                <div class='col-12 col-md-3 col-xl-6'>';
                        echo'
                        <label>Summer/Midyear</label><input id='total_fhe_opt_out_summer_midyear' name='total_fhe_opt_out_summer_midyear' class='form-control' type='number' value='$total_fhe_opt_out_summer_midyear' required='' min='0'></div>';
                        }
                        ?>


                    </div>
                </div>
                <div class='form-group'><label>No. of FHE Beneficiaries Who Voluntarily Contributed for FHE</label>
                    <div class='form-row'>
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo'
                        <div class='col-12 col-md-3'>';
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo'
                            <div class='col-12 col-md-4'>';
                        }else
                        echo'
                        <div class='col-12 col-md-3 col-xl-6'>';
                    ?>
                        <label>1st Term</label><input id='total_fhe_vol_cont_1st' name='total_fhe_vol_cont_1st' class='form-control' type='number' value='<?php echo $total_fhe_vol_cont_1st; ?>' required='' min='0'></div>
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo'
                        <div class='col-12 col-md-3'>';
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo'
                            <div class='col-12 col-md-4'>';
                        }else
                        echo'
                        <div class='col-12 col-md-3 col-xl-6'>';
                    ?>
                        <label>2nd Term</label><input id='total_fhe_vol_cont_2nd' name='total_fhe_vol_cont_2nd' class='form-control' type='number' value='<?php echo $total_fhe_vol_cont_2nd; ?>' required='' min='0'></div>

                        <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo'
                                <div class='col-12 col-md-3'>';
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo'
                                    <div class='col-12 col-md-4'>';
                                }else
                                echo'
                                <div class='col-12 col-md-3 col-xl-6'>';
                        echo'
                        <label>3rd Term</label><input id='total_fhe_vol_cont_3rd' name='total_fhe_vol_cont_3rd' class='form-control' type='number' value='$total_fhe_vol_cont_3rd' required='' min='0'></div>';
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo'
                                <div class='col-12 col-md-3'>';
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo'
                                    <div class='col-12 col-md-4'>';
                                }else
                                echo'
                                <div class='col-12 col-md-3 col-xl-6'>';
                        echo'
                        <label>Summer/Midyear</label><input id='total_fhe_vol_cont_summer_midyear' name='total_fhe_vol_cont_summer_midyear' class='form-control' type='number' value='$total_fhe_vol_cont_summer_midyear' required='' min='0'></div>';
                        }
                        ?>


                    </div>
                </div>
                <div class='form-group'><label>No. of FHE Beneficiaries on Leave of Absence (LOA)</label>
                    <div class='form-row'>
                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo'
                        <div class='col-12 col-md-3'>';
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo'
                            <div class='col-12 col-md-4'>';
                        }else
                        echo'
                        <div class='col-12 col-md-3 col-xl-6'>';
                    ?>
                        <label>1st Term</label><input id='total_fhe_loa_1st' name='total_fhe_loa_1st' class='form-control' type='number' value='<?php echo $total_fhe_loa_1st; ?>' required='' min='0'></div>

                    <?php
                        if( $ac_calendar=='Trimester with Summer'){
                        echo'
                        <div class='col-12 col-md-3'>';
                        }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                            echo'
                            <div class='col-12 col-md-4'>';
                        }else
                        echo'
                        <div class='col-12 col-md-3 col-xl-6'>';
                    ?>
                        <label>2nd Term</label><input id='total_fhe_loa_2nd' name='total_fhe_loa_2nd' class='form-control' type='number' value='<?php echo $total_fhe_loa_2nd; ?>' required='' min='0'></div>

                        <?php
                        if($ac_calendar=='Trimester' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo'
                                <div class='col-12 col-md-3'>';
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo'
                                    <div class='col-12 col-md-4'>';
                                }else
                                echo'
                                <div class='col-12 col-md-3 col-xl-6'>';
                        echo'
                        <label>3rd Term</label><input id='total_fhe_loa_3rd' name='total_fhe_loa_3rd' class='form-control' type='number' value='$total_fhe_loa_3rd' required='' min='0'></div>';
                        }

                        if($ac_calendar=='Semester with Summer' OR $ac_calendar=='Trimester with Summer'){
                            if( $ac_calendar=='Trimester with Summer'){
                                echo'
                                <div class='col-12 col-md-3'>';
                                }else if($ac_calendar=='Trimester' OR $ac_calendar=='Semester with Summer'){
                                    echo'
                                    <div class='col-12 col-md-4'>';
                                }else
                                echo'
                                <div class='col-12 col-md-3 col-xl-6'>';
                        echo'
                        <label>Summer/Midyear</label><input id='total_fhe_loa_summer_midyear' name='total_fhe_loa_summer_midyear' class='form-control' type='number' value='$total_fhe_loa_summer_midyear' required='' min='0'></div>';
                        }
                        ?>


                    </div>
                </div>
            </div>
            <div class='card card-style-table'>
                <div class='form-group'><label>No. of FHE Beneficiaries Who Dropped</label><label style='font-style: italic;'>Determine the no. of dropouts per semester/term attended for each of the reasons listed below. For reasons not mentioned in the list, additional rows may be added.</label></div>
                <div class='form-group'>
                    <p class='text-right'><button class='btn btn-success' id='btn-add-program' type='button' data-toggle='modal' data-target='#add_dropouts_fhe'>ADD reason for dropping</button></p>
                    <div id='tbl_fhe_dropouts_div' class='table table-responsive tbl-style'>
                        <?php
                        include 'includes/stufap/inc_fhe_dropouts.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>";
?>