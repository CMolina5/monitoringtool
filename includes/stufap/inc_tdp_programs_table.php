<?php

$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_tdp_1sem_1yr_male > 0 OR total_tdp_1sem_1yr_female > 0 OR total_tdp_2sem_1yr_male > 0 OR total_tdp_2sem_1yr_female > 0)";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($ac_calendar == 'Trimester with Summer') {
    echo "
<table id='tbl_programs_tdp' class='table-bordered tbl-style stripe' style='width: 100%;'>
<thead>
    <tr>
        <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_tdp_programs_checkbox'></th>
        <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
        <th class='text-center' colspan='48' style='background-color: #3C70AB; color:#ffff;'>TOTAL TDP GRANTEES</th>
        <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF TDP GRANTEES WHO GRADUATED</th>
        <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. TDP GRANTEES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
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
</thead>
<tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program_name = $row['program_name'];

            $total_tdp_1sem_1yr_male = $row['total_tdp_1sem_1yr_male'];
            $total_tdp_1sem_1yr_female = $row['total_tdp_1sem_1yr_female'];
            $total_tdp_1sem_2yr_male = $row['total_tdp_1sem_2yr_male'];
            $total_tdp_1sem_2yr_female = $row['total_tdp_1sem_2yr_female'];
            $total_tdp_1sem_3yr_male = $row['total_tdp_1sem_3yr_male'];
            $total_tdp_1sem_3yr_female = $row['total_tdp_1sem_3yr_female'];
            $total_tdp_1sem_4yr_male = $row['total_tdp_1sem_4yr_male'];
            $total_tdp_1sem_4yr_female = $row['total_tdp_1sem_4yr_female'];
            $total_tdp_1sem_5yr_male = $row['total_tdp_1sem_5yr_male'];
            $total_tdp_1sem_5yr_female = $row['total_tdp_1sem_5yr_female'];
            $total_tdp_1sem_6yr_male = $row['total_tdp_1sem_6yr_male'];
            $total_tdp_1sem_6yr_female = $row['total_tdp_1sem_6yr_female'];

            $total_tdp_2sem_1yr_male = $row['total_tdp_2sem_1yr_male'];
            $total_tdp_2sem_1yr_female = $row['total_tdp_2sem_1yr_female'];
            $total_tdp_2sem_2yr_male = $row['total_tdp_2sem_2yr_male'];
            $total_tdp_2sem_2yr_female = $row['total_tdp_2sem_2yr_female'];
            $total_tdp_2sem_3yr_male = $row['total_tdp_2sem_3yr_male'];
            $total_tdp_2sem_3yr_female = $row['total_tdp_2sem_3yr_female'];
            $total_tdp_2sem_4yr_male = $row['total_tdp_2sem_4yr_male'];
            $total_tdp_2sem_4yr_female = $row['total_tdp_2sem_4yr_female'];
            $total_tdp_2sem_5yr_male = $row['total_tdp_2sem_5yr_male'];
            $total_tdp_2sem_5yr_female = $row['total_tdp_2sem_5yr_female'];
            $total_tdp_2sem_6yr_male = $row['total_tdp_2sem_6yr_male'];
            $total_tdp_2sem_6yr_female = $row['total_tdp_2sem_6yr_female'];

            $total_tdp_3sem_1yr_male = $row['total_tdp_3sem_1yr_male'];
            $total_tdp_3sem_1yr_female = $row['total_tdp_3sem_1yr_female'];
            $total_tdp_3sem_2yr_male = $row['total_tdp_3sem_2yr_male'];
            $total_tdp_3sem_2yr_female = $row['total_tdp_3sem_2yr_female'];
            $total_tdp_3sem_3yr_male = $row['total_tdp_3sem_3yr_male'];
            $total_tdp_3sem_3yr_female = $row['total_tdp_3sem_3yr_female'];
            $total_tdp_3sem_4yr_male = $row['total_tdp_3sem_4yr_male'];
            $total_tdp_3sem_4yr_female = $row['total_tdp_3sem_4yr_female'];
            $total_tdp_3sem_5yr_male = $row['total_tdp_3sem_5yr_male'];
            $total_tdp_3sem_5yr_female = $row['total_tdp_3sem_5yr_female'];
            $total_tdp_3sem_6yr_male = $row['total_tdp_3sem_6yr_male'];
            $total_tdp_3sem_6yr_female = $row['total_tdp_3sem_6yr_female'];

            $total_tdp_sum_mid_1yr_male = $row['total_tdp_sum_mid_1yr_male'];
            $total_tdp_sum_mid_1yr_female = $row['total_tdp_sum_mid_1yr_female'];
            $total_tdp_sum_mid_2yr_male = $row['total_tdp_sum_mid_2yr_male'];
            $total_tdp_sum_mid_2yr_female = $row['total_tdp_sum_mid_2yr_female'];
            $total_tdp_sum_mid_3yr_male = $row['total_tdp_sum_mid_3yr_male'];
            $total_tdp_sum_mid_3yr_female = $row['total_tdp_sum_mid_3yr_female'];
            $total_tdp_sum_mid_4yr_male = $row['total_tdp_sum_mid_4yr_male'];
            $total_tdp_sum_mid_4yr_female = $row['total_tdp_sum_mid_4yr_female'];
            $total_tdp_sum_mid_5yr_male = $row['total_tdp_sum_mid_5yr_male'];
            $total_tdp_sum_mid_5yr_female = $row['total_tdp_sum_mid_5yr_female'];
            $total_tdp_sum_mid_6yr_male = $row['total_tdp_sum_mid_6yr_male'];
            $total_tdp_sum_mid_6yr_female = $row['total_tdp_sum_mid_6yr_female'];

            $total_tdp_graduated_male = $row['total_tdp_graduated_male'];
            $total_tdp_graduated_female = $row['total_tdp_graduated_female'];
            $total_tdp_exceeded_mrr_male = $row['total_tdp_exceeded_mrr_male'];
            $total_tdp_exceeded_mrr_female = $row['total_tdp_exceeded_mrr_female'];

            echo "
        <tr>
            <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='tdp_programs_checkbox' value='$uid'></td>
            <td class='text-left'>$program_name</td>

            <td data-name='total_tdp_1sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_1yr_male</td>
            <td data-name='total_tdp_1sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_1yr_female</td>
            <td data-name='total_tdp_1sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_2yr_male</td>
            <td data-name='total_tdp_1sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_2yr_female</td>
            <td data-name='total_tdp_1sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_3yr_male</td>
            <td data-name='total_tdp_1sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_3yr_female</td>
            <td data-name='total_tdp_1sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_4yr_male</td>
            <td data-name='total_tdp_1sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_4yr_female</td>
            <td data-name='total_tdp_1sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_5yr_male</td>
            <td data-name='total_tdp_1sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_5yr_female</td>
            <td data-name='total_tdp_1sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_6yr_male</td>
            <td data-name='total_tdp_1sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_6yr_female</td>

            <td data-name='total_tdp_2sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_1yr_male</td>
            <td data-name='total_tdp_2sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_1yr_female</td>
            <td data-name='total_tdp_2sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_2yr_male</td>
            <td data-name='total_tdp_2sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_2yr_female</td>
            <td data-name='total_tdp_2sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_3yr_male</td>
            <td data-name='total_tdp_2sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_3yr_female</td>
            <td data-name='total_tdp_2sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_4yr_male</td>
            <td data-name='total_tdp_2sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_4yr_female</td>
            <td data-name='total_tdp_2sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_5yr_male</td>
            <td data-name='total_tdp_2sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_5yr_female</td>
            <td data-name='total_tdp_2sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_6yr_male</td>
            <td data-name='total_tdp_2sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_6yr_female</td>

            <td data-name='total_tdp_3sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_1yr_male</td>
            <td data-name='total_tdp_3sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_1yr_female</td>
            <td data-name='total_tdp_3sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_2yr_male</td>
            <td data-name='total_tdp_3sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_2yr_female</td>
            <td data-name='total_tdp_3sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_3yr_male</td>
            <td data-name='total_tdp_3sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_3yr_female</td>
            <td data-name='total_tdp_3sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_4yr_male</td>
            <td data-name='total_tdp_3sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_4yr_female</td>
            <td data-name='total_tdp_3sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_5yr_male</td>
            <td data-name='total_tdp_3sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_5yr_female</td>
            <td data-name='total_tdp_3sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_6yr_male</td>
            <td data-name='total_tdp_3sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_6yr_female</td>

            <td data-name='total_tdp_sum_mid_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_1yr_male</td>
            <td data-name='total_tdp_sum_mid_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_1yr_female</td>
            <td data-name='total_tdp_sum_mid_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_2yr_male</td>
            <td data-name='total_tdp_sum_mid_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_2yr_female</td>
            <td data-name='total_tdp_sum_mid_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_3yr_male</td>
            <td data-name='total_tdp_sum_mid_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_3yr_female</td>
            <td data-name='total_tdp_sum_mid_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_4yr_male</td>
            <td data-name='total_tdp_sum_mid_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_4yr_female</td>
            <td data-name='total_tdp_sum_mid_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_5yr_male</td>
            <td data-name='total_tdp_sum_mid_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_5yr_female</td>
            <td data-name='total_tdp_sum_mid_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_6yr_male</td>
            <td data-name='total_tdp_sum_mid_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_6yr_female</td>

            <td data-name='total_tdp_graduated_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_graduated_male</td>
            <td data-name='total_tdp_graduated_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_graduated_female</td>
            <td data-name='total_tdp_exceeded_mrr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_exceeded_mrr_male</td>
            <td data-name='total_tdp_exceeded_mrr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_exceeded_mrr_female</td>

        </tr>";
        }
    }
    echo "</tbody>
