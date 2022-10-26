<?php
session_start();
include_once '../db_connection.php';

$uid = $_POST['uid'];

foreach ($uid as $id) {
    $sql = "UPDATE tbl_degree_programs
    SET 
    total_tdp_1sem_1yr_male=0, total_tdp_1sem_1yr_female=0, 
    total_tdp_1sem_2yr_male=0, total_tdp_1sem_2yr_female=0,
    total_tdp_1sem_3yr_male=0, total_tdp_1sem_3yr_female=0, 
    total_tdp_1sem_4yr_male=0, total_tdp_1sem_4yr_female=0,
    total_tdp_1sem_5yr_male=0, total_tdp_1sem_5yr_female=0,
    total_tdp_1sem_6yr_male=0, total_tdp_1sem_6yr_female=0,

    total_tdp_2sem_1yr_male=0, total_tdp_2sem_1yr_female=0, 
    total_tdp_2sem_2yr_male=0, total_tdp_2sem_2yr_female=0,
    total_tdp_2sem_3yr_male=0, total_tdp_2sem_3yr_female=0, 
    total_tdp_2sem_4yr_male=0, total_tdp_2sem_4yr_female=0,
    total_tdp_2sem_5yr_male=0, total_tdp_2sem_5yr_female=0,
    total_tdp_2sem_6yr_male=0, total_tdp_2sem_6yr_female=0,

    total_tdp_3sem_1yr_male=0, total_tdp_3sem_1yr_female=0, 
    total_tdp_3sem_2yr_male=0, total_tdp_3sem_2yr_female=0,
    total_tdp_3sem_3yr_male=0, total_tdp_3sem_3yr_female=0, 
    total_tdp_3sem_4yr_male=0, total_tdp_3sem_4yr_female=0,
    total_tdp_3sem_5yr_male=0, total_tdp_3sem_5yr_female=0,
    total_tdp_3sem_6yr_male=0, total_tdp_3sem_6yr_female=0,

    total_tdp_sum_mid_1yr_male=0, total_tdp_sum_mid_1yr_female=0, 
    total_tdp_sum_mid_2yr_male=0, total_tdp_sum_mid_2yr_female=0,
    total_tdp_sum_mid_3yr_male=0, total_tdp_sum_mid_3yr_female=0, 
    total_tdp_sum_mid_4yr_male=0, total_tdp_sum_mid_4yr_female=0,
    total_tdp_sum_mid_5yr_male=0, total_tdp_sum_mid_5yr_female=0,
    total_tdp_sum_mid_6yr_male=0, total_tdp_sum_mid_6yr_female=0,

    total_tdp_graduated_male=0, total_tdp_graduated_female=0,
    total_tdp_exceeded_mrr_male = 0, total_tdp_exceeded_mrr_female = 0

    WHERE uid =" . $id;
    $result = mysqli_query($conn, $sql);
}

if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "./inc_tdp_programs_table.php";
}
