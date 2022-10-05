<?php
session_start();
include_once '../db_connection.php';

$ac_year = mysqli_real_escape_string($conn, $_SESSION['ac_year']);
$hei_psg_region = mysqli_real_escape_string($conn, $_SESSION['hei_psg_region']);
$hei_uii = mysqli_real_escape_string($conn, $_SESSION['hei_uii']);
$hei_name = mysqli_real_escape_string($conn, $_SESSION['hei_name']);
$tes_category = mysqli_real_escape_string($conn, $_POST['tes_category']);

$total_tes_1st_male = mysqli_real_escape_string($conn, $_POST['total_tes_1st_male']);
$total_tes_1st_female = mysqli_real_escape_string($conn, $_POST['total_tes_1st_female']);
$total_pwd_1st_male = mysqli_real_escape_string($conn, $_POST['total_pwd_1st_male']);
$total_pwd_1st_female = mysqli_real_escape_string($conn, $_POST['total_pwd_1st_female']);
$total_ip_1st_male = mysqli_real_escape_string($conn, $_POST['total_ip_1st_male']);
$total_ip_1st_female = mysqli_real_escape_string($conn, $_POST['total_ip_1st_female']);
$total_with_board_1st_male = mysqli_real_escape_string($conn, $_POST['total_with_board_1st_male']);
$total_with_board_1st_female = mysqli_real_escape_string($conn, $_POST['total_with_board_1st_female']);

$total_tes_2nd_male = mysqli_real_escape_string($conn, $_POST['total_tes_2nd_male']);
$total_tes_2nd_female = mysqli_real_escape_string($conn, $_POST['total_tes_2nd_female']);
$total_pwd_2nd_male = mysqli_real_escape_string($conn, $_POST['total_pwd_2nd_male']);
$total_pwd_2nd_female = mysqli_real_escape_string($conn, $_POST['total_pwd_2nd_female']);
$total_ip_2nd_male = mysqli_real_escape_string($conn, $_POST['total_ip_2nd_male']);
$total_ip_2nd_female = mysqli_real_escape_string($conn, $_POST['total_ip_2nd_female']);
$total_with_board_2nd_male = mysqli_real_escape_string($conn, $_POST['total_with_board_2nd_male']);
$total_with_board_2nd_female = mysqli_real_escape_string($conn, $_POST['total_with_board_2nd_female']);

$total_tes_3rd_male = mysqli_real_escape_string($conn, $_POST['total_tes_3rd_male']);
$total_tes_3rd_female = mysqli_real_escape_string($conn, $_POST['total_tes_3rd_female']);
$total_pwd_3rd_male = mysqli_real_escape_string($conn, $_POST['total_pwd_3rd_male']);
$total_pwd_3rd_female = mysqli_real_escape_string($conn, $_POST['total_pwd_3rd_female']);
$total_ip_3rd_male = mysqli_real_escape_string($conn, $_POST['total_ip_3rd_male']);
$total_ip_3rd_female = mysqli_real_escape_string($conn, $_POST['total_ip_3rd_female']);
$total_with_board_3rd_male = mysqli_real_escape_string($conn, $_POST['total_with_board_3rd_male']);
$total_with_board_3rd_female = mysqli_real_escape_string($conn, $_POST['total_with_board_3rd_female']);

$total_tes_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_tes_summer_midyear_male']);
$total_tes_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_tes_summer_midyear_female']);
$total_pwd_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_pwd_summer_midyear_male']);
$total_pwd_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_pwd_summer_midyear_female']);
$total_ip_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_ip_summer_midyear_male']);
$total_ip_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_ip_summer_midyear_female']);
$total_with_board_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_with_board_summer_midyear_male']);
$total_with_board_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_with_board_summer_midyear_female']);

if(empty($total_tes_1st_male)){
    $total_tes_1st_male=0;
}
if(empty($total_tes_1st_female)){
    $total_tes_1st_female=0;
}
if(empty($total_pwd_1st_male)){
    $total_pwd_1st_male=0;
}
if(empty($total_pwd_1st_female)){
    $total_pwd_1st_female=0;
}
if(empty($total_ip_1st_male)){
    $total_ip_1st_male=0;
}
if(empty($total_ip_1st_female)){
    $total_ip_1st_female=0;
}
if(empty($total_with_board_1st_male)){
    $total_with_board_1st_male=0;
}
if(empty($total_with_board_1st_female)){
    $total_with_board_1st_female=0;
}

