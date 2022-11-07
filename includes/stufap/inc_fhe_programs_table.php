<?php

$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($ac_calendar == 'Trimester with Summer') {
    echo "
<table id='tbl_programs_fhe' class='table-bordered tbl-style stripe table-sm' style='width: 100%; display'>
<thead>
    <tr>
        <th class='text-center' rowspan='4' colspan='1' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
        <th class='text-center' colspan='48' style='background-color: #3C70AB; color:#ffff;'>TOTAL FHE BENEFICIARIES</th>
        <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF FHE BENEFICIARIES WHO GRADUATED</th>
        <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. FHE BENEFICIARIES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
        <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;'>ACTIONS</th>
    </tr>
    <tr>
        <th class='text-center' colspan='12' style='background-color: #668EBD;'>1ST TERM</th>
        <th class='text-center' colspan='12' style='background-color: #668EBD;'>2ND TERM</th>
        <th class='text-center' colspan='12' style='background-color: #668EBD;'>3RD TERM</th>
        <th class='text-center' colspan='12' style='background-color: #668EBD;'>SUMMER/MIDYEAR</th>
    </tr>
    <tr>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>

        <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>

        <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>

        <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>
    </tr>
    <tr>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>

        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>

        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>

        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>

        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
    </tr>
<tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program_code = $row['program_code'];
            $program_name = $row['program_name'];
            $gr_no = $row['gr_no'];
            $copc_no = $row['copc_no'];
            $in_the_portal = $row['in_the_portal'];

            //1st Sem
            $total_fhe_1sem_1yr_male = $row['total_fhe_1sem_1yr_male'];
            $total_fhe_1sem_1yr_female = $row['total_fhe_1sem_1yr_female'];
            $total_fhe_1sem_2yr_male = $row['total_fhe_1sem_2yr_male'];
            $total_fhe_1sem_2yr_female = $row['total_fhe_1sem_2yr_female'];
            $total_fhe_1sem_3yr_male = $row['total_fhe_1sem_3yr_male'];
            $total_fhe_1sem_3yr_female = $row['total_fhe_1sem_3yr_female'];
            $total_fhe_1sem_4yr_male = $row['total_fhe_1sem_4yr_male'];
            $total_fhe_1sem_4yr_female = $row['total_fhe_1sem_4yr_female'];
            $total_fhe_1sem_5yr_male = $row['total_fhe_1sem_5yr_male'];
            $total_fhe_1sem_5yr_female = $row['total_fhe_1sem_5yr_female'];
            $total_fhe_1sem_6yr_male = $row['total_fhe_1sem_6yr_male'];
            $total_fhe_1sem_6yr_female = $row['total_fhe_1sem_6yr_female'];

            //2nd Sem
            $total_fhe_2sem_1yr_male = $row['total_fhe_2sem_1yr_male'];
            $total_fhe_2sem_1yr_female = $row['total_fhe_2sem_1yr_female'];
            $total_fhe_2sem_2yr_male = $row['total_fhe_2sem_2yr_male'];
            $total_fhe_2sem_2yr_female = $row['total_fhe_2sem_2yr_female'];
            $total_fhe_2sem_3yr_male = $row['total_fhe_2sem_3yr_male'];
            $total_fhe_2sem_3yr_female = $row['total_fhe_2sem_3yr_female'];
            $total_fhe_2sem_4yr_male = $row['total_fhe_2sem_4yr_male'];
            $total_fhe_2sem_4yr_female = $row['total_fhe_2sem_4yr_female'];
            $total_fhe_2sem_5yr_male = $row['total_fhe_2sem_5yr_male'];
            $total_fhe_2sem_5yr_female = $row['total_fhe_2sem_5yr_female'];
            $total_fhe_2sem_6yr_male = $row['total_fhe_2sem_6yr_male'];
            $total_fhe_2sem_6yr_female = $row['total_fhe_2sem_6yr_female'];

            //3rd Sem
            $total_fhe_3sem_1yr_male = $row['total_fhe_3sem_1yr_male'];
            $total_fhe_3sem_1yr_female = $row['total_fhe_3sem_1yr_female'];
            $total_fhe_3sem_2yr_male = $row['total_fhe_3sem_2yr_male'];
            $total_fhe_3sem_2yr_female = $row['total_fhe_3sem_2yr_female'];
            $total_fhe_3sem_3yr_male = $row['total_fhe_3sem_3yr_male'];
            $total_fhe_3sem_3yr_female = $row['total_fhe_3sem_3yr_female'];
            $total_fhe_3sem_4yr_male = $row['total_fhe_3sem_4yr_male'];
            $total_fhe_3sem_4yr_female = $row['total_fhe_3sem_4yr_female'];
            $total_fhe_3sem_5yr_male = $row['total_fhe_3sem_5yr_male'];
            $total_fhe_3sem_5yr_female = $row['total_fhe_3sem_5yr_female'];
            $total_fhe_3sem_6yr_male = $row['total_fhe_3sem_6yr_male'];
            $total_fhe_3sem_6yr_female = $row['total_fhe_3sem_6yr_female'];

            //Summer Midyear Sem
            $total_fhe_sum_mid_1yr_male = $row['total_fhe_sum_mid_1yr_male'];
            $total_fhe_sum_mid_1yr_female = $row['total_fhe_sum_mid_1yr_female'];
            $total_fhe_sum_mid_2yr_male = $row['total_fhe_sum_mid_2yr_male'];
            $total_fhe_sum_mid_2yr_female = $row['total_fhe_sum_mid_2yr_female'];
            $total_fhe_sum_mid_3yr_male = $row['total_fhe_sum_mid_3yr_male'];
            $total_fhe_sum_mid_3yr_female = $row['total_fhe_sum_mid_3yr_female'];
            $total_fhe_sum_mid_4yr_male = $row['total_fhe_sum_mid_4yr_male'];
            $total_fhe_sum_mid_4yr_female = $row['total_fhe_sum_mid_4yr_female'];
            $total_fhe_sum_mid_5yr_male = $row['total_fhe_sum_mid_5yr_male'];
            $total_fhe_sum_mid_5yr_female = $row['total_fhe_sum_mid_5yr_female'];
            $total_fhe_sum_mid_6yr_male = $row['total_fhe_sum_mid_6yr_male'];
            $total_fhe_sum_mid_6yr_female = $row['total_fhe_sum_mid_6yr_female'];

            $total_fhe_graduated_male = $row['total_fhe_graduated_male'];
            $total_fhe_graduated_female = $row['total_fhe_graduated_female'];
            $total_fhe_exceeded_mrr_male = $row['total_fhe_exceeded_mrr_male'];
            $total_fhe_exceeded_mrr_female = $row['total_fhe_exceeded_mrr_female'];

            echo "<tr>
        <td class='text-left'>$program_name</td>
        
        <td data-name='total_fhe_1sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_1yr_male</td>
        <td data-name='total_fhe_1sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_1yr_female</td>
        <td data-name='total_fhe_1sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_2yr_male</td>
        <td data-name='total_fhe_1sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_2yr_female</td>
        <td data-name='total_fhe_1sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_3yr_male</td>
        <td data-name='total_fhe_1sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_3yr_female</td>
        <td data-name='total_fhe_1sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_4yr_male</td>
        <td data-name='total_fhe_1sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_4yr_female</td>
        <td data-name='total_fhe_1sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_5yr_male</td>
        <td data-name='total_fhe_1sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_5yr_female</td>
        <td data-name='total_fhe_1sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_6yr_male</td>
        <td data-name='total_fhe_1sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_6yr_female</td>

        <td data-name='total_fhe_2sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_1yr_male</td>
        <td data-name='total_fhe_2sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_1yr_female</td>
        <td data-name='total_fhe_2sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_2yr_male</td>
        <td data-name='total_fhe_2sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_2yr_female</td>
        <td data-name='total_fhe_2sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_3yr_male</td>
        <td data-name='total_fhe_2sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_3yr_female</td>
        <td data-name='total_fhe_2sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_4yr_male</td>
        <td data-name='total_fhe_2sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_4yr_female</td>
        <td data-name='total_fhe_2sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_5yr_male</td>
        <td data-name='total_fhe_2sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_5yr_female</td>
        <td data-name='total_fhe_2sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_6yr_male</td>
        <td data-name='total_fhe_2sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_6yr_female</td>
       
        <td data-name='total_fhe_3sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_1yr_male</td>
        <td data-name='total_fhe_3sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_1yr_female</td>
        <td data-name='total_fhe_3sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_2yr_male</td>
        <td data-name='total_fhe_3sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_2yr_female</td>
        <td data-name='total_fhe_3sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_3yr_male</td>
        <td data-name='total_fhe_3sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_3yr_female</td>
        <td data-name='total_fhe_3sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_4yr_male</td>
        <td data-name='total_fhe_3sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_4yr_female</td>
        <td data-name='total_fhe_3sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_5yr_male</td>
        <td data-name='total_fhe_3sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_5yr_female</td>
        <td data-name='total_fhe_3sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_6yr_male</td>
        <td data-name='total_fhe_3sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_6yr_female</td>

        <td data-name='total_fhe_sum_mid_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_1yr_male</td>
        <td data-name='total_fhe_sum_mid_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_1yr_female</td>
        <td data-name='total_fhe_sum_mid_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_2yr_male</td>
        <td data-name='total_fhe_sum_mid_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_2yr_female</td>
        <td data-name='total_fhe_sum_mid_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_3yr_male</td>
        <td data-name='total_fhe_sum_mid_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_3yr_female</td>
        <td data-name='total_fhe_sum_mid_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_4yr_male</td>
        <td data-name='total_fhe_sum_mid_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_4yr_female</td>
        <td data-name='total_fhe_sum_mid_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_5yr_male</td>
        <td data-name='total_fhe_sum_mid_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_5yr_female</td>
        <td data-name='total_fhe_sum_mid_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_6yr_male</td>
        <td data-name='total_fhe_sum_mid_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_6yr_female</td>

        <td data-name='total_fhe_graduated_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_graduated_male</td>
        <td data-name='total_fhe_graduated_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_graduated_female</td>
        <td data-name='total_fhe_exceeded_mrr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_exceeded_mrr_male</td>
        <td data-name='total_fhe_exceeded_mrr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_exceeded_mrr_female</td>
        <td class='text-center'><button class='btn btn-info edit_data_fhe' data-bs-tooltip='' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button></td>
    </tr>";
        }
    }
    echo "</tbody>
