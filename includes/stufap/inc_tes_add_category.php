<?php
session_start();
include_once '../db_connection.php';

$ac_year = mysqli_real_escape_string($conn, $_SESSION['ac_year']);
$hei_psg_region = mysqli_real_escape_string($conn, $_SESSION['hei_psg_region']);
$hei_uii = mysqli_real_escape_string($conn, $_SESSION['hei_uii']);
$hei_name = mysqli_real_escape_string($conn, $_SESSION['hei_name']);
$tes_category = mysqli_real_escape_string($conn, $_POST['tes_category']);
$total_tes_1st = mysqli_real_escape_string($conn, $_POST['total_tes_1st']);
$total_pwd_1st = mysqli_real_escape_string($conn, $_POST['total_pwd_1st']);
$total_ip_1st = mysqli_real_escape_string($conn, $_POST['total_ip_1st']);
$total_with_board_1st = mysqli_real_escape_string($conn, $_POST['total_with_board_1st']);
$total_tes_2nd = mysqli_real_escape_string($conn, $_POST['total_tes_2nd']);
$total_pwd_2nd = mysqli_real_escape_string($conn, $_POST['total_pwd_2nd']);
$total_ip_2nd = mysqli_real_escape_string($conn, $_POST['total_ip_2nd']);
$total_with_board_2nd = mysqli_real_escape_string($conn, $_POST['total_with_board_2nd']);

if(empty($total_tes_1st)){
    $total_tes_1st=0;
}
if(empty($total_pwd_1st)){
    $total_pwd_1st=0;
}
if(empty($total_ip_1st)){
    $total_ip_1st=0;
}
if(empty($total_tes_1st)){
    $total_tes_1st=0;
}
if(empty($total_with_board_1st)){
    $total_with_board_1st=0;
}
if(empty($total_tes_2nd)){
    $total_tes_2nd=0;
}
if(empty($total_pwd_2nd)){
    $total_pwd_2nd=0;
}
if(empty($total_ip_2nd)){
    $total_ip_2nd=0;
}
if(empty($total_with_board_2nd)){
    $total_with_board_2nd=0;
}

$sql = "INSERT INTO tbl_tes_category (ac_year, hei_psg_region, hei_uii, hei_name, tes_category, total_tes_1st, total_pwd_1st, total_ip_1st, total_with_board_1st, total_tes_2nd, total_pwd_2nd, total_ip_2nd, total_with_board_2nd)
VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$tes_category', '$total_tes_1st', '$total_pwd_1st', '$total_ip_1st', '$total_with_board_1st', '$total_tes_2nd', '$total_pwd_2nd', '$total_ip_2nd', '$total_with_board_2nd')";
$result = mysqli_query($conn, $sql);

include "./inc_tes_category_table.php";

