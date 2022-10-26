<?php

$sql= "SELECT * FROM tbl_hei_records WHERE hei_uii='$_SESSION[hei_uii]' ORDER BY ac_year ASC";
$result= mysqli_query($conn, $sql);
$resultCheck= mysqli_num_rows($result);

echo"<table id='tbl_list_of_forms' class='table table-bordered tbl-style stripe' style='width: 100%;'>
<thead>
    <tr>
        <th class='text-center'>ACADEMIC YEAR</th>
        <th class='text-center'>ACADEMIC CALENDAR</th>
        <th class='text-center'>PROGRAMS COVERED</th>
        <th class='text-center'>FORM STATUS</th>
        <th class='text-center'>DATE CREATED</th>
        <th class='text-center'>DATE FINALIZED</th>
        <th class='text-center'>DATE APPROVED</th>
        <th class='text-center'>APPROVED BY</th>
        <th class='text-center'>DATE SUBMITTED</th>
        <th class='text-center'>ACTION</th>
    </tr>
</thead>
<tbody>";

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

            echo"
                <tr>
                    <td class='text-center' style='width:5%; font-size:12px;'><strong>$ac_year</strong></td>
                    <td class='text-center' style='width:10%'>".strtoupper($ac_calendar)."</td>
                    <td class='text-center' style='width:10%'>$programs_covered</td>
                    <td class='text-center' style='width:20%'>".strtoupper($status)."</td>
                    <td class='text-center' style='width:5%'>$date_created</td>
                    <td class='text-center' style='width:5%'>$date_finalized</td>
                    <td class='text-center' style='width:5%'>$date_approved_by_rc</td>
                    <td class='text-center' style='width:10%'>$approved_by</td>
                    <td class='text-center' style='width:5%'>$date_submitted</td>
                    <td class='text-left' style='width:20%'>";
                    if($status=='For Review of Regional Coordinator' OR $status=='Approved' OR $status=='Saved'){
                        echo"<button class='btn btn-primary btn-table-margin view_record_final' type='button' title='View Form' name='view_form' value='view_form' id='$uid'><i class='fas fa-file-signature'></i></button>";
                    }else{
                        echo"<button class='btn btn-primary btn-table-margin view_record' type='button' title='Edit Form' name='edit_form' value='edit_form' id='$uid'><i class='fas fa-file-signature'></i></button>";
                    }
                    if($status=='Ongoing' OR $status=='Saved'){
                        echo"<button class='btn btn-info btn-table-margin edit_record' type='button' title='Edit Form Structure' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button>
                        <button class='btn btn-danger btn-table-margin remove_record' type='button' title='Remove' name='remove' value'remove' id='$uid'><i class='fas fa-trash'></i></button>";
                    }
                    echo"</td>
                </tr>";
        }
    }

    echo"</tbody>
    </table>";

    