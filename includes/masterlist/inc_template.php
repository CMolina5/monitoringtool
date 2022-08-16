<?php
$sql = "SELECT * FROM tbl_hei_records WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ac_calendar = $row['ac_calendar'];
        $fhe = $row['fhe'];
        $tes = $row['tes'];
        $tdp = $row['tdp'];
        $form_status=$row['form_status'];
    }
} else {
    $ac_calendar = "";
    $fhe = "";
    $tes = "";
    $tdp = "";
    $form_status="";
}
