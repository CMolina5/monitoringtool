<?php

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='FHE'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "
<table id='tbl_fhe_dropouts' class='table-bordered tbl-style stripe' style='width: 100%;'>
    <thead>
        <tr>
            <th class='text-center' rowspan='2'>REASONS FOR DROPPING</th>
            <th class='text-center' colspan='2'>1ST TERM</th>
            <th class='text-center' colspan='2'>2ND TERM</th>
            <th class='text-center' colspan='2'>3RD TERM</th>
            <th class='text-center' colspan='2'>SUMMER/MIDYEAR</th>
            <th class='text-center' rowspan='2'>ACTIONS</th>
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
        $total_dropout_sum_mid_male = $row['total_dropout_summer_midterm_male'];
        $total_dropout_sum_mid_female = $row['total_dropout_summer_midterm_female'];
       
        echo "
        <tr>
            <td class='text-center'>".strtoUpper($reason)."</td>
            <td class='text-center'>$total_dropout_1st_male</td>
            <td class='text-center'>$total_dropout_1st_female</td>
            <td class='text-center'>$total_dropout_2nd_male</td>
            <td class='text-center'>$total_dropout_2nd_female</td>
            <td class='text-center'>$total_dropout_3rd_male</td>
            <td class='text-center'>$total_dropout_3rd_female</td>
            <td class='text-center'>$total_dropout_sum_mid_male</td>
            <td class='text-center'>$total_dropout_sum_mid_female</td>
            
            <td class='text-center'>
            <button class='btn btn-info edit_dropouts_fhe' data-bs-tooltip='' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button>
            <button class='btn btn-danger btn-table-margin remove_dropouts_fhe' data-bs-tooltip='' type='button' title='Remove' name='remove' value='remove' id='$uid'><i class='fas fa-trash'></i></button>
            </td>
        </tr>
            ";
    }
}
echo"
<tfoot>
            <tr>
                <th class='text-center'>TOTAL:</th>
                <th class='text-center'></th>
                <th class='text-center'></th>
                <th class='text-center'></th>
                <th class='text-center'></th>
                <th class='text-center'></th>
                <th class='text-center'></th>
                <th class='text-center'></th>
                <th class='text-center'></th>
                <th class='text-center'></th>
            </tr>
        </tfoot>
    </tbody>
</table>
";