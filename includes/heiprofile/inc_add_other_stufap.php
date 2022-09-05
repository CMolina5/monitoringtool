<?php
session_start();
include_once '../db_connection.php';

$stufap_name = mysqli_real_escape_string($conn, $_POST['stufap_name']);
$stufap_type = mysqli_real_escape_string($conn, $_POST['stufap_type']);
$total_other_stufap_beneficiaries_1st = mysqli_real_escape_string($conn, $_POST['total_other_stufap_beneficiaries_1st']);
$total_other_stufap_beneficiaries_2nd = mysqli_real_escape_string($conn, $_POST['total_other_stufap_beneficiaries_2nd']);
$total_other_stufap_beneficiaries_3rd = mysqli_real_escape_string($conn, $_POST['total_other_stufap_beneficiaries_3rd']);
$total_other_stufap_beneficiaries_4th = mysqli_real_escape_string($conn, $_POST['total_other_stufap_beneficiaries_4th']);
$total_other_stufap_beneficiaries_5th = mysqli_real_escape_string($conn, $_POST['total_other_stufap_beneficiaries_5th']);
$total_other_stufap_beneficiaries_6th = mysqli_real_escape_string($conn, $_POST['total_other_stufap_beneficiaries_6th']);

$sql = "INSERT INTO tbl_hei_other_funded_stufaps (ac_year, hei_psg_region, hei_uii, hei_name, stufap_name, stufap_type, total_stufap_1st, total_stufap_2nd, total_stufap_3rd, total_stufap_4th, total_stufap_5th, total_stufap_6th)
VALUES ('$_SESSION[ac_year]', '$_SESSION[hei_psg_region]', '$_SESSION[hei_uii]', '$_SESSION[hei_name]', '$stufap_name', '$stufap_type', '$total_other_stufap_beneficiaries_1st', '$total_other_stufap_beneficiaries_2nd', '$total_other_stufap_beneficiaries_3rd', '$total_other_stufap_beneficiaries_4th', '$total_other_stufap_beneficiaries_5th', '$total_other_stufap_beneficiaries_6th')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "./inc_stufaps.php";
}
