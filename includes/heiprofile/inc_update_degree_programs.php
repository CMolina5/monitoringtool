<?php
session_start();
include_once '../db_connection.php';

$uid = mysqli_real_escape_string($conn, $_SESSION['degree_program_id']);
$program_code = mysqli_real_escape_string($conn, $_POST['program_code1']);
$program_name = mysqli_real_escape_string($conn, $_POST['program_name1']);
$gr_no = mysqli_real_escape_string($conn, $_POST['gr_no1']);
$copc_no = mysqli_real_escape_string($conn, $_POST['copc_no1']);

$sql = "SELECT * FROM tbl_degree_programs_temp WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "UPDATE tbl_degree_programs_temp 
    SET program_code='$program_code', program_name='$program_name', gr_no='$gr_no', copc_no='$copc_no'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else {
    $sql = "UPDATE tbl_degree_programs
    SET program_code='$program_code', program_name='$program_name', gr_no='$gr_no', copc_no='$copc_no'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
}

if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "./inc_degree_programs.php";
}
