<?php

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TES'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "
<table id='tbl_tes_dropouts' class='table-bordered tbl-style stripe' style='width: 100%;'>
<thead>
<tr>
    <th class='text-center' rowspan='2'>REASONS FOR DROPPING</th>
    <th class='text-center' colspan='2'>1ST TERM</th>
    <th class='text-center' colspan='2'>2ND TERM</th>
    <th class='text-center' colspan='2'>3RD TERM</th>
    <th class='text-center' colspan='2'>SUMMER/MIDYEAR</th>
</tr>
<tr>
    <th class='text-center'>MALE</th>
    <th class='text-center'>FEMALE</th>
    <th class='text-center'>MALE</th>
    <th class='text-center'>FEMALE</th>
    <th class='text-center'>MALE</th>
    <th class='text-center'>FEMALE</th>
    <th class='text-center'>MALE</th>
    <th class='text-center'>FEMALE</th>
</tr>
</thead>
    <tbody>
";

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['uid'];
        $ac_year = $row['ac_year'];
        $program = $row['program'];
        $reason = $row['reason'];
        $total_dropout_1st_male = $row['total_dropout_1st_male'];
        $total_dropout_1st_female = $row['total_dropout_1st_female'];
        $total_dropout_2nd_male = $row['total_dropout_2nd_male'];
        $total_dropout_2nd_female = $row['total_dropout_2nd_female'];
        $total_dropout_3rd_male = $row['total_dropout_3rd_male'];
        $total_dropout_3rd_female = $row['total_dropout_3rd_female'];
        $total_dropout_sum_mid_male = $row['total_dropout_sum_mid_male'];
        $total_dropout_sum_mid_female = $row['total_dropout_sum_mid_female'];
       
        echo "
        <tr>
            <td>".strtoUpper($reason)."</td>
            <td data-name='total_dropout_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_dropout_1st_male</td>
            <td data-name='total_dropout_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_dropout_1st_female</td>
            <td data-name='total_dropout_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_dropout_2nd_male</td>
            <td data-name='total_dropout_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_dropout_2nd_female</td>
            <td data-name='total_dropout_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_dropout_3rd_male</td>
            <td data-name='total_dropout_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_dropout_3rd_female</td>
            <td data-name='total_dropout_sum_mid_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_dropout_sum_mid_male</td>
            <td data-name='total_dropout_sum_mid_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_dropout_sum_mid_female</td>       
        </tr>
    ";
    }
}
echo"
</tbody>
</table>
";