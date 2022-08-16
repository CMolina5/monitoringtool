<?php
$sql = "SELECT * FROM tbl_hei_records WHERE uid = '$_SESSION[form_id]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ac_year=$row['ac_year'];
        $ac_calendar=$row['ac_calendar'];
        $fhe=$row['fhe'];
        $tes=$row['tes'];   
        $tdp=$row['tdp'];
        $form_status=$row['form_status'];
    }
}