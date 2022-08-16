<?php
session_start();
include_once '../db_connection.php';
include 'inc_template.php';

$ac_year = mysqli_real_escape_string($conn, $_SESSION['ac_year']);
$hei_psg_region = mysqli_real_escape_string($conn, $_SESSION['hei_psg_region']);
$hei_uii = mysqli_real_escape_string($conn, $_SESSION['hei_uii']);
$hei_name = mysqli_real_escape_string($conn, $_SESSION['hei_name']);
$program = "FHE";
$fhe_drop_reason = mysqli_real_escape_string($conn, $_POST['fhe_drop_reason']);
$fhe_drop_other = mysqli_real_escape_string($conn, $_POST['fhe_drop_other']);
$fhe_drop_1st = mysqli_real_escape_string($conn, $_POST['fhe_drop_1st']);
$fhe_drop_2nd = mysqli_real_escape_string($conn, $_POST['fhe_drop_2nd']);

if(empty($fhe_drop_1st)){
    $fhe_drop_1st=0;
}
if(empty($fhe_drop_2nd)){
    $fhe_drop_2nd=0;
}

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (reason ='$fhe_drop_reason' OR reason ='$fhe_drop_other') AND program='FHE'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    echo "<script>
    alert('Same data already exist! You may edit it in the table.')
    </script>";
} else {
    if ($ac_calendar == 'Trimester') {
        $fhe_drop_3rd = mysqli_real_escape_string($conn, $_POST['fhe_drop_3rd']);
        if(empty($fhe_drop_3rd)){
            $fhe_drop_3rd=0;
        }
        if ($fhe_drop_reason == 'Others' && !empty($fhe_drop_other)) {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd, total_dropout_3rd)
    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_drop_other', '$fhe_drop_1st', '$fhe_drop_2nd', '$fhe_drop_3rd')";
            $result = mysqli_query($conn, $sql);
        } else if ($fhe_drop_reason == 'Others' && empty($fhe_drop_other)) {
            echo "<script>
            alert('Please specify reason for dropping.')
            </script>";
        }else {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd, total_dropout_3rd)
    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_drop_reason', '$fhe_drop_1st', '$fhe_drop_2nd', '$fhe_drop_3rd')";
            $result = mysqli_query($conn, $sql);
        }
    } else if ($ac_calendar == 'Trimester with Summer') {
        $fhe_drop_3rd = mysqli_real_escape_string($conn, $_POST['fhe_drop_3rd']);
        $fhe_drop_summer_midyear = mysqli_real_escape_string($conn, $_POST['fhe_drop_summer_midyear']);

        if(empty($fhe_drop_3rd)){
            $fhe_drop_3rd=0;
        }
        if(empty($fhe_drop_summer_midyear)){
            $fhe_drop_summer_midyear=0;
        }
        
        if ($fhe_drop_reason == 'Others' && !empty($fhe_drop_other)) {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd, total_dropout_3rd , total_dropout_summer_midterm)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_drop_other', '$fhe_drop_1st', '$fhe_drop_2nd', '$fhe_drop_3rd', '$fhe_drop_summer_midyear')";
            $result = mysqli_query($conn, $sql);
        } else if ($fhe_drop_reason == 'Others' && empty($fhe_drop_other)) {
            echo "<script>
            alert('Please specify reason for dropping.')
            </script>";
        } else {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd, total_dropout_3rd, total_dropout_summer_midterm)
    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_drop_reason', '$fhe_drop_1st', '$fhe_drop_2nd', '$fhe_drop_3rd', '$fhe_drop_summer_midyear')";
            $result = mysqli_query($conn, $sql);
        }
    } else if ($ac_calendar == 'Semester with Summer') {
        $fhe_drop_summer_midyear = mysqli_real_escape_string($conn, $_POST['fhe_drop_summer_midyear']);
        if(empty($fhe_drop_summer_midyear)){
            $fhe_drop_summer_midyear=0;
        }
        if ($fhe_drop_reason == 'Others' && !empty($fhe_drop_other)) {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd, total_dropout_summer_midterm)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_drop_other', '$fhe_drop_1st', '$fhe_drop_2nd', '$fhe_drop_summer_midyear')";
            $result = mysqli_query($conn, $sql);
        } else if ($fhe_drop_reason == 'Others' && empty($fhe_drop_other)) {
            echo "<script>
            alert('Please specify reason for dropping.')
            </script>";
        } else {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd, total_dropout_summer_midterm)
    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_drop_reason', '$fhe_drop_1st', '$fhe_drop_2nd', '$fhe_drop_summer_midyear')";
            $result = mysqli_query($conn, $sql);
        }
    } else if ($ac_calendar == 'Semester') {
        if ($fhe_drop_reason == 'Others' && !empty($fhe_drop_other)) {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_drop_other', '$fhe_drop_1st', '$fhe_drop_2nd')";
            $result = mysqli_query($conn, $sql);
        } else if ($fhe_drop_reason == 'Others' && empty($fhe_drop_other)) {
            echo "<script>
            alert('Please specify reason for dropping.')
            </script>";
        } else {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd)
    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_drop_reason', '$fhe_drop_1st', '$fhe_drop_2nd')";
            $result = mysqli_query($conn, $sql);
        }
    }
}
include "inc_fhe_dropouts.php";
