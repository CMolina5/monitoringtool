<?php
session_start();
include_once '../db_connection.php';

$answer = mysqli_real_escape_string($conn, $_POST['answer']);
$answer1 = mysqli_real_escape_string($conn, $_POST['answer1']);
$answer2 = mysqli_real_escape_string($conn, $_POST['answer2']);
$answer3 = mysqli_real_escape_string($conn, $_POST['answer3']);
$answer4 = mysqli_real_escape_string($conn, $_POST['answer4']);
$answer5 = mysqli_real_escape_string($conn, $_POST['answer5']);
$answer6 = mysqli_real_escape_string($conn, $_POST['answer6']);
$answer7 = mysqli_real_escape_string($conn, $_POST['answer7']);
$answer8 = mysqli_real_escape_string($conn, $_POST['answer8']);
$answer9 = mysqli_real_escape_string($conn, $_POST['answer9']);
$answer10 = mysqli_real_escape_string($conn, $_POST['answer10']);
$answer11 = mysqli_real_escape_string($conn, $_POST['answer11']);
$answer12 = mysqli_real_escape_string($conn, $_POST['answer12']);
$answer13 = mysqli_real_escape_string($conn, $_POST['answer13']);
$answer14 = mysqli_real_escape_string($conn, $_POST['answer14']);
$answer15 = mysqli_real_escape_string($conn, $_POST['answer15']);
$answer16 = mysqli_real_escape_string($conn, $_POST['answer16']);
$answer17 = mysqli_real_escape_string($conn, $_POST['answer17']);
$answer18 = mysqli_real_escape_string($conn, $_POST['answer18']);
$answer19 = mysqli_real_escape_string($conn, $_POST['answer19']);
$answer20 = mysqli_real_escape_string($conn, $_POST['answer20']);
$answer21 = mysqli_real_escape_string($conn, $_POST['answer21']);
$answer22 = mysqli_real_escape_string($conn, $_POST['answer22']);
$answer23 = mysqli_real_escape_string($conn, $_POST['answer23']);
$answer24 = mysqli_real_escape_string($conn, $_POST['answer24']);

$sql = "SELECT * FROM tbl_hei_compliance WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "UPDATE tbl_hei_compliance
    SET question_1='$answer', question_2='$answer1', question_3='$answer2', question_4='$answer3', question_5='$answer4', question_6='$answer5', question_7='$answer6', question_8='$answer7', question_9='$answer8', question_10='$answer9', question_11='$answer10', question_12='$answer11', question_13='$answer12', question_14='$answer13', question_15='$answer14', question_16='$answer15', question_17='$answer16', question_18='$answer17', question_19='$answer18', question_20='$answer19', question_21='$answer20', question_22='$answer21', question_23='$answer22', question_24='$answer23', question_25='$answer24'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo mysqli_error($conn);
        die();
    } else {
         if($_SESSION['ac_year']=='2022-2023'){
            header("Location:../../experience.php");
            exit();
        }else{
            header("Location:../../masterlist.php");
        exit();
        }
    }
} else {
    $sql = "INSERT INTO tbl_hei_compliance (ac_year, hei_psg_region, hei_uii, hei_name, question_1, question_2,question_3, question_4, question_5, question_6, question_7, question_8, question_9, question_10, question_11, question_12, question_13, question_14, question_15, question_16, question_17, question_18, question_19, question_20, question_21, question_22, question_23, question_24, question_25)
    VALUES ('$_SESSION[ac_year]', '$_SESSION[hei_psg_region]', '$_SESSION[hei_uii]', '$_SESSION[hei_name]', '$answer', '$answer1', '$answer2', '$answer3', '$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9', '$answer10', '$answer11', '$answer12', '$answer13', '$answer14', '$answer15', '$answer16', '$answer17', '$answer18', '$answer19', '$answer20', '$answer21', '$answer22', '$answer23', '$answer24')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo mysqli_error($conn);
        die();
    } else {
        if($_SESSION['ac_year']=='2022-2023'){
            header("Location:../../experience.php");
            exit();
        }else{
        header("Location:../../masterlist.php");
        exit();
        }
    }
}
