<?php
session_start();
include_once '../db_connection.php';
include 'inc_template.php';

$ac_year = $_SESSION['ac_year'];
$hei_psg_region = $_SESSION['hei_psg_region'];
$hei_uii = $_SESSION['hei_uii'];
$hei_name = $_SESSION['hei_name'];
$total_fhe_opt_out_1st = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_1st']);
$total_fhe_opt_out_2nd = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_2nd']);
$total_fhe_opt_out_3rd = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_3rd']);
$total_fhe_opt_out_summer_midyear = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_summer_midyear']);
$total_fhe_vol_cont_1st = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_1st']);
$total_fhe_vol_cont_2nd = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_2nd']);
$total_fhe_vol_cont_3rd = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_3rd']);
$total_fhe_vol_cont_summer_midyear = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_summer_midyear']);
$total_fhe_loa_1st = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_1st']);
$total_fhe_loa_2nd = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_2nd']);
$total_fhe_loa_3rd = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_3rd']);
$total_fhe_loa_summer_midyear = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_summer_midyear']);
$total_tes_applicant = mysqli_real_escape_string($conn, $_POST['total_tes_applicant']);
$total_tes_loa_1st = mysqli_real_escape_string($conn, $_POST['total_tes_loa_1st']);
$total_tes_loa_2nd = mysqli_real_escape_string($conn, $_POST['total_tes_loa_2nd']);
$total_tdp_loa_1st = mysqli_real_escape_string($conn, $_POST['total_tdp_loa_1st']);
$total_tdp_loa_2nd = mysqli_real_escape_string($conn, $_POST['total_tdp_loa_2nd']);

if (empty($total_fhe_opt_out_1st)) {
    $total_fhe_opt_out_1st = 0;
}
if (empty($total_fhe_opt_out_2nd)) {
    $total_fhe_opt_out_2nd = 0;
}
if (empty($total_fhe_opt_out_3rd)) {
    $total_fhe_opt_out_3rd = 0;
}
if (empty($total_fhe_opt_out_summer_midyear)) {
    $total_fhe_opt_out_summer_midyear = 0;
}
if (empty($total_fhe_vol_cont_1st)) {
    $total_fhe_vol_cont_1st = 0;
}
if (empty($total_fhe_vol_cont_2nd)) {
    $total_fhe_vol_cont_2nd = 0;
}
if (empty($total_fhe_vol_cont_3rd)) {
    $total_fhe_vol_cont_3rd = 0;
}
if (empty($total_fhe_vol_cont_summer_midyear)) {
    $total_fhe_vol_cont_summer_midyear = 0;
}
if (empty($total_fhe_loa_1st)) {
    $total_fhe_loa_1st = 0;
}
if (empty($total_fhe_loa_2nd)) {
    $total_fhe_loa_2nd = 0;
}
if (empty($total_fhe_loa_3rd)) {
    $total_fhe_loa_3rd = 0;
}
if (empty($total_fhe_loa_summer_midyear)) {
    $total_fhe_loa_summer_midyear = 0;
}
if (empty($total_tes_applicant)) {
    $total_tes_applicant = 0;
}
if (empty($total_tes_loa_1st)) {
    $total_tes_loa_1st = 0;
}
if (empty($total_tes_loa_2nd)) {
    $total_tes_loa_2nd = 0;
}
if (empty($total_tdp_loa_1st)) {
    $total_tdp_loa_1st = 0;
}
if (empty($total_tdp_loa_2nd)) {
    $total_tdp_loa_2nd = 0;
}

