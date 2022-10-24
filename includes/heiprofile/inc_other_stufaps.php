<?php

$sql = "SELECT * FROM tbl_hei_other_funded_stufaps WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "
<table id='tbl_other_stufaps' class='table-bordered tbl-style stripe' style='width: 100%;'>
<thead>
    <tr>
        <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'><input type='checkbox' name='main_other_stufap_checkbox'></th>
        <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>NAME OF STUFAP</th>
        <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>TYPE OF FUNDING</th>
        <th class='text-center' colspan='6' style='background-color: #3C70AB; color:#ffff;'>YEAR LEVEL</th>
      
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
            <td class='text-center'><input type='checkbox' id='$uid' name='other_stufap_checkbox' value='$uid'></td>
            <td data-name='stufap_name' class='other_stufap_name text-center' data-type='text' data-pk='$uid'>".strtoUpper($stufap_name)."</td>
            <td data-name='stufap_type' class='select_type text-center' data-type='select' data-inputclass='table-select' data-pk='$uid'>$stufap_type</td>
            <td data-name='total_stufap_1st' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_stufap_1st</td>
            <td data-name='total_stufap_2nd' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_stufap_2nd</td>
            <td data-name='total_stufap_3rd' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_stufap_3rd</td>
            <td data-name='total_stufap_4th' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_stufap_4th</td>
            <td data-name='total_stufap_5th' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_stufap_5th</td>
            <td data-name='total_stufap_6th' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_stufap_6th</td>
           
        </tr>
            ";
    }
}
echo "
</tbody>
</table>
";
