<?php
session_start();
include_once '../db_connection.php';

$uid = mysqli_real_escape_string($conn, $_POST['tdp_program_name']);

$total_tdp_1sem_1yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_1yr_male']);
$total_tdp_1sem_1yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_1yr_female']);
$total_tdp_1sem_2yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_2yr_male']);
$total_tdp_1sem_2yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_2yr_female']);
$total_tdp_1sem_3yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_3yr_male']);
$total_tdp_1sem_3yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_3yr_female']);
$total_tdp_1sem_4yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_4yr_male']);
$total_tdp_1sem_4yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_4yr_female']);
$total_tdp_1sem_5yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_5yr_male']);
$total_tdp_1sem_5yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_5yr_female']);
$total_tdp_1sem_6yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_6yr_male']);
$total_tdp_1sem_6yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_1sem_6yr_female']);

$total_tdp_2sem_1yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_1yr_male']);
$total_tdp_2sem_1yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_1yr_female']);
$total_tdp_2sem_2yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_2yr_male']);
$total_tdp_2sem_2yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_2yr_female']);
$total_tdp_2sem_3yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_3yr_male']);
$total_tdp_2sem_3yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_3yr_female']);
$total_tdp_2sem_4yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_4yr_male']);
$total_tdp_2sem_4yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_4yr_female']);
$total_tdp_2sem_5yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_5yr_male']);
$total_tdp_2sem_5yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_5yr_female']);
$total_tdp_2sem_6yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_6yr_male']);
$total_tdp_2sem_6yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_2sem_6yr_female']);

$total_tdp_3sem_1yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_1yr_male']);
$total_tdp_3sem_1yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_1yr_female']);
$total_tdp_3sem_2yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_2yr_male']);
$total_tdp_3sem_2yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_2yr_female']);
$total_tdp_3sem_3yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_3yr_male']);
$total_tdp_3sem_3yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_3yr_female']);
$total_tdp_3sem_4yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_4yr_male']);
$total_tdp_3sem_4yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_4yr_female']);
$total_tdp_3sem_5yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_5yr_male']);
$total_tdp_3sem_5yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_5yr_female']);
$total_tdp_3sem_6yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_6yr_male']);
$total_tdp_3sem_6yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_3sem_6yr_female']);

$total_tdp_sum_mid_1yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_1yr_male']);
$total_tdp_sum_mid_1yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_1yr_female']);
$total_tdp_sum_mid_2yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_2yr_male']);
$total_tdp_sum_mid_2yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_2yr_female']);
$total_tdp_sum_mid_3yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_3yr_male']);
$total_tdp_sum_mid_3yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_3yr_female']);
$total_tdp_sum_mid_4yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_4yr_male']);
$total_tdp_sum_mid_4yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_4yr_female']);
$total_tdp_sum_mid_5yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_5yr_male']);
$total_tdp_sum_mid_5yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_5yr_female']);
$total_tdp_sum_mid_6yr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_6yr_male']);
$total_tdp_sum_mid_6yr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_sum_mid_6yr_female']);

$total_tdp_graduated_male = mysqli_real_escape_string($conn, $_POST['total_tdp_graduated_male']);
$total_tdp_graduated_female = mysqli_real_escape_string($conn, $_POST['total_tdp_graduated_female']);
$total_tdp_exceeded_mrr_male = mysqli_real_escape_string($conn, $_POST['total_tdp_exceeded_mrr_male']);
$total_tdp_exceeded_mrr_female = mysqli_real_escape_string($conn, $_POST['total_tdp_exceeded_mrr_female']);

if(empty($total_tdp_1sem_1yr_male)){
    $total_tdp_1sem_1yr_male=0;
}
if(empty($total_tdp_1sem_1yr_female)){
    $total_tdp_1sem_1yr_female=0;
}
if(empty($total_tdp_1sem_2yr_male)){
    $total_tdp_1sem_2yr_male=0;
}
if(empty($total_tdp_1sem_2yr_female)){
    $total_tdp_1sem_2yr_female=0;
}
if(empty($total_tdp_1sem_3yr_male)){
    $total_tdp_1sem_3yr_male=0;
}
if(empty($total_tdp_1sem_3yr_female)){
    $total_tdp_1sem_3yr_female=0;
}
if(empty($total_tdp_1sem_4yr_male)){
    $total_tdp_1sem_4yr_male=0;
}
if(empty($total_tdp_1sem_4yr_female)){
    $total_tdp_1sem_4yr_female=0;
}
if(empty($total_tdp_1sem_5yr_male)){
    $total_tdp_1sem_5yr_male=0;
}
if(empty($total_tdp_1sem_5yr_female)){
    $total_tdp_1sem_5yr_female=0;
}
if(empty($total_tdp_1sem_6yr_male)){
    $total_tdp_1sem_6yr_male=0;
}
if(empty($total_tdp_1sem_6yr_female)){
    $total_tdp_1sem_6yr_female=0;
}

