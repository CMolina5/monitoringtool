<?php
session_start();
include_once '../db_connection.php';

// $uid = mysqli_real_escape_string($conn, $_SESSION['category_id']);
// $total_tes_1st = mysqli_real_escape_string($conn, $_POST['total_tes_1st_1']);
// $total_tes_2nd = mysqli_real_escape_string($conn, $_POST['total_tes_2nd_1']);
// $total_pwd_1st = mysqli_real_escape_string($conn, $_POST['total_pwd_1st_1']);
// $total_pwd_2nd = mysqli_real_escape_string($conn, $_POST['total_pwd_2nd_1']);
// $total_ip_1st = mysqli_real_escape_string($conn, $_POST['total_ip_1st_1']);
// $total_ip_2nd = mysqli_real_escape_string($conn, $_POST['total_ip_2nd_1']);
// $total_with_board_1st = mysqli_real_escape_string($conn, $_POST['total_with_board_1st_1']);
// $total_with_board_2nd = mysqli_real_escape_string($conn, $_POST['total_with_board_2nd_1']);

// if(empty($total_tes_1st)){
//     $total_tes_1st=0;
// }
// if(empty($total_tes_2nd)){
//     $total_tes_2nd=0;
// }
// if(empty($total_pwd_1st)){
//     $total_pwd_1st=0;
// }
// if(empty($total_pwd_2nd)){
//     $total_pwd_2nd=0;
// }
// if(empty($total_ip_1st)){
//     $total_ip_1st=0;
// }
// if(empty($total_ip_2nd)){
//     $total_ip_2nd=0;
// }
// if(empty($total_with_board_1st)){
//     $total_with_board_1st=0;
// }
// if(empty($total_with_board_2nd)){
//     $total_with_board_2nd=0;
// }

// $sql = "UPDATE tbl_tes_category
// SET total_tes_1st='$total_tes_1st', total_tes_2nd='$total_tes_2nd', total_pwd_1st='$total_pwd_1st', total_pwd_2nd='$total_pwd_2nd',  total_ip_1st='$total_ip_1st', total_ip_2nd='$total_ip_2nd',  total_with_board_1st='$total_with_board_1st', total_with_board_2nd='$total_with_board_2nd'
// WHERE uid='$uid' ";
// $result = mysqli_query($conn, $sql);

// include "./inc_tes_category_table.php";

$sql = "UPDATE tbl_tes_category
SET 
".$_POST["name"]." = '".$_POST["value"]."' 
WHERE uid = '".$_POST["pk"]."'";
$result = mysqli_query($conn, $sql);
