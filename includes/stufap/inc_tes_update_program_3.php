<?php
session_start();
include_once '../db_connection.php';

$uid = mysqli_real_escape_string($conn, $_SESSION['degree_program_id']);

$sql = "UPDATE tbl_degree_programs
SET total_tes_exceeded_mrr_male = 0, total_tes_exceeded_mrr_female = 0,
total_tes_est_grad_male = 0, total_tes_est_grad_female = 0
WHERE uid='$uid' ";
$result = mysqli_query($conn, $sql);

include "./inc_tes_programs_table.php";
