<?php
session_start();
include_once '../db_connection.php';
include 'inc_template.php';

$ac_year = mysqli_real_escape_string($conn, $_SESSION['ac_year']);
$hei_psg_region = mysqli_real_escape_string($conn, $_SESSION['hei_psg_region']);
$hei_uii = mysqli_real_escape_string($conn, $_SESSION['hei_uii']);
$hei_name = mysqli_real_escape_string($conn, $_SESSION['hei_name']);
$program = "TDP";
$tdp_drop_reason = mysqli_real_escape_string($conn, $_POST['tdp_drop_reason']);
$tdp_drop_other = mysqli_real_escape_string($conn, $_POST['tdp_drop_other']);
$tdp_drop_1st_male = mysqli_real_escape_string($conn, $_POST['tdp_drop_1st_male']);
$tdp_drop_1st_female = mysqli_real_escape_string($conn, $_POST['tdp_drop_1st_female']);
$tdp_drop_2nd_male = mysqli_real_escape_string($conn, $_POST['tdp_drop_2nd_male']);
$tdp_drop_2nd_female = mysqli_real_escape_string($conn, $_POST['tdp_drop_2nd_female']);

if(empty($tdp_drop_1st_male)){
    $tdp_drop_1st_male=0;
}
if(empty($tdp_drop_1st_female)){
    $tdp_drop_1st_female=0;
}
if(empty($tdp_drop_2nd_male)){
    $tdp_drop_2nd_male=0;
}
if(empty($tdp_drop_2nd_female)){
    $tdp_drop_2nd_female=0;
}

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (reason ='$tdp_drop_reason' OR reason ='$tdp_drop_other') AND program='TDP'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    echo "<script>
    alert('Same data already exist! You may edit it in the table.')
    </script>";
} else {
    if ($ac_calendar == 'Trimester') {
        $tdp_drop_3rd_male = mysqli_real_escape_string($conn, $_POST['tdp_drop_3rd_male']);
        $tdp_drop_3rd_female = mysqli_real_escape_string($conn, $_POST['tdp_drop_3rd_female']);
        if(empty($tdp_drop_3rd_male)){
            $tdp_drop_3rd_male=0;
        }
        if(empty($tdp_drop_3rd_female)){
            $tdp_drop_3rd_female=0;
        }
        if ($tdp_drop_reason == 'Others' && !empty($tdp_drop_other)) {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st_male, total_dropout_1st_female, total_dropout_2nd_male, total_dropout_2nd_female, total_dropout_3rd_male, total_dropout_3rd_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_other', '$tdp_drop_1st_male', '$tdp_drop_1st_female', '$tdp_drop_2nd_male','$tdp_drop_2nd_female', '$tdp_drop_3rd_male', '$tdp_drop_3rd_female')";
            $result = mysqli_query($conn, $sql);
        } else if ($tdp_drop_reason == 'Others' && empty($tdp_drop_other)) {
            echo "<script>
            alert('Please specify reason for dropping.')
            </script>";
        }else {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st_male, total_dropout_1st_female, total_dropout_2nd_male, total_dropout_2nd_female, total_dropout_3rd_male, total_dropout_3rd_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_reason', '$tdp_drop_1st_male', '$tdp_drop_1st_female', '$tdp_drop_2nd_male','$tdp_drop_2nd_female', '$tdp_drop_3rd_male', '$tdp_drop_3rd_female')";
            $result = mysqli_query($conn, $sql);
        }
    } else if ($ac_calendar == 'Trimester with Summer') {
        $tdp_drop_3rd_male = mysqli_real_escape_string($conn, $_POST['tdp_drop_3rd_male']);
        $tdp_drop_3rd_female = mysqli_real_escape_string($conn, $_POST['tdp_drop_3rd_female']);
        $tdp_drop_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['tdp_drop_summer_midyear_male']);
        $tdp_drop_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['tdp_drop_summer_midyear_female']);

        if(empty($tdp_drop_3rd_male)){
            $tdp_drop_3rd_male=0;
        }
        if(empty($tdp_drop_3rd_female)){
            $tdp_drop_3rd_female=0;
        }
        if(empty($tdp_drop_summer_midyear_male)){
            $tdp_drop_summer_midyear_male=0;
        }
        if(empty($tdp_drop_summer_midyear_female)){
            $tdp_drop_summer_midyear_female=0;
        }
        
        if ($tdp_drop_reason == 'Others' && !empty($tdp_drop_other)) {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st_male, total_dropout_1st_female, total_dropout_2nd_male, total_dropout_2nd_female, total_dropout_3rd_male, total_dropout_3rd_female, total_dropout_sum_mid_male, total_dropout_sum_mid_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_other', '$tdp_drop_1st_male', '$tdp_drop_1st_female', '$tdp_drop_2nd_male','$tdp_drop_2nd_female', '$tdp_drop_3rd_male', '$tdp_drop_3rd_female', '$tdp_drop_summer_midyear_male', '$tdp_drop_summer_midyear_female')";
            $result = mysqli_query($conn, $sql);
        } else if ($tdp_drop_reason == 'Others' && empty($tdp_drop_other)) {
            echo "<script>
            alert('Please specify reason for dropping.')
            </script>";
        } else {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st_male, total_dropout_1st_female, total_dropout_2nd_male, total_dropout_2nd_female, total_dropout_3rd_male, total_dropout_3rd_female, total_dropout_sum_mid_male, total_dropout_sum_mid_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_reason', '$tdp_drop_1st_male', '$tdp_drop_1st_female', '$tdp_drop_2nd_male','$tdp_drop_2nd_female', '$tdp_drop_3rd_male', '$tdp_drop_3rd_female', '$tdp_drop_summer_midyear_male', '$tdp_drop_summer_midyear_female')";
            $result = mysqli_query($conn, $sql);
        }
    } else if ($ac_calendar == 'Semester with Summer') {
        $tdp_drop_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['tdp_drop_summer_midyear_male']);
        $tdp_drop_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['tdp_drop_summer_midyear_female']);
        if(empty($tdp_drop_summer_midyear_male)){
            $tdp_drop_summer_midyear_male=0;
        }
        if(empty($tdp_drop_summer_midyear_female)){
            $tdp_drop_summer_midyear_female=0;
        }
        if ($tdp_drop_reason == 'Others' && !empty($tdp_drop_other)) {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st_male, total_dropout_1st_female, total_dropout_2nd_male, total_dropout_2nd_female, total_dropout_sum_mid_male, total_dropout_sum_mid_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_other', '$tdp_drop_1st_male', '$tdp_drop_1st_female', '$tdp_drop_2nd_male','$tdp_drop_2nd_female', '$tdp_drop_summer_midyear_male', '$tdp_drop_summer_midyear_female')";
            $result = mysqli_query($conn, $sql);
        } else if ($tdp_drop_reason == 'Others' && empty($tdp_drop_other)) {
            echo "<script>
            alert('Please specify reason for dropping.')
            </script>";
        } else {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st_male, total_dropout_1st_female, total_dropout_2nd_male, total_dropout_2nd_female, total_dropout_sum_mid_male, total_dropout_sum_mid_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_reason', '$tdp_drop_1st_male', '$tdp_drop_1st_female', '$tdp_drop_2nd_male','$tdp_drop_2nd_female', '$tdp_drop_summer_midyear_male', '$tdp_drop_summer_midyear_female')";
            $result = mysqli_query($conn, $sql);
        }
    } else if ($ac_calendar == 'Semester') {
        if ($tdp_drop_reason == 'Others' && !empty($tdp_drop_other)) {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st_male, total_dropout_1st_female, total_dropout_2nd_male, total_dropout_2nd_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_other', '$tdp_drop_1st_male', '$tdp_drop_1st_female', '$tdp_drop_2nd_male','$tdp_drop_2nd_female')";
            $result = mysqli_query($conn, $sql);
        } else if ($tdp_drop_reason == 'Others' && empty($tdp_drop_other)) {
            echo "<script>
            alert('Please specify reason for dropping.')
            </script>";
        } else {
            $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st_male, total_dropout_1st_female, total_dropout_2nd_male, total_dropout_2nd_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_reason', '$tdp_drop_1st_male', '$tdp_drop_1st_female', '$tdp_drop_2nd_male','$tdp_drop_2nd_female')";
            $result = mysqli_query($conn, $sql);
        }
    }
}
include "inc_tdp_dropouts.php";