</table>
";
} else if ($ac_calendar == 'Trimester') {
    echo "
    <table id='tbl_programs_tdp' class='table-bordered tbl-style stripe' style='width: 100%;'>
    <thead>
        <tr>
            <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_tdp_programs_checkbox'></th>
            <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
            <th class='text-center' colspan='36' style='background-color: #3C70AB; color:#ffff;'>TOTAL TDP GRANTEES</th>
            <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF TDP GRANTEES WHO GRADUATED</th>
            <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. TDP GRANTEES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
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
    </thead>
    <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program_name = $row['program_name'];

            $total_tdp_1sem_1yr_male = $row['total_tdp_1sem_1yr_male'];
            $total_tdp_1sem_1yr_female = $row['total_tdp_1sem_1yr_female'];
            $total_tdp_1sem_2yr_male = $row['total_tdp_1sem_2yr_male'];
            $total_tdp_1sem_2yr_female = $row['total_tdp_1sem_2yr_female'];
            $total_tdp_1sem_3yr_male = $row['total_tdp_1sem_3yr_male'];
            $total_tdp_1sem_3yr_female = $row['total_tdp_1sem_3yr_female'];
            $total_tdp_1sem_4yr_male = $row['total_tdp_1sem_4yr_male'];
            $total_tdp_1sem_4yr_female = $row['total_tdp_1sem_4yr_female'];
            $total_tdp_1sem_5yr_male = $row['total_tdp_1sem_5yr_male'];
            $total_tdp_1sem_5yr_female = $row['total_tdp_1sem_5yr_female'];
            $total_tdp_1sem_6yr_male = $row['total_tdp_1sem_6yr_male'];
            $total_tdp_1sem_6yr_female = $row['total_tdp_1sem_6yr_female'];

            $total_tdp_2sem_1yr_male = $row['total_tdp_2sem_1yr_male'];
            $total_tdp_2sem_1yr_female = $row['total_tdp_2sem_1yr_female'];
            $total_tdp_2sem_2yr_male = $row['total_tdp_2sem_2yr_male'];
            $total_tdp_2sem_2yr_female = $row['total_tdp_2sem_2yr_female'];
            $total_tdp_2sem_3yr_male = $row['total_tdp_2sem_3yr_male'];
            $total_tdp_2sem_3yr_female = $row['total_tdp_2sem_3yr_female'];
            $total_tdp_2sem_4yr_male = $row['total_tdp_2sem_4yr_male'];
            $total_tdp_2sem_4yr_female = $row['total_tdp_2sem_4yr_female'];
            $total_tdp_2sem_5yr_male = $row['total_tdp_2sem_5yr_male'];
            $total_tdp_2sem_5yr_female = $row['total_tdp_2sem_5yr_female'];
            $total_tdp_2sem_6yr_male = $row['total_tdp_2sem_6yr_male'];
            $total_tdp_2sem_6yr_female = $row['total_tdp_2sem_6yr_female'];

            $total_tdp_3sem_1yr_male = $row['total_tdp_3sem_1yr_male'];
            $total_tdp_3sem_1yr_female = $row['total_tdp_3sem_1yr_female'];
            $total_tdp_3sem_2yr_male = $row['total_tdp_3sem_2yr_male'];
            $total_tdp_3sem_2yr_female = $row['total_tdp_3sem_2yr_female'];
            $total_tdp_3sem_3yr_male = $row['total_tdp_3sem_3yr_male'];
            $total_tdp_3sem_3yr_female = $row['total_tdp_3sem_3yr_female'];
            $total_tdp_3sem_4yr_male = $row['total_tdp_3sem_4yr_male'];
            $total_tdp_3sem_4yr_female = $row['total_tdp_3sem_4yr_female'];
            $total_tdp_3sem_5yr_male = $row['total_tdp_3sem_5yr_male'];
            $total_tdp_3sem_5yr_female = $row['total_tdp_3sem_5yr_female'];
            $total_tdp_3sem_6yr_male = $row['total_tdp_3sem_6yr_male'];
            $total_tdp_3sem_6yr_female = $row['total_tdp_3sem_6yr_female'];

            $total_tdp_graduated_male = $row['total_tdp_graduated_male'];
            $total_tdp_graduated_female = $row['total_tdp_graduated_female'];
            $total_tdp_exceeded_mrr_male = $row['total_tdp_exceeded_mrr_male'];
            $total_tdp_exceeded_mrr_female = $row['total_tdp_exceeded_mrr_female'];

            echo "
            <tr>
                <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='tdp_programs_checkbox' value='$uid'></td>
                <td class='text-left'>$program_name</td>
    
                <td data-name='total_tdp_1sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_1yr_male</td>
                <td data-name='total_tdp_1sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_1yr_female</td>
                <td data-name='total_tdp_1sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_2yr_male</td>
                <td data-name='total_tdp_1sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_2yr_female</td>
                <td data-name='total_tdp_1sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_3yr_male</td>
                <td data-name='total_tdp_1sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_3yr_female</td>
                <td data-name='total_tdp_1sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_4yr_male</td>
                <td data-name='total_tdp_1sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_4yr_female</td>
                <td data-name='total_tdp_1sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_5yr_male</td>
                <td data-name='total_tdp_1sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_5yr_female</td>
                <td data-name='total_tdp_1sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_6yr_male</td>
                <td data-name='total_tdp_1sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_6yr_female</td>
    
                <td data-name='total_tdp_2sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_1yr_male</td>
                <td data-name='total_tdp_2sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_1yr_female</td>
                <td data-name='total_tdp_2sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_2yr_male</td>
                <td data-name='total_tdp_2sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_2yr_female</td>
                <td data-name='total_tdp_2sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_3yr_male</td>
                <td data-name='total_tdp_2sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_3yr_female</td>
                <td data-name='total_tdp_2sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_4yr_male</td>
                <td data-name='total_tdp_2sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_4yr_female</td>
                <td data-name='total_tdp_2sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_5yr_male</td>
                <td data-name='total_tdp_2sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_5yr_female</td>
                <td data-name='total_tdp_2sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_6yr_male</td>
                <td data-name='total_tdp_2sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_6yr_female</td>
    
                <td data-name='total_tdp_3sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_1yr_male</td>
                <td data-name='total_tdp_3sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_1yr_female</td>
                <td data-name='total_tdp_3sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_2yr_male</td>
                <td data-name='total_tdp_3sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_2yr_female</td>
                <td data-name='total_tdp_3sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_3yr_male</td>
                <td data-name='total_tdp_3sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_3yr_female</td>
                <td data-name='total_tdp_3sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_4yr_male</td>
                <td data-name='total_tdp_3sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_4yr_female</td>
                <td data-name='total_tdp_3sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_5yr_male</td>
                <td data-name='total_tdp_3sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_5yr_female</td>
                <td data-name='total_tdp_3sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_6yr_male</td>
                <td data-name='total_tdp_3sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_3sem_6yr_female</td>
    
                <td data-name='total_tdp_graduated_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_graduated_male</td>
                <td data-name='total_tdp_graduated_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_graduated_female</td>
                <td data-name='total_tdp_exceeded_mrr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_exceeded_mrr_male</td>
                <td data-name='total_tdp_exceeded_mrr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_exceeded_mrr_female</td>
    
            </tr>";
        }
    }
    echo "</tbody>
    </table>
    ";
} else if ($ac_calendar == 'Semester with Summer') {
    echo "
        <table id='tbl_programs_tdp' class='table-bordered tbl-style stripe' style='width: 100%;'>
        <thead>
            <tr>
                <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_tdp_programs_checkbox'></th>
                <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
                <th class='text-center' colspan='36' style='background-color: #3C70AB; color:#ffff;'>TOTAL TDP GRANTEES</th>
                <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF TDP GRANTEES WHO GRADUATED</th>
                <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. TDP GRANTEES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
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
        </thead>
        <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program_name = $row['program_name'];

            $total_tdp_1sem_1yr_male = $row['total_tdp_1sem_1yr_male'];
            $total_tdp_1sem_1yr_female = $row['total_tdp_1sem_1yr_female'];
            $total_tdp_1sem_2yr_male = $row['total_tdp_1sem_2yr_male'];
            $total_tdp_1sem_2yr_female = $row['total_tdp_1sem_2yr_female'];
            $total_tdp_1sem_3yr_male = $row['total_tdp_1sem_3yr_male'];
            $total_tdp_1sem_3yr_female = $row['total_tdp_1sem_3yr_female'];
            $total_tdp_1sem_4yr_male = $row['total_tdp_1sem_4yr_male'];
            $total_tdp_1sem_4yr_female = $row['total_tdp_1sem_4yr_female'];
            $total_tdp_1sem_5yr_male = $row['total_tdp_1sem_5yr_male'];
            $total_tdp_1sem_5yr_female = $row['total_tdp_1sem_5yr_female'];
            $total_tdp_1sem_6yr_male = $row['total_tdp_1sem_6yr_male'];
            $total_tdp_1sem_6yr_female = $row['total_tdp_1sem_6yr_female'];

            $total_tdp_2sem_1yr_male = $row['total_tdp_2sem_1yr_male'];
            $total_tdp_2sem_1yr_female = $row['total_tdp_2sem_1yr_female'];
            $total_tdp_2sem_2yr_male = $row['total_tdp_2sem_2yr_male'];
            $total_tdp_2sem_2yr_female = $row['total_tdp_2sem_2yr_female'];
            $total_tdp_2sem_3yr_male = $row['total_tdp_2sem_3yr_male'];
            $total_tdp_2sem_3yr_female = $row['total_tdp_2sem_3yr_female'];
            $total_tdp_2sem_4yr_male = $row['total_tdp_2sem_4yr_male'];
            $total_tdp_2sem_4yr_female = $row['total_tdp_2sem_4yr_female'];
            $total_tdp_2sem_5yr_male = $row['total_tdp_2sem_5yr_male'];
            $total_tdp_2sem_5yr_female = $row['total_tdp_2sem_5yr_female'];
            $total_tdp_2sem_6yr_male = $row['total_tdp_2sem_6yr_male'];
            $total_tdp_2sem_6yr_female = $row['total_tdp_2sem_6yr_female'];

            $total_tdp_sum_mid_1yr_male = $row['total_tdp_sum_mid_1yr_male'];
            $total_tdp_sum_mid_1yr_female = $row['total_tdp_sum_mid_1yr_female'];
            $total_tdp_sum_mid_2yr_male = $row['total_tdp_sum_mid_2yr_male'];
            $total_tdp_sum_mid_2yr_female = $row['total_tdp_sum_mid_2yr_female'];
            $total_tdp_sum_mid_3yr_male = $row['total_tdp_sum_mid_3yr_male'];
            $total_tdp_sum_mid_3yr_female = $row['total_tdp_sum_mid_3yr_female'];
            $total_tdp_sum_mid_4yr_male = $row['total_tdp_sum_mid_4yr_male'];
            $total_tdp_sum_mid_4yr_female = $row['total_tdp_sum_mid_4yr_female'];
            $total_tdp_sum_mid_5yr_male = $row['total_tdp_sum_mid_5yr_male'];
            $total_tdp_sum_mid_5yr_female = $row['total_tdp_sum_mid_5yr_female'];
            $total_tdp_sum_mid_6yr_male = $row['total_tdp_sum_mid_6yr_male'];
            $total_tdp_sum_mid_6yr_female = $row['total_tdp_sum_mid_6yr_female'];

            $total_tdp_graduated_male = $row['total_tdp_graduated_male'];
            $total_tdp_graduated_female = $row['total_tdp_graduated_female'];
            $total_tdp_exceeded_mrr_male = $row['total_tdp_exceeded_mrr_male'];
            $total_tdp_exceeded_mrr_female = $row['total_tdp_exceeded_mrr_female'];

            echo "
                <tr>
                    <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='tdp_programs_checkbox' value='$uid'></td>
                    <td class='text-left'>$program_name</td>
        
                    <td data-name='total_tdp_1sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_1yr_male</td>
                    <td data-name='total_tdp_1sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_1yr_female</td>
                    <td data-name='total_tdp_1sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_2yr_male</td>
                    <td data-name='total_tdp_1sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_2yr_female</td>
                    <td data-name='total_tdp_1sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_3yr_male</td>
                    <td data-name='total_tdp_1sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_3yr_female</td>
                    <td data-name='total_tdp_1sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_4yr_male</td>
                    <td data-name='total_tdp_1sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_4yr_female</td>
                    <td data-name='total_tdp_1sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_5yr_male</td>
                    <td data-name='total_tdp_1sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_5yr_female</td>
                    <td data-name='total_tdp_1sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_6yr_male</td>
                    <td data-name='total_tdp_1sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_6yr_female</td>
        
                    <td data-name='total_tdp_2sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_1yr_male</td>
                    <td data-name='total_tdp_2sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_1yr_female</td>
                    <td data-name='total_tdp_2sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_2yr_male</td>
                    <td data-name='total_tdp_2sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_2yr_female</td>
                    <td data-name='total_tdp_2sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_3yr_male</td>
                    <td data-name='total_tdp_2sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_3yr_female</td>
                    <td data-name='total_tdp_2sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_4yr_male</td>
                    <td data-name='total_tdp_2sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_4yr_female</td>
                    <td data-name='total_tdp_2sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_5yr_male</td>
                    <td data-name='total_tdp_2sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_5yr_female</td>
                    <td data-name='total_tdp_2sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_6yr_male</td>
                    <td data-name='total_tdp_2sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_6yr_female</td>
        
                    <td data-name='total_tdp_sum_mid_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_1yr_male</td>
                    <td data-name='total_tdp_sum_mid_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_1yr_female</td>
                    <td data-name='total_tdp_sum_mid_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_2yr_male</td>
                    <td data-name='total_tdp_sum_mid_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_2yr_female</td>
                    <td data-name='total_tdp_sum_mid_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_3yr_male</td>
                    <td data-name='total_tdp_sum_mid_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_3yr_female</td>
                    <td data-name='total_tdp_sum_mid_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_4yr_male</td>
                    <td data-name='total_tdp_sum_mid_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_4yr_female</td>
                    <td data-name='total_tdp_sum_mid_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_5yr_male</td>
                    <td data-name='total_tdp_sum_mid_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_5yr_female</td>
                    <td data-name='total_tdp_sum_mid_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_6yr_male</td>
                    <td data-name='total_tdp_sum_mid_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_sum_mid_6yr_female</td>
        
                    <td data-name='total_tdp_graduated_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_graduated_male</td>
                    <td data-name='total_tdp_graduated_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_graduated_female</td>
                    <td data-name='total_tdp_exceeded_mrr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_exceeded_mrr_male</td>
                    <td data-name='total_tdp_exceeded_mrr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_exceeded_mrr_female</td>
        
                </tr>";
        }
    }
    echo "</tbody>
        </table>
        ";
} else {
    echo "
            <table id='tbl_programs_tdp' class='table-bordered tbl-style stripe' style='width: 100%;'>
            <thead>
                <tr>
                    <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_tdp_programs_checkbox'></th>
                    <th class='text-center' rowspan='4' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
                    <th class='text-center' colspan='24' style='background-color: #3C70AB; color:#ffff;'>TOTAL TDP GRANTEES</th>
                    <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF TDP GRANTEES WHO GRADUATED</th>
                    <th class='text-center' rowspan='3' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. TDP GRANTEES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
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
            </thead>
            <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program_name = $row['program_name'];

            $total_tdp_1sem_1yr_male = $row['total_tdp_1sem_1yr_male'];
            $total_tdp_1sem_1yr_female = $row['total_tdp_1sem_1yr_female'];
            $total_tdp_1sem_2yr_male = $row['total_tdp_1sem_2yr_male'];
            $total_tdp_1sem_2yr_female = $row['total_tdp_1sem_2yr_female'];
            $total_tdp_1sem_3yr_male = $row['total_tdp_1sem_3yr_male'];
            $total_tdp_1sem_3yr_female = $row['total_tdp_1sem_3yr_female'];
            $total_tdp_1sem_4yr_male = $row['total_tdp_1sem_4yr_male'];
            $total_tdp_1sem_4yr_female = $row['total_tdp_1sem_4yr_female'];
            $total_tdp_1sem_5yr_male = $row['total_tdp_1sem_5yr_male'];
            $total_tdp_1sem_5yr_female = $row['total_tdp_1sem_5yr_female'];
            $total_tdp_1sem_6yr_male = $row['total_tdp_1sem_6yr_male'];
            $total_tdp_1sem_6yr_female = $row['total_tdp_1sem_6yr_female'];

            $total_tdp_2sem_1yr_male = $row['total_tdp_2sem_1yr_male'];
            $total_tdp_2sem_1yr_female = $row['total_tdp_2sem_1yr_female'];
            $total_tdp_2sem_2yr_male = $row['total_tdp_2sem_2yr_male'];
            $total_tdp_2sem_2yr_female = $row['total_tdp_2sem_2yr_female'];
            $total_tdp_2sem_3yr_male = $row['total_tdp_2sem_3yr_male'];
            $total_tdp_2sem_3yr_female = $row['total_tdp_2sem_3yr_female'];
            $total_tdp_2sem_4yr_male = $row['total_tdp_2sem_4yr_male'];
            $total_tdp_2sem_4yr_female = $row['total_tdp_2sem_4yr_female'];
            $total_tdp_2sem_5yr_male = $row['total_tdp_2sem_5yr_male'];
            $total_tdp_2sem_5yr_female = $row['total_tdp_2sem_5yr_female'];
            $total_tdp_2sem_6yr_male = $row['total_tdp_2sem_6yr_male'];
            $total_tdp_2sem_6yr_female = $row['total_tdp_2sem_6yr_female'];

            $total_tdp_graduated_male = $row['total_tdp_graduated_male'];
            $total_tdp_graduated_female = $row['total_tdp_graduated_female'];
            $total_tdp_exceeded_mrr_male = $row['total_tdp_exceeded_mrr_male'];
            $total_tdp_exceeded_mrr_female = $row['total_tdp_exceeded_mrr_female'];

            echo "
                    <tr>
                        <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='tdp_programs_checkbox' value='$uid'></td>
                        <td class='text-left'>$program_name</td>
            
                        <td data-name='total_tdp_1sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_1yr_male</td>
                        <td data-name='total_tdp_1sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_1yr_female</td>
                        <td data-name='total_tdp_1sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_2yr_male</td>
                        <td data-name='total_tdp_1sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_2yr_female</td>
                        <td data-name='total_tdp_1sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_3yr_male</td>
                        <td data-name='total_tdp_1sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_3yr_female</td>
                        <td data-name='total_tdp_1sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_4yr_male</td>
                        <td data-name='total_tdp_1sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_4yr_female</td>
                        <td data-name='total_tdp_1sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_5yr_male</td>
                        <td data-name='total_tdp_1sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_5yr_female</td>
                        <td data-name='total_tdp_1sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_6yr_male</td>
                        <td data-name='total_tdp_1sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_1sem_6yr_female</td>
            
                        <td data-name='total_tdp_2sem_1yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_1yr_male</td>
                        <td data-name='total_tdp_2sem_1yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_1yr_female</td>
                        <td data-name='total_tdp_2sem_2yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_2yr_male</td>
                        <td data-name='total_tdp_2sem_2yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_2yr_female</td>
                        <td data-name='total_tdp_2sem_3yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_3yr_male</td>
                        <td data-name='total_tdp_2sem_3yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_3yr_female</td>
                        <td data-name='total_tdp_2sem_4yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_4yr_male</td>
                        <td data-name='total_tdp_2sem_4yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_4yr_female</td>
                        <td data-name='total_tdp_2sem_5yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_5yr_male</td>
                        <td data-name='total_tdp_2sem_5yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_5yr_female</td>
                        <td data-name='total_tdp_2sem_6yr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_6yr_male</td>
                        <td data-name='total_tdp_2sem_6yr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_2sem_6yr_female</td>

                        <td data-name='total_tdp_graduated_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_graduated_male</td>
                        <td data-name='total_tdp_graduated_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_graduated_female</td>
                        <td data-name='total_tdp_exceeded_mrr_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_exceeded_mrr_male</td>
                        <td data-name='total_tdp_exceeded_mrr_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tdp_exceeded_mrr_female</td>
            
                    </tr>";
        }
    }
    echo "</tbody>
            </table>
            ";
}
