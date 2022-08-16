<?php
session_start();
include_once '../db_connection.php';

$uid = mysqli_real_escape_string($conn, $_POST['tes_program_name']);
$total_tes_mrr_male = mysqli_real_escape_string($conn, $_POST['total_tes_mrr_male']);
$total_tes_mrr_female = mysqli_real_escape_string($conn, $_POST['total_tes_mrr_female']);

if(empty($total_tes_mrr_male)){
    $total_tes_mrr_male=0;
}
if(empty($total_tes_mrr_female)){
    $total_tes_mrr_female=0;
}

$sql = "UPDATE tbl_degree_programs
SET total_tes_exceeded_mrr_male='$total_tes_mrr_male', total_tes_exceeded_mrr_female='$total_tes_mrr_female'
WHERE uid='$uid' ";
$result = mysqli_query($conn, $sql);

include "./inc_tes_programs_table.php";
