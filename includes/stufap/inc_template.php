<?php

$sql = "SELECT * FROM tbl_stufap_info WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total_fhe_opt_out_1st_male = $row['total_fhe_opt_out_1st_male'];
        $total_fhe_vol_cont_1st_male = $row['total_fhe_vol_cont_1st_male'];
        $total_fhe_opt_out_2nd_male = $row['total_fhe_opt_out_2nd_male'];
        $total_fhe_vol_cont_2nd_male = $row['total_fhe_vol_cont_2nd_male'];
        $total_fhe_opt_out_3rd_male = $row['total_fhe_opt_out_3rd_male'];
        $total_fhe_vol_cont_3rd_male = $row['total_fhe_vol_cont_3rd_male'];
        $total_fhe_opt_out_summer_midyear_male = $row['total_fhe_opt_out_summer_midyear_male'];
        $total_fhe_vol_cont_summer_midyear_male = $row['total_fhe_vol_cont_summer_midyear_male'];
        $total_tes_applicant_male = $row['total_tes_applicant_male'];

        $total_fhe_opt_out_1st_female = $row['total_fhe_opt_out_1st_female'];
        $total_fhe_vol_cont_1st_female = $row['total_fhe_vol_cont_1st_female'];
        $total_fhe_opt_out_2nd_female = $row['total_fhe_opt_out_2nd_female'];
        $total_fhe_vol_cont_2nd_female = $row['total_fhe_vol_cont_2nd_female'];
        $total_fhe_opt_out_3rd_female = $row['total_fhe_opt_out_3rd_female'];
        $total_fhe_vol_cont_3rd_female = $row['total_fhe_vol_cont_3rd_female'];
        $total_fhe_opt_out_summer_midyear_female = $row['total_fhe_opt_out_summer_midyear_female'];
        $total_fhe_vol_cont_summer_midyear_female = $row['total_fhe_vol_cont_summer_midyear_female'];
        $total_tes_applicant_female = $row['total_tes_applicant_female'];
    }
} else {
        $total_fhe_opt_out_1st_male = "";
        $total_fhe_vol_cont_1st_male = "";
        $total_fhe_opt_out_2nd_male = "";
        $total_fhe_vol_cont_2nd_male = "";
        $total_fhe_opt_out_3rd_male = "";
        $total_fhe_vol_cont_3rd_male = "";
        $total_fhe_opt_out_summer_midyear_male = "";
        $total_fhe_vol_cont_summer_midyear_male = "";
        $total_tes_applicant_male = "";

        $total_fhe_opt_out_1st_female = "";
        $total_fhe_vol_cont_1st_female = "";
        $total_fhe_opt_out_2nd_female = "";
        $total_fhe_vol_cont_2nd_female = "";
        $total_fhe_opt_out_3rd_female = "";
        $total_fhe_vol_cont_3rd_female = "";
        $total_fhe_opt_out_summer_midyear_female = "";
        $total_fhe_vol_cont_summer_midyear_female = "";
        $total_tes_applicant_female = "";
}

$sql2 = "SELECT * FROM tbl_hei_records WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result2 = mysqli_query($conn, $sql2);
$resultCheck2 = mysqli_num_rows($result2);

if ($resultCheck2 > 0) {
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $ac_calendar=$row2['ac_calendar'];
        $fhe=$row2['fhe'];
        $tes=$row2['tes'];
        $tdp=$row2['tdp'];
        $form_status=$row2['form_status'];
    }
}else{
    $ac_calendar="";
    $fhe="";
    $tes="";
    $tdp="";
    $form_status="";
}

$sql3 = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='FHE'";
$result3 = mysqli_query($conn, $sql3);
$resultCheck3 = mysqli_num_rows($result3);

if ($resultCheck3 > 0) {
    while ($row3 = mysqli_fetch_assoc($result3)) {
        $program = $row3['program'];
    }
}else{
    $program = '';
}

$sql4 = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TES'";
$result4 = mysqli_query($conn, $sql4);
$resultCheck4 = mysqli_num_rows($result4);

if ($resultCheck4 > 0) {
    while ($row4 = mysqli_fetch_assoc($result4)) {
        $program2 = $row4['program'];
    }
}else{
    $program2 = '';
}

$sql5 = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TDP'";
$result5 = mysqli_query($conn, $sql5);
$resultCheck5 = mysqli_num_rows($result5);

if ($resultCheck5 > 0) {
    while ($row5 = mysqli_fetch_assoc($result5)) {
        $program3 = $row5['program'];
    }
}else{
    $program3 = '';
}