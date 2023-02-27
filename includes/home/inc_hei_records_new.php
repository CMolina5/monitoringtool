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
            <div class="card mt-2" style>
            <div class="card-body">
                <div class="form-row" style="font-size: 15px;">
                    <div class="col-9 col-sm-11 col-md-11 col-lg-11">';
                    if($status=='For Review of Regional Coordinator'){
                        echo'<span class="badge badge-warning">For Review</span>';
                    }else if($status=='Approved'){
                        echo'<span class="badge badge-success">Approved</span>';
                    }else if($status=='Saved'){
                        echo'<span class="badge badge-info">Saved</span>';
                    }else{
                        echo'<span class="badge badge-secondary">Ongoing</span>';
                    }
                    echo'
                    </div>
                    <div class="col-3 col-sm-1 col-md-1 col-lg-1 col-xl-1 text-right">';
                    if($status=='Saved' || $status=='ongoing'){
                        echo'<button style="font-size: 15px;" class="btn btn-outline btn-table-margin edit_record"  type="button" title="Edit Form Structure" name="edit" value="edit" id="'.$uid.'"><i class="far fa-edit"></i></button>';
                    }
                    echo'
                    </div>
                </div>
                <div class="form-row" style="height: 99px;">
                    <div class="col">
                        <h3 class="text-primary">'.$ac_year.'</h3>
                        <h6 class="mb-2">'.$ac_calendar.'</h6>
                        <p>'.$programs_covered.'</p>
                    </div>
                </div>
                <div class="form-row" style="height: 31px;">
                    <div class="col">';
                    if($status=='For Review of Regional Coordinator' OR $status=='Approved' OR $status=='Saved'){
                        echo"<p class='text-right'><button class='btn btn-primary btn-table-margin view_record_final' type='button' title='View Form' name='view_form' value='view_form' id='$uid'>VIEW</button><p>";
                    }else{
                        echo"<p class='text-right'><button class='btn btn-primary btn-table-margin view_record' type='button' title='Edit Form' name='edit_form' value='edit_form' id='$uid'>FILL-UP</button><p>";
                    }
                    echo'
                    </div>
                </div>
            </div>
        </div>  
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
            ';
        }
    }

    