if(empty($total_tes_2nd_male)){
    $total_tes_2nd_male=0;
}
if(empty($total_tes_2nd_female)){
    $total_tes_2nd_female=0;
}
if(empty($total_pwd_2nd_male)){
    $total_pwd_2nd_male=0;
}
if(empty($total_pwd_2nd_female)){
    $total_pwd_2nd_female=0;
}
if(empty($total_ip_2nd_male)){
    $total_ip_2nd_male=0;
}
if(empty($total_ip_2nd_female)){
    $total_ip_2nd_female=0;
}
if(empty($total_with_board_2nd_male)){
    $total_with_board_2nd_male=0;
}
if(empty($total_with_board_2nd_female)){
    $total_with_board_2nd_female=0;
}

if(empty($total_tes_3rd_male)){
    $total_tes_3rd_male=0;
}
if(empty($total_tes_3rd_female)){
    $total_tes_3rd_female=0;
}
if(empty($total_pwd_3rd_male)){
    $total_pwd_3rd_male=0;
}
if(empty($total_pwd_3rd_female)){
    $total_pwd_3rd_female=0;
}
if(empty($total_ip_3rd_male)){
    $total_ip_3rd_male=0;
}
if(empty($total_ip_3rd_female)){
    $total_ip_3rd_female=0;
}
if(empty($total_with_board_3rd_male)){
    $total_with_board_3rd_male=0;
}
if(empty($total_with_board_3rd_female)){
    $total_with_board_3rd_female=0;
}

if(empty($total_tes_summer_midyear_male)){
    $total_tes_summer_midyear_male=0;
}
if(empty($total_tes_summer_midyear_female)){
    $total_tes_summer_midyear_female=0;
}
if(empty($total_pwd_summer_midyear_male)){
    $total_pwd_summer_midyear_male=0;
}
if(empty($total_pwd_summer_midyear_female)){
    $total_pwd_summer_midyear_female=0;
}
if(empty($total_ip_summer_midyear_male)){
    $total_ip_summer_midyear_male=0;
}
if(empty($total_ip_summer_midyear_female)){
    $total_ip_summer_midyear_female=0;
}
if(empty($total_with_board_summer_midyear_male)){
    $total_with_board_summer_midyear_male=0;
}
if(empty($total_with_board_summer_midyear_female)){
    $total_with_board_summer_midyear_female=0;
}

$sql = "INSERT INTO tbl_tes_category (ac_year, 
hei_psg_region, 
hei_uii, 
hei_name, 
tes_category,

total_tes_1st_male, total_tes_1st_female,
total_pwd_1st_male, total_pwd_1st_female,
total_ip_1st_male, total_ip_1st_female, 
total_with_board_1st_male, total_with_board_1st_female,

total_tes_2nd_male, total_tes_2nd_female,
total_pwd_2nd_male, total_pwd_2nd_female,
total_ip_2nd_male, total_ip_2nd_female, 
total_with_board_2nd_male, total_with_board_2nd_female,

total_tes_3rd_male, total_tes_3rd_female,
total_pwd_3rd_male, total_pwd_3rd_female,
total_ip_3rd_male, total_ip_3rd_female, 
total_with_board_3rd_male, total_with_board_3rd_female,

total_tes_summer_midyear_male, total_tes_summer_midyear_female,
total_pwd_summer_midyear_male, total_pwd_summer_midyear_female,
total_ip_summer_midyear_male, total_ip_summer_midyear_female, 
total_with_board_summer_midyear_male, total_with_board_summer_midyear_female
)
VALUES ('$ac_year', 
'$hei_psg_region', 
'$hei_uii', 
'$hei_name', 
'$tes_category',

'$total_tes_1st_male', '$total_tes_1st_female', 
'$total_pwd_1st_male', '$total_pwd_1st_female',
'$total_ip_1st_male', '$total_ip_1st_female',
'$total_with_board_1st_male', '$total_with_board_1st_female',

'$total_tes_2nd_male', '$total_tes_2nd_female', 
'$total_pwd_2nd_male', '$total_pwd_2nd_female',
'$total_ip_2nd_male', '$total_ip_2nd_female',
'$total_with_board_2nd_male', '$total_with_board_2nd_female',

'$total_tes_3rd_male', '$total_tes_3rd_female', 
'$total_pwd_3rd_male', '$total_pwd_3rd_female',
'$total_ip_3rd_male', '$total_ip_3rd_female',
'$total_with_board_3rd_male', '$total_with_board_3rd_female',

'$total_tes_summer_midyear_male', '$total_tes_summer_midyear_female', 
'$total_pwd_summer_midyear_male', '$total_pwd_summer_midyear_female',
'$total_ip_summer_midyear_male', '$total_ip_summer_midyear_female',
'$total_with_board_summer_midyear_male', '$total_with_board_summer_midyear_female')";
$result = mysqli_query($conn, $sql);

include "./inc_tes_category_table.php";

