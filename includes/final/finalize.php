<?php
session_start();
include_once '../db_connection.php';

$timestamp = date('m/d/Y');

$sql = "SELECT * FROM tbl_hei_records WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "UPDATE tbl_hei_records 
    SET form_status='For Review of Regional Coordinator', date_finalized='$timestamp'
    WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
    $result = mysqli_query($conn, $sql);
}

if (!$result) {
    echo mysqli_error($conn);
    die();
} 
