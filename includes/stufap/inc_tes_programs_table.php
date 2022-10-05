<?php

$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_tes_exceeded_mrr_male > 0 OR total_tes_exceeded_mrr_female > 0) AND (total_tes_est_grad_male > 0 OR total_tes_est_grad_female > 0)";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "
<table id='tbl_programs_tes' class='table-bordered tbl-style stripe' style='width: 100%;'>
<thead>
    <tr>
        <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>DEGREE PROGRAM</th>
        <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>NO. TES GRANTEES WHO EXCEEDED THE MAXIMUM RESIDENCY RULE</th>
        <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>ESTIMATED NO. OF GRADUATING STUDENTS</th>
        <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>ACTIONS</th>
    </tr>
    <tr>
        <th class='text-center' style='background-color: #668EBD;'>MALE</th>
        <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
        <th class='text-center' style='background-color: #668EBD;'>MALE</th>
        <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
    </tr>
</thead>
<tbody>";

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['uid'];
        $ac_year = $row['ac_year'];
        $program_name = $row['program_name'];
        $total_tes_exceeded_mrr_male=$row['total_tes_exceeded_mrr_male'];
        $total_tes_exceeded_mrr_female=$row['total_tes_exceeded_mrr_female'];
        $total_tes_est_grad_male=$row['total_tes_est_grad_male'];
        $total_tes_est_grad_female=$row['total_tes_est_grad_female'];
        
    echo"
        <tr>
            <td class='text-left'>$program_name</td>
            <td class='text-center'>$total_tes_exceeded_mrr_male</td>
            <td class='text-center'>$total_tes_exceeded_mrr_female</td>
            <td class='text-center'>$total_tes_est_grad_male</td>
            <td class='text-center'>$total_tes_est_grad_female</td>
            <td class='text-center'>
                <button class='btn btn-info edit_program_tes' data-bs-tooltip='' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button>
                <button class='btn btn-danger btn-table-margin remove_program_tes' data-bs-tooltip='' type='button' title='Remove' name='remove' value='remove' id='$uid'><i class='fas fa-trash'></i></button>
            </td>
        </tr>";
    }
}
echo"</tbody>
</table>
";