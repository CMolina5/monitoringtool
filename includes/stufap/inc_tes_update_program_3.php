<?php
session_start();
include_once '../db_connection.php';

$uid = $_POST['uid'];

foreach ($uid as $id) {
    $sql = "UPDATE tbl_degree_programs
    SET total_tes_exceeded_mrr_male = 0, total_tes_exceeded_mrr_female = 0,
    total_tes_est_grad_male = 0, total_tes_est_grad_female = 0
    WHERE uid =" . $id;
    $result = mysqli_query($conn, $sql);
}

if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "./inc_tes_programs_table.php";
}
