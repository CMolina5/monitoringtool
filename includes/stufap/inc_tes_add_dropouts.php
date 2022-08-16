<?php
session_start();
include_once '../db_connection.php';

$ac_year = mysqli_real_escape_string($conn, $_SESSION['ac_year']);
$hei_psg_region = mysqli_real_escape_string($conn, $_SESSION['hei_psg_region']);
$hei_uii = mysqli_real_escape_string($conn, $_SESSION['hei_uii']);
$hei_name = mysqli_real_escape_string($conn, $_SESSION['hei_name']);
$program = "TES";
$tes_drop_reason = mysqli_real_escape_string($conn, $_POST['tes_drop_reason']);
$tes_drop_other = mysqli_real_escape_string($conn, $_POST['tes_drop_other']);
$tes_drop_1st = mysqli_real_escape_string($conn, $_POST['tes_drop_1st']);
$tes_drop_2nd = mysqli_real_escape_string($conn, $_POST['tes_drop_2nd']);

if(empty($tes_drop_1st)){
    $tes_drop_1st=0;
}
if(empty($tes_drop_2nd)){
    $tes_drop_2nd=0;
}

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (reason ='$tes_drop_reason' OR reason ='$tes_drop_other') AND program='TES'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    echo "<script>
    alert('Same data already exist! You may edit it in the table.')
    </script>";
}else{
    if ($tes_drop_reason == 'Others' && !empty($tes_drop_other)) {
        $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tes_drop_other', '$tes_drop_1st', '$tes_drop_2nd')";
        $result = mysqli_query($conn, $sql);
    } else if ($tes_drop_reason == 'Others' && empty($tes_drop_other)) {
        echo "<script>
        alert('Please specify reason for dropping.')
        </script>";
    }else {
        $sql = "INSERT INTO tbl_drop_outs (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_dropout_1st, total_dropout_2nd)
        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$tes_drop_reason', '$tes_drop_1st', '$tes_drop_2nd')";
        $result = mysqli_query($conn, $sql);
    }

}

include "./inc_tes_dropouts.php";
