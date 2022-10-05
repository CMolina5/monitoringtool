<?php
session_start();
include_once '../db_connection.php';

$ac_year = mysqli_real_escape_string($conn, $_SESSION['ac_year']);
$hei_psg_region = mysqli_real_escape_string($conn, $_SESSION['hei_psg_region']);
$hei_uii = mysqli_real_escape_string($conn, $_SESSION['hei_uii']);
$hei_name = mysqli_real_escape_string($conn, $_SESSION['hei_name']);
$fhe_category = mysqli_real_escape_string($conn, $_POST['fhe_category']);
$total_fhe_1st_male = mysqli_real_escape_string($conn, $_POST['total_fhe_1st_male']);
$total_fhe_1st_female = mysqli_real_escape_string($conn, $_POST['total_fhe_1st_female']);
$total_fhe_2nd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_2nd_male']);
$total_fhe_2nd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_2nd_female']);
$total_fhe_3rd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3rd_male']);
$total_fhe_3rd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3rd_female']);
$total_fhe_sum_mid_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_male']);
$total_fhe_sum_mid_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_female']);

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

if(empty($total_fhe_3rd_male)){
    $total_fhe_3rd_male=0;
}
if(empty($total_fhe_3rd_female)){
    $total_fhe_3rd_female=0;
}

if(empty($total_fhe_sum_mid_male)){
    $total_fhe_sum_mid_male=0;
}
if(empty($total_fhe_sum_mid_female)){
    $total_fhe_sum_mid_female=0;
}

$sql = "INSERT INTO tbl_fhe_category (ac_year, hei_psg_region, hei_uii, hei_name, fhe_category, total_fhe_1st_male, total_fhe_1st_female, total_fhe_2nd_male, total_fhe_2nd_female, total_fhe_3rd_male, total_fhe_3rd_female, total_fhe_sum_mid_male, total_fhe_sum_mid_female)
VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$fhe_category', '$total_fhe_1st_male', '$total_fhe_1st_female', '$total_fhe_2nd_male', '$total_fhe_2nd_female', '$total_fhe_3rd_male', '$total_fhe_3rd_female', '$total_fhe_sum_mid_male', '$total_fhe_sum_mid_female')";
$result = mysqli_query($conn, $sql);

include "./inc_fhe_category_table.php";