if(empty($total_tdp_2sem_1yr_male)){
    $total_tdp_2sem_1yr_male=0;
}
if(empty($total_tdp_2sem_1yr_female)){
    $total_tdp_2sem_1yr_female=0;
}
if(empty($total_tdp_2sem_2yr_male)){
    $total_tdp_2sem_2yr_male=0;
}
if(empty($total_tdp_2sem_2yr_female)){
    $total_tdp_2sem_2yr_female=0;
}
if(empty($total_tdp_2sem_3yr_male)){
    $total_tdp_2sem_3yr_male=0;
}
if(empty($total_tdp_2sem_3yr_female)){
    $total_tdp_2sem_3yr_female=0;
}
if(empty($total_tdp_2sem_4yr_male)){
    $total_tdp_2sem_4yr_male=0;
}
if(empty($total_tdp_2sem_4yr_female)){
    $total_tdp_2sem_4yr_female=0;
}
if(empty($total_tdp_2sem_5yr_male)){
    $total_tdp_2sem_5yr_male=0;
}
if(empty($total_tdp_2sem_5yr_female)){
    $total_tdp_2sem_5yr_female=0;
}
if(empty($total_tdp_2sem_6yr_male)){
    $total_tdp_2sem_6yr_male=0;
}
if(empty($total_tdp_2sem_6yr_female)){
    $total_tdp_2sem_6yr_female=0;
}

if(empty($total_tdp_3sem_1yr_male)){
    $total_tdp_3sem_1yr_male=0;
}
if(empty($total_tdp_3sem_1yr_female)){
    $total_tdp_3sem_1yr_female=0;
}
if(empty($total_tdp_3sem_2yr_male)){
    $total_tdp_3sem_2yr_male=0;
}
if(empty($total_tdp_3sem_2yr_female)){
    $total_tdp_3sem_2yr_female=0;
}
if(empty($total_tdp_3sem_3yr_male)){
    $total_tdp_3sem_3yr_male=0;
}
if(empty($total_tdp_3sem_3yr_female)){
    $total_tdp_3sem_3yr_female=0;
}
if(empty($total_tdp_3sem_4yr_male)){
    $total_tdp_3sem_4yr_male=0;
}
if(empty($total_tdp_3sem_4yr_female)){
    $total_tdp_3sem_4yr_female=0;
}
if(empty($total_tdp_3sem_5yr_male)){
    $total_tdp_3sem_5yr_male=0;
}
if(empty($total_tdp_3sem_5yr_female)){
    $total_tdp_3sem_5yr_female=0;
}
if(empty($total_tdp_3sem_6yr_male)){
    $total_tdp_3sem_6yr_male=0;
}
if(empty($total_tdp_3sem_6yr_female)){
    $total_tdp_3sem_6yr_female=0;
}

if(empty($total_tdp_sum_mid_1yr_male)){
    $total_tdp_sum_mid_1yr_male=0;
}
if(empty($total_tdp_sum_mid_1yr_female)){
    $total_tdp_sum_mid_1yr_female=0;
}
if(empty($total_tdp_sum_mid_2yr_male)){
    $total_tdp_sum_mid_2yr_male=0;
}
if(empty($total_tdp_sum_mid_2yr_female)){
    $total_tdp_sum_mid_2yr_female=0;
}
if(empty($total_tdp_sum_mid_3yr_male)){
    $total_tdp_sum_mid_3yr_male=0;
}
if(empty($total_tdp_sum_mid_3yr_female)){
    $total_tdp_sum_mid_3yr_female=0;
}
if(empty($total_tdp_sum_mid_4yr_male)){
    $total_tdp_sum_mid_4yr_male=0;
}
if(empty($total_tdp_sum_mid_4yr_female)){
    $total_tdp_sum_mid_4yr_female=0;
}
if(empty($total_tdp_sum_mid_5yr_male)){
    $total_tdp_sum_mid_5yr_male=0;
}
if(empty($total_tdp_sum_mid_5yr_female)){
    $total_tdp_sum_mid_5yr_female=0;
}
if(empty($total_tdp_sum_mid_6yr_male)){
    $total_tdp_sum_mid_6yr_male=0;
}
if(empty($total_tdp_sum_mid_6yr_female)){
    $total_tdp_sum_mid_6yr_female=0;
}

if(empty($total_tdp_graduated_male)){
    $total_tdp_graduated_male=0;
}
if(empty($total_tdp_graduated_female)){
    $total_tdp_graduated_female=0;
}
if(empty($total_tdp_exceeded_mrr_male)){
    $total_tdp_exceeded_mrr_male=0;
}
if(empty($total_tdp_exceeded_mrr_female)){
    $total_tdp_exceeded_mrr_female=0;
}

