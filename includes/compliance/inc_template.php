<?php

$sql = "SELECT * FROM tbl_hei_compliance WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $question_1 = $row['question_1'];
        $question_2 = $row['question_2'];
        $question_3 = $row['question_3'];
        $question_4 = $row['question_4'];
        $question_5 = $row['question_5'];
        $question_6 = $row['question_6'];
        $question_7 = $row['question_7'];
        $question_8 = $row['question_8'];
        $question_9 = $row['question_9'];
        $question_10 = $row['question_10'];
        $question_11 = $row['question_11'];
        $question_12 = $row['question_12'];
        $question_13 = $row['question_13'];
        $question_14 = $row['question_14'];
        $question_15 = $row['question_15'];
        $question_16 = $row['question_16'];
        $question_17 = $row['question_17'];
        $question_18 = $row['question_18'];
        $question_19 = $row['question_19'];
        $question_20 = $row['question_20'];
        $question_21 = $row['question_21'];
        $question_22 = $row['question_22'];
        $question_23 = $row['question_23'];
        $question_24 = $row['question_24'];
        $question_25 = $row['question_25'];
    }
} else {
    $question_1 = "";
    $question_2 = "";
    $question_3 = "";
    $question_4 = "";
    $question_5 = "";
    $question_6 = "";
    $question_7 = "";
    $question_8 = "";
    $question_9 = "";
    $question_10 = "";
    $question_11 = "";
    $question_12 = "";
    $question_13 = "";
    $question_14 = "";
    $question_15 = "";
    $question_16 = "";
    $question_17 = "";
    $question_18 = "";
    $question_19 = "";
    $question_20 = "";
    $question_21 = "";
    $question_22 = "";
    $question_23 = "";
    $question_24 = "";
    $question_25 = "";
}

$sql2 = "SELECT * FROM tbl_hei_records WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result2 = mysqli_query($conn, $sql2);
$resultCheck2 = mysqli_num_rows($result2);

if ($resultCheck2 > 0) {
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $ac_calendar = $row2['ac_calendar'];
        $fhe = $row2['fhe'];
        $tes = $row2['tes'];
        $tdp = $row2['tdp'];
    }
} else {
    $ac_calendar = "";
    $fhe = "";
    $tes = "";
    $tdp = "";
}
