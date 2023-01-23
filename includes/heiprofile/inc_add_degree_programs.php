<?php
session_start();
include_once '../db_connection.php';

$program_code = mysqli_real_escape_string($conn, $_POST['program_code']);
$program_name = mysqli_real_escape_string($conn, $_POST['program_name']);
$gr_no = mysqli_real_escape_string($conn, $_POST['gr_no']);
$copc_no = mysqli_real_escape_string($conn, $_POST['copc_no']);

$sql = "SELECT * FROM tbl_degree_programs_temp WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "SELECT * FROM tbl_degree_programs_temp WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program_name ='$program'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        echo"<script>
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
            </script>";
    }else{
        $sql = "INSERT INTO tbl_degree_programs_temp (ac_year, hei_psg_region, hei_uii, hei_name, program_code, program_name, gr_no, copc_no, in_the_portal)
        VALUES ('$_SESSION[ac_year]', '$_SESSION[hei_psg_region]', '$_SESSION[hei_uii]', '$_SESSION[hei_name]', '$program_code','$program_name','$gr_no','$copc_no', 'No')";
        $result = mysqli_query($conn, $sql);
    }
} else {
    $sql = "INSERT INTO tbl_degree_programs (ac_year, hei_psg_region, hei_uii, hei_name, program_code, program_name, gr_no, copc_no, in_the_portal)
    VALUES ('$_SESSION[ac_year]', '$_SESSION[hei_psg_region]', '$_SESSION[hei_uii]', '$_SESSION[hei_name]', '$program_code','$program_name','$gr_no','$copc_no', 'No')";
    $result = mysqli_query($conn, $sql);
}

if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "./inc_degree_programs.php";
}
