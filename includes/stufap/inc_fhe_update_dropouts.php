<?php
session_start();
include_once '../db_connection.php';
include 'inc_template.php';

$uid=mysqli_real_escape_string($conn, $_SESSION['dropouts_id']);
$fhe_drop_1st_edit = mysqli_real_escape_string($conn, $_POST['fhe_drop_1st_edit']);
$fhe_drop_2nd_edit = mysqli_real_escape_string($conn, $_POST['fhe_drop_2nd_edit']);

if(empty($fhe_drop_1st_edit)){
    $fhe_drop_1st_edit=0;
}
if(empty($fhe_drop_2nd_edit)){
    $fhe_drop_2nd_edit=0;
}

if ($ac_calendar == 'Trimester') {
    $fhe_drop_3rd_edit = mysqli_real_escape_string($conn, $_POST['fhe_drop_3rd_edit']);
    $sql = "UPDATE tbl_drop_outs
    SET total_dropout_1st='$fhe_drop_1st_edit', total_dropout_2nd='$fhe_drop_2nd_edit', total_dropout_3rd='$fhe_drop_3rd_edit'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else if ($ac_calendar == 'Trimester with Summer') {
    $fhe_drop_3rd_edit = mysqli_real_escape_string($conn, $_POST['fhe_drop_3rd_edit']);
    $fhe_drop_summer_midyear_edit = mysqli_real_escape_string($conn, $_POST['fhe_drop_summer_midyear_edit']);
    $sql = "UPDATE tbl_drop_outs
    SET total_dropout_1st='$fhe_drop_1st_edit', total_dropout_2nd='$fhe_drop_2nd_edit', total_dropout_3rd='$fhe_drop_3rd_edit', total_dropout_summer_midterm='$fhe_drop_summer_midyear_edit'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else if ($ac_calendar == 'Semester with Summer') {
    $fhe_drop_summer_midyear_edit = mysqli_real_escape_string($conn, $_POST['fhe_drop_summer_midyear_edit']);
    $sql = "UPDATE tbl_drop_outs
    SET total_dropout_1st='$fhe_drop_1st_edit', total_dropout_2nd='$fhe_drop_2nd_edit', total_dropout_summer_midterm='$fhe_drop_summer_midyear_edit'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else if ($ac_calendar == 'Semester') {
    $sql = "UPDATE tbl_drop_outs
    SET total_dropout_1st='$fhe_drop_1st_edit', total_dropout_2nd='$fhe_drop_2nd_edit'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
}

include "./inc_fhe_dropouts.php";