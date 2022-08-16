<?php
session_start();
include_once '../db_connection.php';

$uid = mysqli_real_escape_string($conn, $_SESSION['degree_program_id']);

$sql = "UPDATE tbl_degree_programs
SET total_tdp_1st_male=0, total_tdp_1st_female=0, total_tdp_2nd_male=0, total_tdp_2nd_female=0, total_tdp_graduated_male=0, total_tdp_graduated_female=0, total_tdp_exceeded_mrr_male=0, total_tdp_exceeded_mrr_female=0
WHERE uid='$uid' ";
$result = mysqli_query($conn, $sql);

include "./inc_tdp_programs_table.php";