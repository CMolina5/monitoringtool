<?php
session_start();
include_once '../db_connection.php';

$sql = "SELECT * FROM tbl_degree_programs_temp WHERE uid='".$_POST["pk"]."'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "UPDATE tbl_degree_programs_temp
    SET 
    ".$_POST["name"]." = '".$_POST["value"]."' 
    WHERE uid = '".$_POST["pk"]."'";
    $result = mysqli_query($conn, $sql);
} else {
    $sql = "UPDATE tbl_degree_programs
    SET 
    ".$_POST["name"]." = '".$_POST["value"]."' 
    WHERE uid = '".$_POST["pk"]."'";
    $result = mysqli_query($conn, $sql);
}

// if (!$result) {
//     echo mysqli_error($conn);
//     die();
// } else {
//     include "./inc_degree_programs.php";
// }