</table>
";
} else if ($ac_calendar == 'Trimester') {
    echo "
    <table id='tbl_programs_fhe' class='table-bordered tbl-style stripe table-sm' style='width: 100%; display'>
    <thead>
        <tr>
            <th class='text-center' rowspan='4' colspan='1' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
            <th class='text-center' colspan='36' style='background-color: #3C70AB; color:#ffff;'>TOTAL FHE BENEFICIARIES</th>
            <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF FHE BENEFICIARIES WHO GRADUATED</th>
            <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. FHE BENEFICIARIES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
            <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;'>ACTIONS</th>
        </tr>
        <tr>
            <th class='text-center' colspan='12' style='background-color: #668EBD;'>1ST TERM</th>
            <th class='text-center' colspan='12' style='background-color: #668EBD;'>2ND TERM</th>
            <th class='text-center' colspan='12' style='background-color: #668EBD;'>3RD TERM</th>
        </tr>
        <tr>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>
    
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>
    
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>
        </tr>
        <tr>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
    
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
    
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
    
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        </tr>
    <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program_code = $row['program_code'];
            $program_name = $row['program_name'];
            $gr_no = $row['gr_no'];
            $copc_no = $row['copc_no'];
            $in_the_portal = $row['in_the_portal'];

            //1st Sem
            $total_fhe_1sem_1yr_male = $row['total_fhe_1sem_1yr_male'];
            $total_fhe_1sem_1yr_female = $row['total_fhe_1sem_1yr_female'];
            $total_fhe_1sem_2yr_male = $row['total_fhe_1sem_2yr_male'];
            $total_fhe_1sem_2yr_female = $row['total_fhe_1sem_2yr_female'];
            $total_fhe_1sem_3yr_male = $row['total_fhe_1sem_3yr_male'];
            $total_fhe_1sem_3yr_female = $row['total_fhe_1sem_3yr_female'];
            $total_fhe_1sem_4yr_male = $row['total_fhe_1sem_4yr_male'];
            $total_fhe_1sem_4yr_female = $row['total_fhe_1sem_4yr_female'];
            $total_fhe_1sem_5yr_male = $row['total_fhe_1sem_5yr_male'];
            $total_fhe_1sem_5yr_female = $row['total_fhe_1sem_5yr_female'];
            $total_fhe_1sem_6yr_male = $row['total_fhe_1sem_6yr_male'];
            $total_fhe_1sem_6yr_female = $row['total_fhe_1sem_6yr_female'];

            //2nd Sem
            $total_fhe_2sem_1yr_male = $row['total_fhe_2sem_1yr_male'];
            $total_fhe_2sem_1yr_female = $row['total_fhe_2sem_1yr_female'];
            $total_fhe_2sem_2yr_male = $row['total_fhe_2sem_2yr_male'];
            $total_fhe_2sem_2yr_female = $row['total_fhe_2sem_2yr_female'];
            $total_fhe_2sem_3yr_male = $row['total_fhe_2sem_3yr_male'];
            $total_fhe_2sem_3yr_female = $row['total_fhe_2sem_3yr_female'];
            $total_fhe_2sem_4yr_male = $row['total_fhe_2sem_4yr_male'];
            $total_fhe_2sem_4yr_female = $row['total_fhe_2sem_4yr_female'];
            $total_fhe_2sem_5yr_male = $row['total_fhe_2sem_5yr_male'];
            $total_fhe_2sem_5yr_female = $row['total_fhe_2sem_5yr_female'];
            $total_fhe_2sem_6yr_male = $row['total_fhe_2sem_6yr_male'];
            $total_fhe_2sem_6yr_female = $row['total_fhe_2sem_6yr_female'];

            //3rd Sem
            $total_fhe_3sem_1yr_male = $row['total_fhe_3sem_1yr_male'];
            $total_fhe_3sem_1yr_female = $row['total_fhe_3sem_1yr_female'];
            $total_fhe_3sem_2yr_male = $row['total_fhe_3sem_2yr_male'];
            $total_fhe_3sem_2yr_female = $row['total_fhe_3sem_2yr_female'];
            $total_fhe_3sem_3yr_male = $row['total_fhe_3sem_3yr_male'];
            $total_fhe_3sem_3yr_female = $row['total_fhe_3sem_3yr_female'];
            $total_fhe_3sem_4yr_male = $row['total_fhe_3sem_4yr_male'];
            $total_fhe_3sem_4yr_female = $row['total_fhe_3sem_4yr_female'];
            $total_fhe_3sem_5yr_male = $row['total_fhe_3sem_5yr_male'];
            $total_fhe_3sem_5yr_female = $row['total_fhe_3sem_5yr_female'];
            $total_fhe_3sem_6yr_male = $row['total_fhe_3sem_6yr_male'];
            $total_fhe_3sem_6yr_female = $row['total_fhe_3sem_6yr_female'];

            $total_fhe_graduated_male = $row['total_fhe_graduated_male'];
            $total_fhe_graduated_female = $row['total_fhe_graduated_female'];
            $total_fhe_exceeded_mrr_male = $row['total_fhe_exceeded_mrr_male'];
            $total_fhe_exceeded_mrr_female = $row['total_fhe_exceeded_mrr_female'];

            echo "<tr>
            <td class='text-left'>$program_name</td>
            
            <td data-name='total_fhe_1sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_1yr_male</td>
            <td data-name='total_fhe_1sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_1yr_female</td>
            <td data-name='total_fhe_1sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_2yr_male</td>
            <td data-name='total_fhe_1sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_2yr_female</td>
            <td data-name='total_fhe_1sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_3yr_male</td>
            <td data-name='total_fhe_1sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_3yr_female</td>
            <td data-name='total_fhe_1sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_4yr_male</td>
            <td data-name='total_fhe_1sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_4yr_female</td>
            <td data-name='total_fhe_1sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_5yr_male</td>
            <td data-name='total_fhe_1sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_5yr_female</td>
            <td data-name='total_fhe_1sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_6yr_male</td>
            <td data-name='total_fhe_1sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_6yr_female</td>
    
            <td data-name='total_fhe_2sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_1yr_male</td>
            <td data-name='total_fhe_2sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_1yr_female</td>
            <td data-name='total_fhe_2sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_2yr_male</td>
            <td data-name='total_fhe_2sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_2yr_female</td>
            <td data-name='total_fhe_2sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_3yr_male</td>
            <td data-name='total_fhe_2sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_3yr_female</td>
            <td data-name='total_fhe_2sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_4yr_male</td>
            <td data-name='total_fhe_2sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_4yr_female</td>
            <td data-name='total_fhe_2sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_5yr_male</td>
            <td data-name='total_fhe_2sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_5yr_female</td>
            <td data-name='total_fhe_2sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_6yr_male</td>
            <td data-name='total_fhe_2sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_6yr_female</td>
           
            <td data-name='total_fhe_3sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_1yr_male</td>
            <td data-name='total_fhe_3sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_1yr_female</td>
            <td data-name='total_fhe_3sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_2yr_male</td>
            <td data-name='total_fhe_3sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_2yr_female</td>
            <td data-name='total_fhe_3sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_3yr_male</td>
            <td data-name='total_fhe_3sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_3yr_female</td>
            <td data-name='total_fhe_3sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_4yr_male</td>
            <td data-name='total_fhe_3sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_4yr_female</td>
            <td data-name='total_fhe_3sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_5yr_male</td>
            <td data-name='total_fhe_3sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_5yr_female</td>
            <td data-name='total_fhe_3sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_6yr_male</td>
            <td data-name='total_fhe_3sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3sem_6yr_female</td>
    
            <td data-name='total_fhe_graduated_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_graduated_male</td>
            <td data-name='total_fhe_graduated_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_graduated_female</td>
            <td data-name='total_fhe_exceeded_mrr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_exceeded_mrr_male</td>
            <td data-name='total_fhe_exceeded_mrr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_exceeded_mrr_female</td>
            <td class='text-center'><button class='btn btn-info edit_data_fhe' data-bs-tooltip='' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button></td>
        </tr>";
        }
    }
    echo "</tbody>
    </table>
    ";
} else if ($ac_calendar == 'Semester with Summer') {
    echo "
        <table id='tbl_programs_fhe' class='table-bordered tbl-style stripe table-sm' style='width: 100%; display'>
        <thead>
            <tr>
                <th class='text-center' rowspan='4' colspan='1' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
                <th class='text-center' colspan='36' style='background-color: #3C70AB; color:#ffff;'>TOTAL FHE BENEFICIARIES</th>
                <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF FHE BENEFICIARIES WHO GRADUATED</th>
                <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. FHE BENEFICIARIES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
                <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;'>ACTIONS</th>
            </tr>
            <tr>
                <th class='text-center' colspan='12' style='background-color: #668EBD;'>1ST TERM</th>
                <th class='text-center' colspan='12' style='background-color: #668EBD;'>2ND TERM</th>
                <th class='text-center' colspan='12' style='background-color: #668EBD;'>SUMMER/MIDYEAR</th>
            </tr>
            <tr>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>
        
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>
        
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>
            </tr>
            <tr>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            </tr>
        <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program_code = $row['program_code'];
            $program_name = $row['program_name'];
            $gr_no = $row['gr_no'];
            $copc_no = $row['copc_no'];
            $in_the_portal = $row['in_the_portal'];

            //1st Sem
            $total_fhe_1sem_1yr_male = $row['total_fhe_1sem_1yr_male'];
            $total_fhe_1sem_1yr_female = $row['total_fhe_1sem_1yr_female'];
            $total_fhe_1sem_2yr_male = $row['total_fhe_1sem_2yr_male'];
            $total_fhe_1sem_2yr_female = $row['total_fhe_1sem_2yr_female'];
            $total_fhe_1sem_3yr_male = $row['total_fhe_1sem_3yr_male'];
            $total_fhe_1sem_3yr_female = $row['total_fhe_1sem_3yr_female'];
            $total_fhe_1sem_4yr_male = $row['total_fhe_1sem_4yr_male'];
            $total_fhe_1sem_4yr_female = $row['total_fhe_1sem_4yr_female'];
            $total_fhe_1sem_5yr_male = $row['total_fhe_1sem_5yr_male'];
            $total_fhe_1sem_5yr_female = $row['total_fhe_1sem_5yr_female'];
            $total_fhe_1sem_6yr_male = $row['total_fhe_1sem_6yr_male'];
            $total_fhe_1sem_6yr_female = $row['total_fhe_1sem_6yr_female'];

            //2nd Sem
            $total_fhe_2sem_1yr_male = $row['total_fhe_2sem_1yr_male'];
            $total_fhe_2sem_1yr_female = $row['total_fhe_2sem_1yr_female'];
            $total_fhe_2sem_2yr_male = $row['total_fhe_2sem_2yr_male'];
            $total_fhe_2sem_2yr_female = $row['total_fhe_2sem_2yr_female'];
            $total_fhe_2sem_3yr_male = $row['total_fhe_2sem_3yr_male'];
            $total_fhe_2sem_3yr_female = $row['total_fhe_2sem_3yr_female'];
            $total_fhe_2sem_4yr_male = $row['total_fhe_2sem_4yr_male'];
            $total_fhe_2sem_4yr_female = $row['total_fhe_2sem_4yr_female'];
            $total_fhe_2sem_5yr_male = $row['total_fhe_2sem_5yr_male'];
            $total_fhe_2sem_5yr_female = $row['total_fhe_2sem_5yr_female'];
            $total_fhe_2sem_6yr_male = $row['total_fhe_2sem_6yr_male'];
            $total_fhe_2sem_6yr_female = $row['total_fhe_2sem_6yr_female'];

            //Summer Midyear Sem
            $total_fhe_sum_mid_1yr_male = $row['total_fhe_sum_mid_1yr_male'];
            $total_fhe_sum_mid_1yr_female = $row['total_fhe_sum_mid_1yr_female'];
            $total_fhe_sum_mid_2yr_male = $row['total_fhe_sum_mid_2yr_male'];
            $total_fhe_sum_mid_2yr_female = $row['total_fhe_sum_mid_2yr_female'];
            $total_fhe_sum_mid_3yr_male = $row['total_fhe_sum_mid_3yr_male'];
            $total_fhe_sum_mid_3yr_female = $row['total_fhe_sum_mid_3yr_female'];
            $total_fhe_sum_mid_4yr_male = $row['total_fhe_sum_mid_4yr_male'];
            $total_fhe_sum_mid_4yr_female = $row['total_fhe_sum_mid_4yr_female'];
            $total_fhe_sum_mid_5yr_male = $row['total_fhe_sum_mid_5yr_male'];
            $total_fhe_sum_mid_5yr_female = $row['total_fhe_sum_mid_5yr_female'];
            $total_fhe_sum_mid_6yr_male = $row['total_fhe_sum_mid_6yr_male'];
            $total_fhe_sum_mid_6yr_female = $row['total_fhe_sum_mid_6yr_female'];

            $total_fhe_graduated_male = $row['total_fhe_graduated_male'];
            $total_fhe_graduated_female = $row['total_fhe_graduated_female'];
            $total_fhe_exceeded_mrr_male = $row['total_fhe_exceeded_mrr_male'];
            $total_fhe_exceeded_mrr_female = $row['total_fhe_exceeded_mrr_female'];

            echo "<tr>
                <td class='text-left'>$program_name</td>
                
                <td data-name='total_fhe_1sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_1yr_male</td>
                <td data-name='total_fhe_1sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_1yr_female</td>
                <td data-name='total_fhe_1sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_2yr_male</td>
                <td data-name='total_fhe_1sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_2yr_female</td>
                <td data-name='total_fhe_1sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_3yr_male</td>
                <td data-name='total_fhe_1sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_3yr_female</td>
                <td data-name='total_fhe_1sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_4yr_male</td>
                <td data-name='total_fhe_1sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_4yr_female</td>
                <td data-name='total_fhe_1sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_5yr_male</td>
                <td data-name='total_fhe_1sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_5yr_female</td>
                <td data-name='total_fhe_1sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_6yr_male</td>
                <td data-name='total_fhe_1sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_6yr_female</td>
        
                <td data-name='total_fhe_2sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_1yr_male</td>
                <td data-name='total_fhe_2sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_1yr_female</td>
                <td data-name='total_fhe_2sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_2yr_male</td>
                <td data-name='total_fhe_2sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_2yr_female</td>
                <td data-name='total_fhe_2sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_3yr_male</td>
                <td data-name='total_fhe_2sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_3yr_female</td>
                <td data-name='total_fhe_2sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_4yr_male</td>
                <td data-name='total_fhe_2sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_4yr_female</td>
                <td data-name='total_fhe_2sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_5yr_male</td>
                <td data-name='total_fhe_2sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_5yr_female</td>
                <td data-name='total_fhe_2sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_6yr_male</td>
                <td data-name='total_fhe_2sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_6yr_female</td>
        
                <td data-name='total_fhe_sum_mid_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_1yr_male</td>
                <td data-name='total_fhe_sum_mid_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_1yr_female</td>
                <td data-name='total_fhe_sum_mid_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_2yr_male</td>
                <td data-name='total_fhe_sum_mid_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_2yr_female</td>
                <td data-name='total_fhe_sum_mid_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_3yr_male</td>
                <td data-name='total_fhe_sum_mid_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_3yr_female</td>
                <td data-name='total_fhe_sum_mid_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_4yr_male</td>
                <td data-name='total_fhe_sum_mid_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_4yr_female</td>
                <td data-name='total_fhe_sum_mid_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_5yr_male</td>
                <td data-name='total_fhe_sum_mid_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_5yr_female</td>
                <td data-name='total_fhe_sum_mid_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_6yr_male</td>
                <td data-name='total_fhe_sum_mid_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_6yr_female</td>
        
                <td data-name='total_fhe_graduated_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_graduated_male</td>
                <td data-name='total_fhe_graduated_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_graduated_female</td>
                <td data-name='total_fhe_exceeded_mrr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_exceeded_mrr_male</td>
                <td data-name='total_fhe_exceeded_mrr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_exceeded_mrr_female</td>
                <td class='text-center'><button class='btn btn-info edit_data_fhe' data-bs-tooltip='' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button></td>
            </tr>";
        }
    }
    echo "</tbody>
        </table>
        ";
} else {
    echo "
            <table id='tbl_programs_fhe' class='table-bordered tbl-style stripe table-sm' style='width: 100%; display'>
            <thead>
                <tr>
                    <th class='text-center' rowspan='4' colspan='1' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
                    <th class='text-center' colspan='24' style='background-color: #3C70AB; color:#ffff;'>TOTAL FHE BENEFICIARIES</th>
                    <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF FHE BENEFICIARIES WHO GRADUATED</th>
                    <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. FHE BENEFICIARIES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
                    <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;'>ACTIONS</th>
                </tr>
                <tr>
                    <th class='text-center' colspan='12' style='background-color: #668EBD;'>1ST TERM</th>
                    <th class='text-center' colspan='12' style='background-color: #668EBD;'>2ND TERM</th>
                </tr>
                <tr>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>
            
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>4TH YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>5TH YEAR</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>6TH YEAR</th>
                </tr>
                <tr>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                </tr>
            <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program_code = $row['program_code'];
            $program_name = $row['program_name'];
            $gr_no = $row['gr_no'];
            $copc_no = $row['copc_no'];
            $in_the_portal = $row['in_the_portal'];

            //1st Sem
            $total_fhe_1sem_1yr_male = $row['total_fhe_1sem_1yr_male'];
            $total_fhe_1sem_1yr_female = $row['total_fhe_1sem_1yr_female'];
            $total_fhe_1sem_2yr_male = $row['total_fhe_1sem_2yr_male'];
            $total_fhe_1sem_2yr_female = $row['total_fhe_1sem_2yr_female'];
            $total_fhe_1sem_3yr_male = $row['total_fhe_1sem_3yr_male'];
            $total_fhe_1sem_3yr_female = $row['total_fhe_1sem_3yr_female'];
            $total_fhe_1sem_4yr_male = $row['total_fhe_1sem_4yr_male'];
            $total_fhe_1sem_4yr_female = $row['total_fhe_1sem_4yr_female'];
            $total_fhe_1sem_5yr_male = $row['total_fhe_1sem_5yr_male'];
            $total_fhe_1sem_5yr_female = $row['total_fhe_1sem_5yr_female'];
            $total_fhe_1sem_6yr_male = $row['total_fhe_1sem_6yr_male'];
            $total_fhe_1sem_6yr_female = $row['total_fhe_1sem_6yr_female'];

            //2nd Sem
            $total_fhe_2sem_1yr_male = $row['total_fhe_2sem_1yr_male'];
            $total_fhe_2sem_1yr_female = $row['total_fhe_2sem_1yr_female'];
            $total_fhe_2sem_2yr_male = $row['total_fhe_2sem_2yr_male'];
            $total_fhe_2sem_2yr_female = $row['total_fhe_2sem_2yr_female'];
            $total_fhe_2sem_3yr_male = $row['total_fhe_2sem_3yr_male'];
            $total_fhe_2sem_3yr_female = $row['total_fhe_2sem_3yr_female'];
            $total_fhe_2sem_4yr_male = $row['total_fhe_2sem_4yr_male'];
            $total_fhe_2sem_4yr_female = $row['total_fhe_2sem_4yr_female'];
            $total_fhe_2sem_5yr_male = $row['total_fhe_2sem_5yr_male'];
            $total_fhe_2sem_5yr_female = $row['total_fhe_2sem_5yr_female'];
            $total_fhe_2sem_6yr_male = $row['total_fhe_2sem_6yr_male'];
            $total_fhe_2sem_6yr_female = $row['total_fhe_2sem_6yr_female'];

            $total_fhe_graduated_male = $row['total_fhe_graduated_male'];
            $total_fhe_graduated_female = $row['total_fhe_graduated_female'];
            $total_fhe_exceeded_mrr_male = $row['total_fhe_exceeded_mrr_male'];
            $total_fhe_exceeded_mrr_female = $row['total_fhe_exceeded_mrr_female'];

            echo "<tr>
                    <td class='text-left'>$program_name</td>
                    
                    <td data-name='total_fhe_1sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_1yr_male</td>
                    <td data-name='total_fhe_1sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_1yr_female</td>
                    <td data-name='total_fhe_1sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_2yr_male</td>
                    <td data-name='total_fhe_1sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_2yr_female</td>
                    <td data-name='total_fhe_1sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_3yr_male</td>
                    <td data-name='total_fhe_1sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_3yr_female</td>
                    <td data-name='total_fhe_1sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_4yr_male</td>
                    <td data-name='total_fhe_1sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_4yr_female</td>
                    <td data-name='total_fhe_1sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_5yr_male</td>
                    <td data-name='total_fhe_1sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_5yr_female</td>
                    <td data-name='total_fhe_1sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_6yr_male</td>
                    <td data-name='total_fhe_1sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1sem_6yr_female</td>
            
                    <td data-name='total_fhe_2sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_1yr_male</td>
                    <td data-name='total_fhe_2sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_1yr_female</td>
                    <td data-name='total_fhe_2sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_2yr_male</td>
                    <td data-name='total_fhe_2sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_2yr_female</td>
                    <td data-name='total_fhe_2sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_3yr_male</td>
                    <td data-name='total_fhe_2sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_3yr_female</td>
                    <td data-name='total_fhe_2sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_4yr_male</td>
                    <td data-name='total_fhe_2sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_4yr_female</td>
                    <td data-name='total_fhe_2sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_5yr_male</td>
                    <td data-name='total_fhe_2sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_5yr_female</td>
                    <td data-name='total_fhe_2sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_6yr_male</td>
                    <td data-name='total_fhe_2sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2sem_6yr_female</td>
            
                    <td data-name='total_fhe_graduated_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_graduated_male</td>
                    <td data-name='total_fhe_graduated_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_graduated_female</td>
                    <td data-name='total_fhe_exceeded_mrr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_exceeded_mrr_male</td>
                    <td data-name='total_fhe_exceeded_mrr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_exceeded_mrr_female</td>
                    <td class='text-center'><button class='btn btn-info edit_data_fhe' data-bs-tooltip='' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button></td>
                </tr>";
        }
    }
    echo "</tbody>
            </table>
            ";
}
