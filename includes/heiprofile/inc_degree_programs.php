<?php

$sql = "SELECT * FROM tbl_degree_programs_temp WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "
    <table id='tbl_program_offerings' class='table-bordered tbl-style stripe' style='width: 100%;'>
        <thead>
            <tr>
                <th class='d-none'>uid</th>
                <th class='text-center' style='width: 15%;'>PROGRAM CODE</th>
                <th class='text-center' style='width: 25%;'>DEGREE PROGRAM</th>
                <th class='text-center' style='width: 15%;'>GOVERNMENT RECOGNITION NO.</th>
                <th class='text-center' style='width: 15%;'>CERTIFICATE OF PROGRAM COMPLIANCE NO.</th>
                <th class='d-none' style='width: 15%;'>IN THE TES PORTAL</th>
                <th class='text-center' style='width: 15%;'>ACTIONS</th>
            </tr>
        </thead>
        <tbody>
";

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['uid'];
        $ac_year = $row['ac_year'];
        $program_code = $row['program_code'];
        $program_name = $row['program_name'];
        $gr_no = $row['gr_no'];
        $copc_no = $row['copc_no'];
        $in_the_portal = $row['in_the_portal'];

        echo "
        <tr>
            <td class='d-none'>$uid</td>
            <td class='text-center'>$program_code</td>
            <td class='text-left'>".strtoUpper($program_name)."</td>
            <td class='text-center'>$gr_no</td>
            <td class='text-center'>$copc_no</td>
            <td class='d-none'>".strtoUpper($in_the_portal)."</td>
            <td class='text-center'>
            <button class='btn btn-info btn-table-margin edit_data' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button>
            <button class='btn btn-danger btn-table-margin remove_data' data-toggle='tooltip' data-bs-tooltip='' type='button' title='Remove' name='remove' value='remove' id='$uid'><i class='fas fa-trash'></i></button></td>
        </tr>
            ";
    }
}else{
    $sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program_code = $row['program_code'];
            $program_name = $row['program_name'];
            $gr_no = $row['gr_no'];
            $copc_no = $row['copc_no'];
            $in_the_portal = $row['in_the_portal'];

            echo "
            <tr>
                <td class='d-none'>$uid</td>
                <td class='text-center'>$program_code</td>
                <td class='text-left'>".strtoUpper($program_name)."</td>
                <td class='text-center'>$gr_no</td>
                <td class='text-center'>$copc_no</td>
                <td class='d-none'>".strtoUpper($in_the_portal)."</td>
                <td class='text-center'>
                <button class='btn btn-info btn-table-margin edit_data' type='button' title='Edit' name='edit' value='edit' id='$uid'><i class='far fa-edit'></i></button>
                <button class='btn btn-danger btn-table-margin remove_data' data-toggle='tooltip' data-bs-tooltip='' type='button' title='Remove' name='remove' value='remove' id='$uid'><i class='fas fa-trash'></i></button></td>
            </tr>
                ";
        }
    }
}
echo "
</tbody>
</table>
";
