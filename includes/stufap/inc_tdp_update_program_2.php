<?php
session_start();
include_once '../db_connection.php';

// $uid = mysqli_real_escape_string($conn, $_SESSION['degree_program_id']);
// $total_tdp_1st_male = mysqli_real_escape_string($conn, $_POST['total_tdp_1st_male_1']);
// $total_tdp_1st_female = mysqli_real_escape_string($conn, $_POST['total_tdp_1st_female_1']);
// $total_tdp_2nd_male = mysqli_real_escape_string($conn, $_POST['total_tdp_2nd_male_1']);
// $total_tdp_2nd_female = mysqli_real_escape_string($conn, $_POST['total_tdp_2nd_female_1']);
// $total_tdp_graduated_male = mysqli_real_escape_string($conn, $_POST['total_tdp_graduated_male_1']);
// $total_tdp_graduated_female = mysqli_real_escape_string($conn, $_POST['total_tdp_graduated_female_1']);
// $total_tdp_exceeded_mrr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_exceeded_mrr_male_1']);
// $total_tdp_exceeded_mrr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_exceeded_mrr_female_1']);

// if(empty($total_tdp_1st_male)){
//     $total_tdp_1st_male=0;
// }
// if(empty($total_tdp_1st_female)){
//     $total_tdp_1st_female=0;
// }
// if(empty($total_tdp_2nd_male)){
//     $total_tdp_2nd_male=0;
// }
// if(empty($total_tdp_2nd_female)){
//     $total_tdp_2nd_female=0;
// }
// if(empty($total_tdp_graduated_male)){
//     $total_tdp_graduated_male=0;
// }
// if(empty($total_tdp_graduated_female)){
//     $total_tdp_graduated_female=0;
// }
// if(empty($total_tdp_exceeded_mrr_male)){
//     $total_tdp_exceeded_mrr_male=0;
// }
// if(empty($total_tdp_exceeded_mrr_female)){
//     $total_tdp_exceeded_mrr_female=0;
// }

// $sql = "UPDATE tbl_degree_programs
// SET total_tdp_1st_male='$total_tdp_1st_male', total_tdp_1st_female='$total_tdp_1st_female', total_tdp_2nd_male='$total_tdp_2nd_male', total_tdp_2nd_female='$total_tdp_2nd_female', total_tdp_graduated_male='$total_tdp_graduated_male', total_tdp_graduated_female='$total_tdp_graduated_female', total_tdp_exceeded_mrr_male='$total_tdp_exceeded_mrr_male', total_tdp_exceeded_mrr_female='$total_tdp_exceeded_mrr_female'
// WHERE uid='$uid' ";
// $result = mysqli_query($conn, $sql);

// include "./inc_tdp_programs_table.php";

$sql = "UPDATE tbl_degree_programs
SET 
".$_POST["name"]." = '".$_POST["value"]."' 
WHERE uid = '".$_POST["pk"]."'";
$result = mysqli_query($conn, $sql);
