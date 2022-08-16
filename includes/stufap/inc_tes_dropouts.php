<?php

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TES'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "
<table id='tbl_tes_dropouts' class='table-bordered tbl-style stripe' style='width: 100%;'>
    <thead>
        <tr>
            <th class='text-center'>REASONS FOR DROPPING</th>
            <th class='text-center'>1ST SEMESTER</th>
            <th class='text-center'>2ND SEMESTER</th>
            <th class='text-center'>ACTIONS</th>
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
        $total_dropout_1st = $row['total_dropout_1st'];
        $total_dropout_2nd = $row['total_dropout_2nd'];

        echo "
        <tr>
            <td class='text-center'>".strtoUpper($reason)."</td>
            <td class='text-center'>$total_dropout_1st</td>
            <td class='text-center'>$total_dropout_2nd</td>
            <td class='text-center'>
            <button class='btn btn-info edit_dropouts_tes' data-bs-tooltip='' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button>
            <button class='btn btn-danger btn-table-margin remove_dropouts_tes' data-bs-tooltip='' type='button' title='Remove' name='remove' value='remove' id='$uid'><i class='fas fa-trash'></i></button>
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
</tr>
</tfoot>
</tbody>
</table>
";