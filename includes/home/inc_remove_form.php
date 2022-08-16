<?php
session_start();
include_once '../db_connection.php';

$uid = mysqli_real_escape_string($conn, $_SESSION['form_id']);

$sql = "SELECT * FROM tbl_hei_records WHERE uid='$uid';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ac_year = $row['ac_year'];
        $hei_psg_region = $row['hei_psg_region'];
        $hei_uii = $row['hei_uii'];
    }
    $sql2 = "SELECT * FROM tbl_degree_programs_temp WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result2 = mysqli_query($conn, $sql2);
    $resultCheck2 = mysqli_num_rows($result2);
    if ($resultCheck2 > 0) {
        $sql2 = "DELETE FROM tbl_degree_programs_temp
    WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
        $result2 = mysqli_query($conn, $sql2);
    }

    $sql3 = "SELECT * FROM tbl_degree_programs WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result3 = mysqli_query($conn, $sql3);
    $resultCheck3 = mysqli_num_rows($result3);
    if ($resultCheck3 > 0) {
        $sql3 = "DELETE FROM tbl_degree_programs
    WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
        $result3 = mysqli_query($conn, $sql3);
    }
    
    $sql4 = "SELECT * FROM tbl_hei_personnel WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result4 = mysqli_query($conn, $sql4);
    $resultCheck4 = mysqli_num_rows($result4);
    if ($resultCheck4 > 0) {
        $sql4 = "DELETE FROM tbl_hei_personnel
    WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
        $result4 = mysqli_query($conn, $sql4);
    }

    $sql5 = "SELECT * FROM tbl_hei_demographic WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result5 = mysqli_query($conn, $sql5);
    $resultCheck5 = mysqli_num_rows($result5);
    if ($resultCheck5 > 0) {
        $sql5 = "DELETE FROM tbl_hei_demographic
    WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
        $result5 = mysqli_query($conn, $sql5);
    }

    $sql6 = "SELECT * FROM tbl_tes_category WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result6 = mysqli_query($conn, $sql6);
    $resultCheck6 = mysqli_num_rows($result6);
    if ($resultCheck6 > 0) {
        $sql6 = "DELETE FROM tbl_tes_category
    WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
        $result6 = mysqli_query($conn, $sql6);
    }

    $sql7 = "SELECT * FROM tbl_stufap_info WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result7 = mysqli_query($conn, $sql7);
    $resultCheck7 = mysqli_num_rows($result7);
    if ($resultCheck7 > 0) {
        $sql7 = "DELETE FROM tbl_stufap_info
    WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
        $result7 = mysqli_query($conn, $sql7);
    }

    $sql8 = "SELECT * FROM tbl_drop_outs WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result8 = mysqli_query($conn, $sql8);
    $resultCheck8 = mysqli_num_rows($result8);
    if ($resultCheck8 > 0) {
        $sql8 = "DELETE FROM tbl_drop_outs
    WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
        $result8 = mysqli_query($conn, $sql8);
    }

    $sql9 = "SELECT * FROM tbl_hei_compliance WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result9 = mysqli_query($conn, $sql9);
    $resultCheck9 = mysqli_num_rows($result9);
    if ($resultCheck9 > 0) {
        $sql9 = "DELETE FROM tbl_hei_compliance
    WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
        $result9 = mysqli_query($conn, $sql9);
    }

    $sql10 = "SELECT * FROM tbl_hei_experience WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result10 = mysqli_query($conn, $sql10);
    $resultCheck10 = mysqli_num_rows($result10);
    if ($resultCheck10 > 0) {
        $sql10 = "DELETE FROM tbl_hei_experience
    WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
        $result10 = mysqli_query($conn, $sql10);
    }

    $sql = "DELETE FROM tbl_hei_records
        WHERE ac_year='$ac_year' AND hei_psg_region='$hei_psg_region' AND hei_uii='$hei_uii';";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo mysqli_error($conn);
        die();
    } else {
        include "./inc_hei_records.php";
    }
   
}




