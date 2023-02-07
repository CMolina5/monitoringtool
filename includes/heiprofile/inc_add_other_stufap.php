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

if (empty($total_other_stufap_beneficiaries_1st)) {
    $total_other_stufap_beneficiaries_1st = 0;
}
if (empty($total_other_stufap_beneficiaries_2nd)) {
    $total_other_stufap_beneficiaries_2nd = 0;
}
if (empty($total_other_stufap_beneficiaries_3rd)) {
    $total_other_stufap_beneficiaries_3rd = 0;
}
if (empty($total_other_stufap_beneficiaries_4th)) {
    $total_other_stufap_beneficiaries_4th = 0;
}
if (empty($total_other_stufap_beneficiaries_5th)) {
    $total_other_stufap_beneficiaries_5th = 0;
}
if (empty($total_other_stufap_beneficiaries_6th)) {
    $total_other_stufap_beneficiaries_6th = 0;
}

$sql = "SELECT * FROM tbl_hei_other_funded_stufaps WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND stufap_name = '$stufap_name'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    echo "<script>
        Swal.fire(
            'Data already exist!',
            'Please select the data in the table to update!',
            'warning'
        )
    </script>";
} else {

$sql = "INSERT INTO tbl_hei_other_funded_stufaps (ac_year, hei_psg_region, hei_uii, hei_name, stufap_name, stufap_type, total_stufap_1st, total_stufap_2nd, total_stufap_3rd, total_stufap_4th, total_stufap_5th, total_stufap_6th)
    VALUES ('$_SESSION[ac_year]', '$_SESSION[hei_psg_region]', '$_SESSION[hei_uii]', '$_SESSION[hei_name]', '$stufap_name', '$stufap_type', '$total_other_stufap_beneficiaries_1st', '$total_other_stufap_beneficiaries_2nd', '$total_other_stufap_beneficiaries_3rd', '$total_other_stufap_beneficiaries_4th', '$total_other_stufap_beneficiaries_5th', '$total_other_stufap_beneficiaries_6th')";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "./inc_other_stufaps.php";
}

}