$sql = "UPDATE tbl_degree_programs
SET total_tdp_1sem_1yr_male='$total_tdp_1sem_1yr_male', total_tdp_1sem_1yr_female='$total_tdp_1sem_1yr_female', 
total_tdp_1sem_2yr_male='$total_tdp_1sem_2yr_male', total_tdp_1sem_2yr_female='$total_tdp_1sem_2yr_female',
total_tdp_1sem_3yr_male='$total_tdp_1sem_3yr_male', total_tdp_1sem_3yr_female='$total_tdp_1sem_3yr_female',
total_tdp_1sem_4yr_male='$total_tdp_1sem_4yr_male', total_tdp_1sem_4yr_female='$total_tdp_1sem_4yr_female',
total_tdp_1sem_5yr_male='$total_tdp_1sem_5yr_male', total_tdp_1sem_5yr_female='$total_tdp_1sem_5yr_female',
total_tdp_1sem_6yr_male='$total_tdp_1sem_6yr_male', total_tdp_1sem_6yr_female='$total_tdp_1sem_6yr_female',

total_tdp_2sem_1yr_male='$total_tdp_2sem_1yr_male', total_tdp_2sem_1yr_female='$total_tdp_2sem_1yr_female', 
total_tdp_2sem_2yr_male='$total_tdp_2sem_2yr_male', total_tdp_2sem_2yr_female='$total_tdp_2sem_2yr_female',
total_tdp_2sem_3yr_male='$total_tdp_2sem_3yr_male', total_tdp_2sem_3yr_female='$total_tdp_2sem_3yr_female',
total_tdp_2sem_4yr_male='$total_tdp_2sem_4yr_male', total_tdp_2sem_4yr_female='$total_tdp_2sem_4yr_female',
total_tdp_2sem_5yr_male='$total_tdp_2sem_5yr_male', total_tdp_2sem_5yr_female='$total_tdp_2sem_5yr_female',
total_tdp_2sem_6yr_male='$total_tdp_2sem_6yr_male', total_tdp_2sem_6yr_female='$total_tdp_2sem_6yr_female',

total_tdp_3sem_1yr_male='$total_tdp_3sem_1yr_male', total_tdp_3sem_1yr_female='$total_tdp_3sem_1yr_female', 
total_tdp_3sem_2yr_male='$total_tdp_3sem_2yr_male', total_tdp_3sem_2yr_female='$total_tdp_3sem_2yr_female',
total_tdp_3sem_3yr_male='$total_tdp_3sem_3yr_male', total_tdp_3sem_3yr_female='$total_tdp_3sem_3yr_female',
total_tdp_3sem_4yr_male='$total_tdp_3sem_4yr_male', total_tdp_3sem_4yr_female='$total_tdp_3sem_4yr_female',
total_tdp_3sem_5yr_male='$total_tdp_3sem_5yr_male', total_tdp_3sem_5yr_female='$total_tdp_3sem_5yr_female',
total_tdp_3sem_6yr_male='$total_tdp_3sem_6yr_male', total_tdp_3sem_6yr_female='$total_tdp_3sem_6yr_female',

total_tdp_sum_mid_1yr_male='$total_tdp_sum_mid_1yr_male', total_tdp_sum_mid_1yr_female='$total_tdp_sum_mid_1yr_female', 
total_tdp_sum_mid_2yr_male='$total_tdp_sum_mid_2yr_male', total_tdp_sum_mid_2yr_female='$total_tdp_sum_mid_2yr_female',
total_tdp_sum_mid_3yr_male='$total_tdp_sum_mid_3yr_male', total_tdp_sum_mid_3yr_female='$total_tdp_sum_mid_3yr_female',
total_tdp_sum_mid_4yr_male='$total_tdp_sum_mid_4yr_male', total_tdp_sum_mid_4yr_female='$total_tdp_sum_mid_4yr_female',
total_tdp_sum_mid_5yr_male='$total_tdp_sum_mid_5yr_male', total_tdp_sum_mid_5yr_female='$total_tdp_sum_mid_5yr_female',
total_tdp_sum_mid_6yr_male='$total_tdp_sum_mid_6yr_male', total_tdp_sum_mid_6yr_female='$total_tdp_sum_mid_6yr_female',

total_tdp_graduated_male='$total_tdp_graduated_male', total_tdp_graduated_female='$total_tdp_graduated_female', total_tdp_exceeded_mrr_male='$total_tdp_exceeded_mrr_male', total_tdp_exceeded_mrr_female='$total_tdp_exceeded_mrr_female'
WHERE uid='$uid' ";
$result = mysqli_query($conn, $sql);

echo "<script>
Swal.fire(
    'Success!',
    'You added a record!',
    'success'
)
</script>";

include "./inc_tdp_programs_table.php";
