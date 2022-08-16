<?php

$sql = "SELECT * FROM tbl_hei_personnel WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $hei_email = $row['hei_email_add'];
        $hei_alt_email = $row['hei_alt_email_add'];
        $hei_contact_no = $row['hei_contact_no'];
        $hei_alt_contact_no = $row['hei_alt_contact_no'];

        $hei_head_name = $row['hei_head_name'];
        $hei_head_designation = $row['hei_head_designation'];
        $hei_head_email_add = $row['hei_head_email_add'];
        $hei_head_alt_email_add = $row['hei_head_alt_email_add'];
        $hei_head_contact_no = $row['hei_head_contact_no'];
        $hei_head_alt_contact_no = $row['hei_head_alt_contact_no'];

        $fhe_focal_name = $row['fhe_focal_name'];
        $fhe_focal_designation = $row['fhe_focal_designation'];
        $fhe_focal_email_add = $row['fhe_focal_email_add'];
        $fhe_focal_alt_email_add = $row['fhe_focal_alt_email_add'];
        $fhe_focal_contact_no = $row['fhe_focal_contact_no'];
        $fhe_focal_alt_contact_no = $row['fhe_focal_alt_contact_no'];

        $tes_focal_name = $row['tes_focal_name'];
        $tes_focal_designation = $row['tes_focal_designation'];
        $tes_focal_email_add = $row['tes_focal_email_add'];
        $tes_focal_alt_email_add = $row['tes_focal_alt_email_add'];
        $tes_focal_contact_no = $row['tes_focal_contact_no'];
        $tes_focal_alt_contact_no = $row['tes_focal_alt_contact_no'];

        $tdp_focal_name = $row['tdp_focal_name'];
        $tdp_focal_designation = $row['tdp_focal_designation'];
        $tdp_focal_email_add = $row['tdp_focal_email_add'];
        $tdp_focal_alt_email_add = $row['tdp_focal_alt_email_add'];
        $tdp_focal_contact_no = $row['tdp_focal_contact_no'];
        $tdp_focal_alt_contact_no = $row['tdp_focal_alt_contact_no'];
    }
} else {
    $hei_email = "";
    $hei_alt_email = "";
    $hei_contact_no = "";
    $hei_alt_contact_no = "";

    $hei_head_name = "";
    $hei_head_designation = "";
    $hei_head_email_add = "";
    $hei_head_alt_email_add = "";
    $hei_head_contact_no = "";
    $hei_head_alt_contact_no = "";

    $fhe_focal_name = "";
    $fhe_focal_designation = "";
    $fhe_focal_email_add = "";
    $fhe_focal_alt_email_add = "";
    $fhe_focal_contact_no = "";
    $fhe_focal_alt_contact_no = "";

    $tes_focal_name = "";
    $tes_focal_designation = "";
    $tes_focal_email_add = "";
    $tes_focal_alt_email_add = "";
    $tes_focal_contact_no = "";
    $tes_focal_alt_contact_no = "";

    $tdp_focal_name = "";
    $tdp_focal_designation = "";
    $tdp_focal_email_add = "";
    $tdp_focal_alt_email_add = "";
    $tdp_focal_contact_no = "";
    $tdp_focal_alt_contact_no = "";
}

$sql2 = "SELECT * FROM tbl_hei_demographic WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result2 = mysqli_query($conn, $sql2);
$resultCheck2 = mysqli_num_rows($result2);

