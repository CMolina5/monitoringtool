<?php

$sql = "SELECT * FROM tbl_degree_programs_temp WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

echo "
    <table id='tbl_program_offerings' class='table-bordered tbl-style stripe' style='width: 100%;'>
        <thead>
            <tr>
                <th class='text-center'><input type='checkbox' name='main_checkbox'></th>
                <th class='text-center'>PROGRAM CODE</th>
                <th class='text-center'>DEGREE PROGRAM</th>
                <th class='text-center'>GOVERNMENT RECOGNITION NO.</th>
                <th class='text-center'>CERTIFICATE OF PROGRAM COMPLIANCE NO.</th>
                <th class='d-none'>IN THE TES PORTAL</th>
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
            <td class='text-center'><input type='checkbox' id='$uid' name='degree_program_checkbox' value='$uid'></td>
            <td data-name='program_code' class='degree_programs text-center' data-type='text' data-pk='$uid'>$program_code</td>
            <td data-name='program_name' class='degree_programs text-left' data-type='text' data-pk='$uid'>".strtoUpper($program_name)."</td>
            <td data-name='gr_no' class='degree_programs text-center' data-type='text' data-pk='$uid'>$gr_no</td>
            <td data-name='copc_no' class='degree_programs text-center' data-type='text' data-pk='$uid'>$copc_no</td>
            <td class='d-none'>".strtoUpper($in_the_portal)."</td>
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
                <td class='text-center'><input type='checkbox' id='$uid' name='degree_program_checkbox' value='$uid'></td>
                <td data-name='program_code' class='degree_programs text-center' data-type='text' data-pk='$uid'>$program_code</td>
                <td data-name='program_name' class='degree_programs text-left' data-type='text' data-pk='$uid'>".strtoUpper($program_name)."</td>
                <td data-name='gr_no' class='degree_programs text-center' data-type='text' data-pk='$uid'>$gr_no</td>
                <td data-name='copc_no' class='degree_programs text-center' data-type='text' data-pk='$uid'>$copc_no</td>
                <td class='d-none'>".strtoUpper($in_the_portal)."</td>
            </tr>
                ";
        }
    }
}
echo "
</tbody>
</table>
";
