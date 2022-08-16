<?php
session_start();
include_once '../db_connection.php';

$ac_year = mysqli_real_escape_string($conn, $_SESSION['ac_year']);
$hei_psg_region = mysqli_real_escape_string($conn, $_SESSION['hei_psg_region']);
$hei_uii = mysqli_real_escape_string($conn, $_SESSION['hei_uii']);
$hei_name = mysqli_real_escape_string($conn, $_SESSION['hei_name']);
$program = "TDP";
$tdp_drop_reason = mysqli_real_escape_string($conn, $_POST['tdp_drop_reason']);
$tdp_drop_other = mysqli_real_escape_string($conn, $_POST['tdp_drop_other']);
$tdp_drop_1st = mysqli_real_escape_string($conn, $_POST['tdp_drop_1st']);
$tdp_drop_2nd = mysqli_real_escape_string($conn, $_POST['tdp_drop_2nd']);

if(empty($tdp_drop_1st)){
    $tdp_drop_1st=0;
}
if(empty($tdp_drop_2nd)){
    $tdp_drop_2nd=0;
}

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (reason ='$tdp_drop_reason' OR reason ='$tdp_drop_other') AND program='TDP'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    echo "<script>
    alert('Same data already exist! You may edit it in the table.')
    </script>";
}else{
    if ($tdp_drop_reason == 'Others' && !empty($tdp_drop_other)) {
        $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_other', '$tdp_drop_1st', '$tdp_drop_2nd')";
        $result = mysqli_query($conn, $sql);
    } else if ($tdp_drop_reason == 'Others' && empty($tdp_drop_other)) {
        echo "<script>
        alert('Please specify reason for dropping.')
        </script>";
    }else {
        $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tdp_drop_reason', '$tdp_drop_1st', '$tdp_drop_2nd')";
        $result = mysqli_query($conn, $sql);
    }

}

include "./inc_tdp_dropouts.php";

