<?php
session_start();
include_once '../db_connection.php';

$answer1 = mysqli_real_escape_string($conn, $_POST['answer1']);
$answer2 = mysqli_real_escape_string($conn, $_POST['answer2']);
$answer3 = mysqli_real_escape_string($conn, $_POST['answer3']);

$sql = "SELECT * FROM tbl_hei_experience WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "UPDATE tbl_hei_experience 
    SET question_1='$answer1', question_2='$answer2', question_3='$answer3'
    WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo mysqli_error($conn);
        die();
    } else {
        header("Location:../../masterlist.php");
        exit();
    }
} else {
    $sql = "INSERT INTO tbl_hei_experience (ac_year, hei_psg_region, hei_uii, hei_name, question_1, question_2,question_3)
    VALUES ('$_SESSION[ac_year]', '$_SESSION[hei_psg_region]', '$_SESSION[hei_uii]', '$_SESSION[hei_name]', '$answer1', '$answer2', '$answer3')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo mysqli_error($conn);
        die();
    } else {
        header("Location:../../masterlist.php");
        exit();
    }
}
