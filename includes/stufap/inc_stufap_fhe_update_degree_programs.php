<?php
session_start();
include_once '../db_connection.php';
include 'inc_template.php';

$uid=mysqli_real_escape_string($conn, $_SESSION['degree_program_id']);
$total_fhe_1st_male = mysqli_real_escape_string($conn, $_POST['total_fhe_1st_male']);
$total_fhe_1st_female = mysqli_real_escape_string($conn, $_POST['total_fhe_1st_female']);
$total_fhe_2nd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_2nd_male']);
$total_fhe_2nd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_2nd_female']);

$total_fhe_graduated_male = mysqli_real_escape_string($conn, $_POST['total_fhe_graduated_male']);
$total_fhe_graduated_female = mysqli_real_escape_string($conn, $_POST['total_fhe_graduated_female']);
$total_fhe_exceeded_mrr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_exceeded_mrr_male']);
$total_fhe_exceeded_mrr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_exceeded_mrr_female']);

if(empty($total_fhe_1st_male)){
    $total_fhe_1st_male=0;
}
if(empty($total_fhe_1st_female)){
    $total_fhe_1st_female=0;
}
if(empty($total_fhe_2nd_male)){
    $total_fhe_2nd_male=0;
}
if(empty($total_fhe_2nd_female)){
    $total_fhe_2nd_female=0;
}

if(empty($total_fhe_graduated_male)){
    $total_fhe_graduated_male=0;
}
if(empty($total_fhe_graduated_female)){
    $total_fhe_graduated_female=0;
}
if(empty($total_fhe_exceeded_mrr_male)){
    $total_fhe_exceeded_mrr_male=0;
}
if(empty($total_fhe_exceeded_mrr_female)){
    $total_fhe_exceeded_mrr_female=0;
}

if ($ac_calendar == 'Trimester') {
    $total_fhe_3rd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3rd_male']);
    $total_fhe_3rd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3rd_female']);

    if(empty($total_fhe_3rd_male)){
        $total_fhe_3rd_male=0;
    }
    if(empty($total_fhe_3rd_female)){
        $total_fhe_3rd_female=0;
    }

    $sql = "UPDATE tbl_degree_programs
    SET total_fhe_1st_male='$total_fhe_1st_male', total_fhe_1st_female='$total_fhe_1st_female', total_fhe_2nd_male='$total_fhe_2nd_male', total_fhe_2nd_female='$total_fhe_2nd_female', total_fhe_3rd_male='$total_fhe_3rd_male', total_fhe_3rd_female='$total_fhe_3rd_female', total_fhe_graduated_male='$total_fhe_graduated_male', total_fhe_graduated_female='$total_fhe_graduated_female', total_fhe_exceeded_mrr_male='$total_fhe_exceeded_mrr_male', total_fhe_exceeded_mrr_female='$total_fhe_exceeded_mrr_female'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else if ($ac_calendar == 'Trimester with Summer') {
    $total_fhe_3rd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3rd_male']);
    $total_fhe_3rd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3rd_female']);
    $total_fhe_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_fhe_summer_midyear_male']);
    $total_fhe_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_fhe_summer_midyear_female']);

    if(empty($total_fhe_3rd_male)){
        $total_fhe_3rd_male=0;
    }
    if(empty($total_fhe_3rd_female)){
        $total_fhe_3rd_female=0;
    }
    if(empty($total_fhe_summer_midyear_male)){
        $total_fhe_summer_midyear_male=0;
    }
    if(empty($total_fhe_summer_midyear_female)){
        $total_fhe_summer_midyear_female=0;
    }

    $sql = "UPDATE tbl_degree_programs
    SET total_fhe_1st_male='$total_fhe_1st_male', total_fhe_1st_female='$total_fhe_1st_female', total_fhe_2nd_male='$total_fhe_2nd_male', total_fhe_2nd_female='$total_fhe_2nd_female', total_fhe_3rd_male='$total_fhe_3rd_male', total_fhe_3rd_female='$total_fhe_3rd_female', total_fhe_summer_midyear_male='$total_fhe_summer_midyear_male', total_fhe_summer_midyear_female='$total_fhe_summer_midyear_female', total_fhe_graduated_male='$total_fhe_graduated_male', total_fhe_graduated_female='$total_fhe_graduated_female', total_fhe_exceeded_mrr_male='$total_fhe_exceeded_mrr_male', total_fhe_exceeded_mrr_female='$total_fhe_exceeded_mrr_female'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else if ($ac_calendar == 'Semester with Summer') {
    $sql = "UPDATE tbl_degree_programs
    SET total_fhe_1st_male='$total_fhe_1st_male', total_fhe_1st_female='$total_fhe_1st_female', total_fhe_2nd_male='$total_fhe_2nd_male', total_fhe_2nd_female='$total_fhe_2nd_female', total_fhe_summer_midyear_male='$total_fhe_summer_midyear_male', total_fhe_summer_midyear_female='$total_fhe_summer_midyear_female', total_fhe_graduated_male='$total_fhe_graduated_male', total_fhe_graduated_female='$total_fhe_graduated_female', total_fhe_exceeded_mrr_male='$total_fhe_exceeded_mrr_male', total_fhe_exceeded_mrr_female='$total_fhe_exceeded_mrr_female'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else if ($ac_calendar == 'Semester') {
    $sql = "UPDATE tbl_degree_programs
    SET total_fhe_1st_male='$total_fhe_1st_male', total_fhe_1st_female='$total_fhe_1st_female', total_fhe_2nd_male='$total_fhe_2nd_male', total_fhe_2nd_female='$total_fhe_2nd_female', total_fhe_graduated_male='$total_fhe_graduated_male', total_fhe_graduated_female='$total_fhe_graduated_female', total_fhe_exceeded_mrr_male='$total_fhe_exceeded_mrr_male', total_fhe_exceeded_mrr_female='$total_fhe_exceeded_mrr_female'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
}
include "inc_fhe_programs_table.php";
