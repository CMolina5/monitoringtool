<?php

$sql = "SELECT * FROM tbl_hei_other_funded_stufaps WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "
<table id='tbl_other_stufaps' class='table-bordered tbl-style stripe' style='width: 100%;'>
<thead>
    <tr>
        <th class='d-none' rowspan='2' colspan='1' style='background-color: #3C70AB; color:#ffff;'>uid</th>
        <th class='text-center' rowspan='2' colspan='1' style='background-color: #3C70AB; color:#ffff;'>NAME OF STUFAP</th>
        <th class='text-center' rowspan='2' colspan='1' style='background-color: #3C70AB; color:#ffff;'>TYPE OF FUNDING</th>
        <th class='text-center' colspan='6' style='background-color: #3C70AB; color:#ffff;'>YEAR LEVEL</th>
        <th class='text-center' rowspan='2' colspan='1' style='background-color: #3C70AB; color:#ffff;'>ACTIONS</th>
    </tr>
    <tr>
        <th class='text-center' style='background-color: #668EBD;'>1ST</th>
        <th class='text-center' style='background-color: #668EBD;'>2ND</th>
        <th class='text-center' style='background-color: #668EBD;'>3RD</th>
        <th class='text-center' style='background-color: #668EBD;'>4TH</th>
        <th class='text-center' style='background-color: #668EBD;'>5TH</th>
        <th class='text-center' style='background-color: #668EBD;'>6TH</th>
    </tr>
</thead>
<tbody>";

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['uid'];
        $ac_year = $row['ac_year'];
        $stufap_name = $row['stufap_name'];
        $stufap_type = $row['stufap_type'];
        $total_stufap_1st = $row['total_stufap_1st'];
        $total_stufap_2nd = $row['total_stufap_2nd'];
        $total_stufap_3rd = $row['total_stufap_3rd'];
        $total_stufap_4th = $row['total_stufap_4th'];
        $total_stufap_5th = $row['total_stufap_5th'];
        $total_stufap_6th = $row['total_stufap_6th'];

        echo "
        <tr>
            <td class='d-none'>$uid</td>
            <td class='text-left'>".strtoUpper($stufap_name)."</td>
            <td class='text-center'>$stufap_type</td>
            <td class='text-center'>$total_stufap_1st</td>
            <td class='text-center'>$total_stufap_2nd</td>
            <td class='text-center'>$total_stufap_3rd</td>
            <td class='text-center'>$total_stufap_4th</td>
            <td class='text-center'>$total_stufap_5th</td>
            <td class='text-center'>$total_stufap_6th</td>
            <td class='text-center'>
            <button class='btn btn-info btn-table-margin edit_data' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button>
            <button class='btn btn-danger btn-table-margin remove_data' data-toggle='tooltip' data-bs-tooltip='' type='button' title='Remove' name='remove' value='remove' id='$uid'><i class='fas fa-trash'></i></button></td>
        </tr>
            ";
    }
}
echo "
</tbody>
</table>
";
