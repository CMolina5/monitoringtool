<?php

$sql= "SELECT * FROM tbl_hei_records WHERE hei_uii='$_SESSION[hei_uii]' ORDER BY ac_year ASC";
$result= mysqli_query($conn, $sql);
$resultCheck= mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row= mysqli_fetch_assoc($result)){
            $uid=$row['uid'];
            $ac_year=$row['ac_year'];
            $ac_calendar=$row['ac_calendar'];
            $fhe=$row['fhe'];
            $tes=$row['tes'];
            $tdp=$row['tdp'];
            $status=$row['form_status'];
            $date_submitted=$row['date_submitted'];
            $date_finalized=$row['date_finalized'];
            $date_created=$row['date_created'];
            $date_approved_by_rc=$row['date_approved_by_rc'];
            $approved_by=$row['approved_by'];

            if($fhe=='yes' && $tes=='yes' && $tdp=='yes'){
                $programs_covered= "FHE, TES, TDP";
            }else if($fhe=='yes' && $tes=='yes' && $tdp=='no'){
                $programs_covered= "FHE, TES";
            }else if($fhe=='yes' && $tes=='no' && $tdp=='no'){
                $programs_covered= "FHE";
            }else if($fhe=='no' && $tes=='yes' && $tdp=='yes'){
                $programs_covered= "TES, TDP";
            }else if($fhe=='no' && $tes=='yes' && $tdp=='no'){
                $programs_covered= "TES";
            }else if($fhe=='yes' && $tes=='no' && $tdp=='yes'){
                $programs_covered= "FHE, TDP";
            }else if($fhe=='no' && $tes=='no' && $tdp=='yes'){
                $programs_covered= "TDP";
            }

           

            echo'
            <div class="card mt-2">
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-9 col-sm-11 col-md-11 col-lg-12">';

                        if($status=='For Review of Regional Coordinator'){
                            echo'<span class="badge badge-warning" style="font-size: 15px;">For Review</span>';
                        }else if($status=='Approved'){
                            echo'<span class="badge badge-success" style="font-size: 15px;">Approved</span>';
                        }else if($status=='Saved'){
                            echo'<span class="badge badge-info" style="font-size: 15px;">Saved</span>';
                        }else{
                            echo'<span class="badge badge-secondary" style="font-size: 15px;">Ongoing</span>';
                        }

                        echo'
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-5 col-lg-4 col-xl-5 text-center">
                            <h1 class="text-center text-info mt-4">'.$ac_year.'</h1>
                        </div>
                        <div class="col-md-7 col-lg-8 col-xl-7 p-3 border rounded" style="background-color: #f5f5f5;">
                            <div class="form-row">
                                <div class="col-sm-10 col-md-10 col-lg-10 col-xl-9">
                                    <h6 class="mt-2">'.$ac_calendar.'</h6>
                                </div>
                                <div class="col-sm-2 col-xl-3">';

                                if($status=='Saved' || $status=='ongoing'){
                                    echo'
                                    <h6 class="text-right mb-2">
                                    <button class="btn btn-outline-secondary btn-sm text-center border rounded" id="btn-new-form" type="button"><i class="fas fa-cogs"></i></button>
                                    </h6>';
                                }

                                echo'</div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <p>'.$programs_covered.'</p>
                                </div>
                            </div>
                        </div>
                    </div>';

                    echo'
                    <div class="form-row mt-3">
                        <div class="col text-center">';

                        if($status=='For Review of Regional Coordinator' OR $status=='Approved' OR $status=='Saved'){
                            echo'
                        <button class="btn btn-primary view_record" type="button" style="font-size: 20px;" type="button" title="Edit Form" name="edit_form" value="edit_form" id="$uid">fill-up form</button>';
                        }else{
                            echo'
                            <button class="btn btn-primary view_record_final" type="button" style="font-size: 20px;" title="View Form" name="view_form" value="view_form" id="$uid">view form</button>';
                        }

                        echo'
                        </div>
                    </div>
                </div>
            </div>';
        }
    }

    