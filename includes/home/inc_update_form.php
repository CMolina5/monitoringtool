<?php
session_start();
include_once '../db_connection.php';

$uid = mysqli_real_escape_string($conn, $_SESSION['form_id']);
$ac_calendar = mysqli_real_escape_string($conn, $_POST['ac_calendar1']);
$fhe = mysqli_real_escape_string($conn, $_POST['fhe1']);
$tes = mysqli_real_escape_string($conn, $_POST['tes1']);
$tdp = mysqli_real_escape_string($conn, $_POST['tdp1']);

$sql = "SELECT * FROM tbl_hei_records WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "UPDATE tbl_hei_records 
    SET ac_calendar='$ac_calendar', fhe='$fhe', tes='$tes', tdp='$tdp', form_status='ongoing' 
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
}

if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "inc_hei_records_new.php";
}