if ($resultCheck2 > 0) {
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $enrollment_period_1st = $row2['enrollment_period_1st'];
        $opening_of_classes_1st = $row2['opening_of_classes_1st'];
        $total_undergraduate_1st_male = $row2['total_undergraduate_1st_male'];
        $total_foreign_1st_male = $row2['total_foreign_1st_male'];
        $total_second_courser_1st_male = $row2['total_second_courser_1st_male'];
        $total_undergraduate_1st_female = $row2['total_undergraduate_1st_female'];
        $total_foreign_1st_female = $row2['total_foreign_1st_female'];
        $total_second_courser_1st_female = $row2['total_second_courser_1st_female'];
        

        $enrollment_period_2nd = $row2['enrollment_period_2nd'];
        $opening_of_classes_2nd = $row2['opening_of_classes_2nd'];
        $total_undergraduate_2nd_male = $row2['total_undergraduate_2nd_male'];
        $total_foreign_2nd_male = $row2['total_foreign_2nd_male'];
        $total_second_courser_2nd_male = $row2['total_second_courser_2nd_male'];
        $total_undergraduate_2nd_female = $row2['total_undergraduate_2nd_female'];
        $total_foreign_2nd_female = $row2['total_foreign_2nd_female'];
        $total_second_courser_2nd_female = $row2['total_second_courser_2nd_female'];

        $enrollment_period_3rd = $row2['enrollment_period_3rd'];
        $opening_of_classes_3rd = $row2['opening_of_classes_3rd'];
        $total_undergraduate_3rd_male = $row2['total_undergraduate_3rd_male'];
        $total_foreign_3rd_male = $row2['total_foreign_3rd_male'];
        $total_second_courser_3rd_male = $row2['total_second_courser_3rd_male'];
        $total_undergraduate_3rd_female = $row2['total_undergraduate_3rd_female'];
        $total_foreign_3rd_female = $row2['total_foreign_3rd_female'];
        $total_second_courser_3rd_female = $row2['total_second_courser_3rd_female'];

        $enrollment_period_summer_midyear = $row2['enrollment_period_summer_midyear'];
        $opening_of_classes_summer_midyear = $row2['opening_of_classes_summer_midyear'];
        $total_undergraduate_summer_midyear_male = $row2['total_undergraduate_summer_midyear_male'];
        $total_foreign_summer_midyear_male = $row2['total_foreign_summer_midyear_male'];
        $total_second_courser_summer_midyear_male = $row2['total_second_courser_summer_midyear_male'];
        $total_undergraduate_summer_midyear_female = $row2['total_undergraduate_summer_midyear_female'];
        $total_foreign_summer_midyear_female = $row2['total_foreign_summer_midyear_female'];
        $total_second_courser_summer_midyear_female = $row2['total_second_courser_summer_midyear_female'];
    }
} else {
    $enrollment_period_1st = "";
    $opening_of_classes_1st = "";
    $total_undergraduate_1st_male = "";
    $total_foreign_1st_male = "";
    $total_second_courser_1st_male = "";
    $total_undergraduate_1st_female = "";
    $total_foreign_1st_female = "";
    $total_second_courser_1st_female = "";

    $enrollment_period_2nd = "";
    $opening_of_classes_2nd = "";
    $total_undergraduate_2nd_male = "";
    $total_foreign_2nd_male = "";
    $total_second_courser_2nd_male = "";
    $total_undergraduate_2nd_female = "";
    $total_foreign_2nd_female = "";
    $total_second_courser_2nd_female = "";

    $enrollment_period_3rd = "";
    $opening_of_classes_3rd = "";
    $total_undergraduate_3rd_male = "";
    $total_foreign_3rd_male = "";
    $total_second_courser_3rd_male = "";
    $total_undergraduate_3rd_female = "";
    $total_foreign_3rd_female = "";
    $total_second_courser_3rd_female = "";

    $enrollment_period_summer_midyear = "";
    $opening_of_classes_summer_midyear = "";
    $total_undergraduate_summer_midyear_male = "";
    $total_foreign_summer_midyear_male = "";
    $total_second_courser_summer_midyear_male = "";
    $total_undergraduate_summer_midyear_female = "";
    $total_foreign_summer_midyear_female = "";
    $total_second_courser_summer_midyear_female = "";
}

$sql3 = "SELECT * FROM tbl_hei_records WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result3 = mysqli_query($conn, $sql3);
$resultCheck3 = mysqli_num_rows($result3);

if ($resultCheck3 > 0) {
    while ($row3 = mysqli_fetch_assoc($result3)) {
        $ac_calendar=$row3['ac_calendar'];
        $fhe=$row3['fhe'];
        $tes=$row3['tes'];
        $tdp=$row3['tdp'];
        $form_status=$row3['form_status'];
    }
}else{
    $ac_calendar="";
    $fhe="";
    $tes="";
    $tdp="";
    $form_status="";
}

$sql4="SELECT count(*) AS total_programs_offered FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result4 = mysqli_query($conn, $sql4);
$resultCheck4 = mysqli_num_rows($result4);
if ($resultCheck4 > 0) {
    while ($row4 = mysqli_fetch_assoc($result4)) {
        $total_programs_offered=$row4['total_programs_offered'];
    }
}else{
    $total_programs_offered='';
}

$sql5="SELECT count(*) AS total_with_gr_no_and_copc_no FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (gr_no != '' OR copc_no != '')";
$result5 = mysqli_query($conn, $sql5);
$resultCheck5 = mysqli_num_rows($result5);
if ($resultCheck5 > 0) {
    while ($row5 = mysqli_fetch_assoc($result5)) {
        $total_with_gr_no_and_copc_no=$row5['total_with_gr_no_and_copc_no'];
    }
}else{
    $total_with_gr_no_and_copc_no='';
}