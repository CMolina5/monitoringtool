<?php

$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_tdp_1st_male > 0 OR total_tdp_1st_female > 0 OR total_tdp_2nd_male > 0 OR total_tdp_2nd_female > 0)";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "
<table id='tbl_programs_tdp' class='table-bordered tbl-style stripe' style='width: 100%;'>
<thead>
    <tr>
        <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
        <th class='text-center' colspan='4' style='background-color: #3C70AB; color:#ffff;'>TOTAL TDP GRANTEES</th>
        <th class='text-center' rowspan='2' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. OF TDP GRANTEES WHO GRADUATED</th>
        <th class='text-center' rowspan='2' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. TDP GRANTEES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
        <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;'>ACTIONS</th>
    </tr>
    <tr>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>1ST SEMESTER</th>
        <th class='text-center' colspan='2' style='background-color: #668EBD;'>2ND SEMESTER</th>
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
    </tr>
</thead>
<tbody>";

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['uid'];
        $ac_year = $row['ac_year'];
        $program_name = $row['program_name'];
        $total_tdp_1st_male=$row['total_tdp_1st_male'];
        $total_tdp_1st_female=$row['total_tdp_1st_female'];
        $total_tdp_2nd_male=$row['total_tdp_2nd_male'];
        $total_tdp_2nd_female=$row['total_tdp_2nd_female'];
        $total_tdp_graduated_male=$row['total_tdp_graduated_male'];
        $total_tdp_graduated_female=$row['total_tdp_graduated_female'];
        $total_tdp_exceeded_mrr_male=$row['total_tdp_exceeded_mrr_male'];
        $total_tdp_exceeded_mrr_female=$row['total_tdp_exceeded_mrr_female'];
        
    echo"
        <tr>
            <td class='text-left' style='width: 35%;'>$program_name</td>
            <td class='text-center' style='width: 5%;'>$total_tdp_1st_male</td>
            <td class='text-center' style='width: 5%;'>$total_tdp_1st_female</td>
            <td class='text-center' style='width: 5%;'>$total_tdp_2nd_male</td>
            <td class='text-center' style='width: 5%;'>$total_tdp_2nd_female</td>
            <td class='text-center' style='width: 5%;'>$total_tdp_graduated_male</td>
            <td class='text-center' style='width: 5%;'>$total_tdp_graduated_female</td>
            <td class='text-center' style='width: 5%;'>$total_tdp_exceeded_mrr_male</td>
            <td class='text-center' style='width: 5%;'>$total_tdp_exceeded_mrr_female</td>
            <td class='text-center style='width: 25%;'>
                <button class='btn btn-info edit_program_tdp' data-bs-tooltip='' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button>
                <button class='btn btn-danger btn-table-margin remove_program_tdp' data-bs-tooltip='' type='button' title='Remove' name='remove' value='remove' id='$uid'><i class='fas fa-trash'></i></button>
            </td>
        </tr>";
    }
}
echo"</tbody>
</table>
";