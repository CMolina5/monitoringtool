<?php
session_start();
include_once '../db_connection.php';

$uid=mysqli_real_escape_string($conn, $_SESSION['degree_program_id']);

$sql = "SELECT * FROM tbl_degree_programs_temp WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "DELETE FROM tbl_degree_programs_temp
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else {
    $sql = "DELETE FROM tbl_degree_programs
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
}

if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "./inc_degree_programs.php";
}
