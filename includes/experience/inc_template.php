<?php

$sql = "SELECT * FROM tbl_hei_experience WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $question_26 = $row['question_1'];
        $question_27 = $row['question_2'];
        $question_28 = $row['question_3'];
    }
} else {
    $question_26 = "";
    $question_27 = "";
    $question_28 = "";
}