$sql = "SELECT * FROM tbl_stufap_info WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "UPDATE tbl_stufap_info
    SET total_fhe_opt_out_1st='$total_fhe_opt_out_1st', total_fhe_vol_cont_1st='$total_fhe_vol_cont_1st', total_fhe_loa_1st='$total_fhe_loa_1st', total_fhe_opt_out_2nd='$total_fhe_opt_out_2nd', total_fhe_vol_cont_2nd='$total_fhe_vol_cont_2nd', total_fhe_loa_2nd='$total_fhe_loa_2nd', total_fhe_opt_out_3rd='$total_fhe_opt_out_3rd', total_fhe_vol_cont_3rd='$total_fhe_vol_cont_3rd', total_fhe_loa_3rd='$total_fhe_loa_3rd', total_fhe_opt_out_summer_midyear='$total_fhe_opt_out_summer_midyear', total_fhe_vol_cont_summer_midyear='$total_fhe_vol_cont_summer_midyear', total_fhe_loa_summer_midyear='$total_fhe_loa_summer_midyear', total_tes_applicant='$total_tes_applicant', total_tes_loa_1st='$total_tes_loa_1st', total_tes_loa_2nd='$total_tes_loa_2nd', total_tdp_loa_1st='$total_tdp_loa_1st', total_tdp_loa_2nd='$total_tdp_loa_2nd'";


    if (!$result) {
        echo mysqli_error($conn);
        die();
    } else {
        header("Location:../../compliance.php");
        exit();
    }
} else {
    if ($fhe == 'yes' and $tes == 'no' and $tdp == 'no') {
        if ($ac_calendar == 'Trimester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_3rd, total_fhe_opt_out_summer_midyear, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_3rd, total_fhe_vol_cont_summer_midyear, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_3rd, total_fhe_loa_summer_midyear)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_3rd, $total_fhe_opt_out_summer_midyear, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_3rd, $total_fhe_vol_cont_summer_midyear, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_3rd, $total_fhe_loa_summer_midyear)";
        } else if ($ac_calendar == 'Semester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_summer_midyear, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_summer_midyear, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_summer_midyear)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_summer_midyear, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_summer_midyear, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_summer_midyear)";
        } else if ($ac_calendar == 'Trimester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_3rd, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_3rd,  total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_3rd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_3rd, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_3rd, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_3rd)";
        } else if ($ac_calendar == 'Semester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_loa_1st, total_fhe_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_loa_1st, $total_fhe_loa_2nd)";
        }
    } else if ($fhe == 'yes' and $tes == 'yes' and $tdp == 'no') {
        if ($ac_calendar == 'Trimester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_3rd, total_fhe_opt_out_summer_midyear, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_3rd, total_fhe_vol_cont_summer_midyear, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_3rd, total_fhe_loa_summer_midyear, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_3rd, $total_fhe_opt_out_summer_midyear, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_3rd, $total_fhe_vol_cont_summer_midyear, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_3rd, $total_fhe_loa_summer_midyear, $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd)";
        } else if ($ac_calendar == 'Semester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_summer_midyear, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_summer_midyear, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_summer_midyear, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_summer_midyear, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_summer_midyear, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_summer_midyear, $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd)";
        } else if ($ac_calendar == 'Trimester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_3rd, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_3rd, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_3rd, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_3rd, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_3rd, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_3rd, $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd)";
        } else if ($ac_calendar == 'Semester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_loa_1st, total_fhe_loa_2nd, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd)";
        }
    } else if ($fhe == 'yes' and $tes == 'yes' and $tdp == 'yes') {
        if ($ac_calendar == 'Trimester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_3rd, total_fhe_opt_out_summer_midyear, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_3rd, total_fhe_vol_cont_summer_midyear, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_3rd, total_fhe_loa_summer_midyear, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd, total_tdp_loa_1st, total_tdp_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_3rd, $total_fhe_opt_out_summer_midyear, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_3rd, $total_fhe_vol_cont_summer_midyear, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_3rd, $total_fhe_loa_summer_midyear, $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd, $total_tdp_loa_1st, $total_tdp_loa_2nd)";
        } else if ($ac_calendar == 'Semester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_summer_midyear, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_summer_midyear, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_summer_midyear, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd, total_tdp_loa_1st, total_tdp_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_summer_midyear, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_summer_midyear, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_summer_midyear, $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd, $total_tdp_loa_1st, $total_tdp_loa_2nd)";
        } else if ($ac_calendar == 'Trimester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_3rd, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_3rd,  total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_3rd, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd, total_tdp_loa_1st, total_tdp_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_3rd, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_3rd, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_3rd, $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd, $total_tdp_loa_1st, $total_tdp_loa_2nd)";
        } else if ($ac_calendar == 'Semester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_loa_1st, total_fhe_loa_2nd, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd, total_tdp_loa_1st, total_tdp_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd, $total_tdp_loa_1st, $total_tdp_loa_2nd)";
        }
    } else if ($fhe == 'yes' and $tes == 'no' and $tdp == 'yes') {
        if ($ac_calendar == 'Trimester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_3rd, total_fhe_opt_out_summer_midyear, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_3rd, total_fhe_vol_cont_summer_midyear, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_3rd, total_fhe_loa_summer_midyear, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd, total_tdp_loa_1st, total_tdp_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_3rd, $total_fhe_opt_out_summer_midyear, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_3rd, $total_fhe_vol_cont_summer_midyear, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_3rd, $total_fhe_loa_summer_midyear, $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd, $total_tdp_loa_1st, $total_tdp_loa_2nd)";
        } else if ($ac_calendar == 'Semester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_summer_midyear, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_summer_midyear, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_summer_midyear, total_tdp_loa_1st, total_tdp_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd,$total_fhe_opt_out_summer_midyear, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_summer_midyear, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_summer_midyear, $total_tdp_loa_1st, $total_tdp_loa_2nd)";
        } else if ($ac_calendar == 'Trimester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_opt_out_3rd, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_vol_cont_3rd, total_fhe_loa_1st, total_fhe_loa_2nd, total_fhe_loa_3rd, total_tdp_loa_1st, total_tdp_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_opt_out_3rd, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_vol_cont_3rd, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_fhe_loa_3rd, $total_tdp_loa_1st, $total_tdp_loa_2nd)";
        } else if ($ac_calendar == 'Semester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_fhe_opt_out_1st, total_fhe_opt_out_2nd, total_fhe_vol_cont_1st, total_fhe_vol_cont_2nd, total_fhe_loa_1st, total_fhe_loa_2nd, total_tdp_loa_1st, total_tdp_loa_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_fhe_opt_out_1st, $total_fhe_opt_out_2nd, $total_fhe_vol_cont_1st, $total_fhe_vol_cont_2nd, $total_fhe_loa_1st, $total_fhe_loa_2nd, $total_tdp_loa_1st, $total_tdp_loa_2nd)";
        }
    } else if ($fhe == 'no' and $tes == 'yes' and $tdp == 'yes') {
        $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd, total_tdp_loa_1st, total_tdp_loa_2nd)
    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd, $total_tdp_loa_1st, $total_tdp_loa_2nd)";
    } else if ($fhe == 'no' and $tes == 'yes' and $tdp == 'no') {
        $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_tes_applicant, total_tes_loa_1st, total_tes_loa_2nd)
    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_tes_applicant, $total_tes_loa_1st, $total_tes_loa_2nd)";
    } else if ($fhe == 'no' and $tes == 'no' and $tdp == 'yes') {
        $sql = "INSERT INTO tbl_stufap_info (ac_year, hei_psg_region, hei_uii, hei_name, total_tdp_loa_1st, total_tdp_loa_2nd)
    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', $total_tdp_loa_1st, $total_tdp_loa_2nd)";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location:../../compliance.php");
        exit();
    } else {
        echo mysqli_error($conn);
        die();
    }
}
