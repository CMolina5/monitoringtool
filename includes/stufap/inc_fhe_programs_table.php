<?php

$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);



echo "
<table id='tbl_programs_fhe' class='table-bordered tbl-style stripe' style='width: 100%;'>
<thead>
    <tr>
        <th class='text-center' rowspan='3' colspan='1' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
        <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>TOTAL FHE BENEFICIARIES</th>
        <th class='text-center' colspan='2' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF FHE BENEFICIARIES WHO GRADUATED</th>
        <th class='text-center' rowspan='2' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. FHE BENEFICIARIES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
        <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;'>ACTIONS</th>
    </tr>
    <tr>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST TERM</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND TERM</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>3RD TERM</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>SUMMER/MIDYEAR</th>
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
        $total_fhe_1st_male=$row['total_fhe_1st_male'];
        $total_fhe_1st_female=$row['total_fhe_1st_female'];
        $total_fhe_2nd_male=$row['total_fhe_2nd_male'];
        $total_fhe_2nd_female=$row['total_fhe_2nd_female'];
        $total_fhe_3rd_male=$row['total_fhe_3rd_male'];
        $total_fhe_3rd_female=$row['total_fhe_3rd_female'];
        $total_fhe_summer_midyear_male=$row['total_fhe_summer_midyear_male'];
        $total_fhe_summer_midyear_female=$row['total_fhe_summer_midyear_female'];
        $total_fhe_graduated_male=$row['total_fhe_graduated_male'];
        $total_fhe_graduated_female=$row['total_fhe_graduated_female'];
        $total_fhe_exceeded_mrr_male=$row['total_fhe_exceeded_mrr_male'];
        $total_fhe_exceeded_mrr_female=$row['total_fhe_exceeded_mrr_female'];
        
    echo"<tr>
        <td class='text-left' style='width: 30%;'>$program_name</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_1st_male</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_1st_female</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_2nd_male</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_2nd_female</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_3rd_male</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_3rd_female</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_summer_midyear_male</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_summer_midyear_female</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_graduated_male</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_graduated_female</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_exceeded_mrr_male</td>
        <td class='text-center' style='width: 5%;'>$total_fhe_exceeded_mrr_female</td>
        <td class='text-center' style='width: 10%;'><button class='btn btn-info edit_data_fhe' data-bs-tooltip='' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button></td>
    </tr>";
    }
}
echo"</tbody>
</table>
";