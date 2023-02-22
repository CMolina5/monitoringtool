<?php
session_start();
include_once '../db_connection.php';

if (isset($_POST['save_hei_profile'])) {
    $ac_year = mysqli_real_escape_string($conn, $_SESSION['ac_year']);
    $hei_psg_region = mysqli_real_escape_string($conn, $_SESSION['hei_psg_region']);
    $hei_uii = mysqli_real_escape_string($conn, $_SESSION['hei_uii']);
    $hei_name = mysqli_real_escape_string($conn, $_SESSION['hei_name']);

    /*
    $hei_it= mysqli_real_escape_string($conn, $_SESSION['hei_it']);
    $hei_ct= mysqli_real_escape_string($conn, $_SESSION['hei_ct']);
    $hei_pnsl= mysqli_real_escape_string($conn, $_SESSION['hei_pnsl']);
    $hei_region_nir= mysqli_real_escape_string($conn, $_SESSION['hei_region_nir']);
    $hei_prov_name= mysqli_real_escape_string($conn, $_SESSION['hei_prov_name']);
    $hei_city_name= mysqli_real_escape_string($conn, $_SESSION['hei_city_name']);
    $hei_street= mysqli_real_escape_string($conn, $_SESSION['hei_street']);
    $hei_address= mysqli_real_escape_string($conn, $_SESSION['hei_address']);
    */

    $hei_email_add = mysqli_real_escape_string($conn, $_POST['hei_email_add']);
    $hei_alt_email_add = mysqli_real_escape_string($conn, $_POST['hei_alt_email_add']);
    $hei_contact_no = mysqli_real_escape_string($conn, $_POST['hei_contact_no']);
    $hei_alt_contact_no = mysqli_real_escape_string($conn, $_POST['hei_alt_contact_no']);

    $hei_head_name = mysqli_real_escape_string($conn, $_POST['hei_head_name']);
    $hei_head_designation = mysqli_real_escape_string($conn, $_POST['hei_head_designation']);
    $hei_head_email_add = mysqli_real_escape_string($conn, $_POST['hei_head_email']);
    $hei_head_alt_email_add = mysqli_real_escape_string($conn, $_POST['hei_head_alt_email']);
    $hei_head_contact_no = mysqli_real_escape_string($conn, $_POST['hei_head_contact_no']);
    $hei_head_alt_contact_no = mysqli_real_escape_string($conn, $_POST['hei_head_alt_contact_no']);

    $fhe_focal_name = mysqli_real_escape_string($conn, $_POST['fhe_focal_name']);
    $fhe_focal_designation = mysqli_real_escape_string($conn, $_POST['fhe_focal_designation']);
    $fhe_focal_email_add = mysqli_real_escape_string($conn, $_POST['fhe_focal_email']);
    $fhe_focal_alt_email_add = mysqli_real_escape_string($conn, $_POST['fhe_focal_alt_email']);
    $fhe_focal_contact_no = mysqli_real_escape_string($conn, $_POST['fhe_focal_contact_no']);
    $fhe_focal_alt_contact_no = mysqli_real_escape_string($conn, $_POST['fhe_focal_alt_contact_no']);

    $tes_focal_name = mysqli_real_escape_string($conn, $_POST['tes_focal_name']);
    $tes_focal_designation = mysqli_real_escape_string($conn, $_POST['tes_focal_designation']);
    $tes_focal_email_add = mysqli_real_escape_string($conn, $_POST['tes_focal_email']);
    $tes_focal_alt_email_add = mysqli_real_escape_string($conn, $_POST['tes_focal_alt_email']);
    $tes_focal_contact_no = mysqli_real_escape_string($conn, $_POST['tes_focal_contact_no']);
    $tes_focal_alt_contact_no = mysqli_real_escape_string($conn, $_POST['tes_focal_alt_contact_no']);

    $tdp_focal_name = mysqli_real_escape_string($conn, $_POST['tdp_focal_name']);
    $tdp_focal_designation = mysqli_real_escape_string($conn, $_POST['tdp_focal_designation']);
    $tdp_focal_email_add = mysqli_real_escape_string($conn, $_POST['tdp_focal_email']);
    $tdp_focal_alt_email_add = mysqli_real_escape_string($conn, $_POST['tdp_focal_alt_email']);
    $tdp_focal_contact_no = mysqli_real_escape_string($conn, $_POST['tdp_focal_contact_no']);
    $tdp_focal_alt_contact_no = mysqli_real_escape_string($conn, $_POST['tdp_focal_alt_contact_no']);

    $enrollment_1st = mysqli_real_escape_string($conn, $_POST['enrollment_1st']);
    $enrollment_2nd = mysqli_real_escape_string($conn, $_POST['enrollment_2nd']);
    $enrollment_3rd = mysqli_real_escape_string($conn, $_POST['enrollment_3rd']);
    $enrollment_summer_midyear = mysqli_real_escape_string($conn, $_POST['enrollment_summer_midyear']);

    $opening_1st = mysqli_real_escape_string($conn, $_POST['opening_1st']);
    $opening_2nd = mysqli_real_escape_string($conn, $_POST['opening_2nd']);
    $opening_3rd = mysqli_real_escape_string($conn, $_POST['opening_3rd']);
    $opening_summer_midyear = mysqli_real_escape_string($conn, $_POST['opening_summer_midyear']);

    $total_undergrad_1st_male = mysqli_real_escape_string($conn, $_POST['total_undergrad_1st_male']);
    $total_undergrad_2nd_male = mysqli_real_escape_string($conn, $_POST['total_undergrad_2nd_male']);
    $total_undergrad_3rd_male = mysqli_real_escape_string($conn, $_POST['total_undergrad_3rd_male']);
    $total_undergrad_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_undergrad_summer_midyear_male']);
    $total_undergrad_1st_female = mysqli_real_escape_string($conn, $_POST['total_undergrad_1st_female']);
    $total_undergrad_2nd_female = mysqli_real_escape_string($conn, $_POST['total_undergrad_2nd_female']);
    $total_undergrad_3rd_female = mysqli_real_escape_string($conn, $_POST['total_undergrad_3rd_female']);
    $total_undergrad_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_undergrad_summer_midyear_female']);

    $total_foreign_1st_male = mysqli_real_escape_string($conn, $_POST['total_foreign_1st_male']);
    $total_foreign_2nd_male = mysqli_real_escape_string($conn, $_POST['total_foreign_2nd_male']);
    $total_foreign_3rd_male = mysqli_real_escape_string($conn, $_POST['total_foreign_3rd_male']);
    $total_foreign_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_foreign_summer_midyear_male']);
    $total_foreign_1st_female = mysqli_real_escape_string($conn, $_POST['total_foreign_1st_female']);
    $total_foreign_2nd_female = mysqli_real_escape_string($conn, $_POST['total_foreign_2nd_female']);
    $total_foreign_3rd_female = mysqli_real_escape_string($conn, $_POST['total_foreign_3rd_female']);
    $total_foreign_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_foreign_summer_midyear_female']);

    $total_2nd_courser_1st_male = mysqli_real_escape_string($conn, $_POST['total_2nd_courser_1st_male']);
    $total_2nd_courser_2nd_male = mysqli_real_escape_string($conn, $_POST['total_2nd_courser_2nd_male']);
    $total_2nd_courser_3rd_male = mysqli_real_escape_string($conn, $_POST['total_2nd_courser_3rd_male']);
    $total_2nd_courser_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_2nd_courser_summer_midyear_male']);
    $total_2nd_courser_1st_female = mysqli_real_escape_string($conn, $_POST['total_2nd_courser_1st_female']);
    $total_2nd_courser_2nd_female = mysqli_real_escape_string($conn, $_POST['total_2nd_courser_2nd_female']);
    $total_2nd_courser_3rd_female = mysqli_real_escape_string($conn, $_POST['total_2nd_courser_3rd_female']);
    $total_2nd_courser_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_2nd_courser_summer_midyear_female']);

    if(empty($fhe_focal_name)){
        $fhe_focal_name="";
    }
    if(empty($fhe_focal_designation)){
        $fhe_focal_designation="";
    }
    if(empty($fhe_focal_email_add)){
        $fhe_focal_email_add="";
    }
    if(empty($fhe_focal_alt_email_add)){
        $fhe_focal_alt_email_add="";
    }
    if(empty($fhe_focal_contact_no)){
        $fhe_focal_contact_no="";
    }
    if(empty($fhe_focal_alt_contact_no)){
        $fhe_focal_alt_contact_no="";
    }

    if(empty($tes_focal_name)){
        $tes_focal_name="";
    }
    if(empty($tes_focal_designation)){
        $tes_focal_designation="";
    }
    if(empty($tes_focal_email_add)){
        $tes_focal_email_add="";
    }
    if(empty($tes_focal_alt_email_add)){
        $tes_focal_alt_email_add="";
    }
    if(empty($tes_focal_contact_no)){
        $tes_focal_contact_no="";
    }
    if(empty($tes_focal_alt_contact_no)){
        $tes_focal_alt_contact_no="";
    }

    if(empty($tdp_focal_name)){
        $tdp_focal_name="";
    }
    if(empty($tdp_focal_designation)){
        $tdp_focal_designation="";
    }
    if(empty($tdp_focal_email_add)){
        $tdp_focal_email_add="";
    }
    if(empty($tdp_focal_alt_email_add)){
        $tdp_focal_alt_email_add="";
    }
    if(empty($tdp_focal_contact_no)){
        $tdp_focal_contact_no="";
    }
    if(empty($tdp_focal_alt_contact_no)){
        $tdp_focal_alt_contact_no="";
    }
    
    if (empty($total_undergrad_1st_male)) {
        $total_undergrad_1st_male = 0;
    }
    if (empty($total_undergrad_2nd_male)) {
        $total_undergrad_2nd_male = 0;
    }
    if (empty($total_undergrad_3rd_male)) {
        $total_undergrad_3rd_male = 0;
    }
    if (empty($total_undergrad_summer_midyear_male)) {
        $total_undergrad_summer_midyear_male = 0;
    }

    if (empty($total_undergrad_1st_female)) {
        $total_undergrad_1st_female = 0;
    }
    if (empty($total_undergrad_2nd_female)) {
        $total_undergrad_2nd_female = 0;
    }
    if (empty($total_undergrad_3rd_female)) {
        $total_undergrad_3rd_female = 0;
    }
    if (empty($total_undergrad_summer_midyear_female)) {
        $total_undergrad_summer_midyear_female = 0;
    }

    if (empty($total_foreign_1st_male)) {
        $total_foreign_1st_male = 0;
    }
    if (empty($total_foreign_2nd_male)) {
        $total_foreign_2nd_male = 0;
    }
    if (empty($total_foreign_3rd_male)) {
        $total_foreign_3rd_male = 0;
    }
    if (empty($total_foreign_summer_midyear_male)) {
        $total_foreign_summer_midyear_male = 0;
    }

    if (empty($total_foreign_1st_female)) {
        $total_foreign_1st_female = 0;
    }
    if (empty($total_foreign_2nd_female)) {
        $total_foreign_2nd_female = 0;
    }
    if (empty($total_foreign_3rd_female)) {
        $total_foreign_3rd_female = 0;
    }
    if (empty($total_foreign_summer_midyear_female)) {
        $total_foreign_summer_midyear_female = 0;
    }

    if (empty($total_2nd_courser_1st_male)) {
        $total_2nd_courser_1st_male = 0;
    }
    if (empty($total_2nd_courser_2nd_male)) {
        $total_2nd_courser_2nd_male = 0;
    }
    if (empty($total_2nd_courser_3rd_male)) {
        $total_2nd_courser_3rd_male = 0;
    }
    if (empty($total_2nd_courser_summer_midyear_male)) {
        $total_2nd_courser_summer_midyear_male = 0;
    }

    if (empty($total_2nd_courser_1st_female)) {
        $total_2nd_courser_1st_female = 0;
    }
    if (empty($total_2nd_courser_2nd_female)) {
        $total_2nd_courser_2nd_female = 0;
    }
    if (empty($total_2nd_courser_3rd_female)) {
        $total_2nd_courser_3rd_female = 0;
    }
    if (empty($total_2nd_courser_summer_midyear_female)) {
        $total_2nd_courser_summer_midyear_female = 0;
    }

    $sql = "SELECT * FROM tbl_degree_programs_temp WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $sql = "SELECT * FROM tbl_hei_personnel WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
    
        if ($resultCheck > 0) {
            $sql1 = "UPDATE tbl_hei_personnel
            SET hei_email_add='$hei_email_add', hei_alt_email_add='$hei_alt_email_add', hei_contact_no='$hei_contact_no', hei_alt_contact_no='$hei_alt_contact_no', hei_head_name='$hei_head_name', hei_head_designation='$hei_head_designation', hei_head_email_add='$hei_head_email_add', hei_head_alt_email_add='$hei_head_alt_email_add', hei_head_contact_no='$hei_head_contact_no', hei_head_alt_contact_no='$hei_head_alt_contact_no', fhe_focal_name='$fhe_focal_name', fhe_focal_designation='$fhe_focal_designation', fhe_focal_email_add='$fhe_focal_email_add', fhe_focal_alt_email_add='$fhe_focal_alt_email_add', fhe_focal_contact_no='$fhe_focal_contact_no', fhe_focal_alt_contact_no='$fhe_focal_alt_contact_no', tes_focal_name='$tes_focal_name', tes_focal_designation='$tes_focal_designation', tes_focal_email_add='$tes_focal_email_add', tes_focal_alt_email_add='$tes_focal_alt_email_add', tes_focal_contact_no='$tes_focal_contact_no', tes_focal_alt_contact_no='$tes_focal_alt_contact_no', tdp_focal_name='$tdp_focal_name', tdp_focal_designation='$tdp_focal_designation', tdp_focal_email_add='$tdp_focal_email_add', tdp_focal_alt_email_add='$tdp_focal_alt_email_add', tdp_focal_contact_no='$tdp_focal_contact_no', tdp_focal_alt_contact_no='$tdp_focal_alt_contact_no'
            WHERE hei_uii='$hei_uii' AND ac_year='$ac_year'";
    
    
            $sql2 = "UPDATE tbl_hei_demographic
            SET enrollment_period_1st='$enrollment_1st', opening_of_classes_1st='$opening_1st', total_undergraduate_1st_male='$total_undergrad_1st_male', total_foreign_1st_male='$total_foreign_1st_male', total_second_courser_1st_male='$total_2nd_courser_1st_male', total_undergraduate_1st_female='$total_undergrad_1st_female', total_foreign_1st_female='$total_foreign_1st_female', total_second_courser_1st_female='$total_2nd_courser_1st_female', enrollment_period_2nd='$enrollment_2nd', opening_of_classes_2nd='$opening_2nd', total_undergraduate_2nd_male='$total_undergrad_2nd_male', total_foreign_2nd_male='$total_foreign_2nd_male', total_second_courser_2nd_male='$total_2nd_courser_2nd_male', total_undergraduate_2nd_female='$total_undergrad_2nd_female', total_foreign_2nd_female='$total_foreign_2nd_female', total_second_courser_2nd_female='$total_2nd_courser_2nd_female', enrollment_period_3rd='$enrollment_3rd', opening_of_classes_3rd='$opening_3rd', total_undergraduate_3rd_male='$total_undergrad_3rd_male', total_foreign_3rd_male='$total_foreign_3rd_male', total_second_courser_3rd_male='$total_2nd_courser_3rd_male', total_undergraduate_3rd_female='$total_undergrad_3rd_female', total_foreign_3rd_female='$total_foreign_3rd_female', total_second_courser_3rd_female='$total_2nd_courser_3rd_female', enrollment_period_summer_midyear='$enrollment_summer_midyear', opening_of_classes_summer_midyear='$opening_summer_midyear', total_undergraduate_summer_midyear_male='$total_undergrad_summer_midyear_male', total_foreign_summer_midyear_male='$total_foreign_summer_midyear_male', total_second_courser_summer_midyear_male='$total_2nd_courser_summer_midyear_male', total_undergraduate_summer_midyear_female='$total_undergrad_summer_midyear_female', total_foreign_summer_midyear_female='$total_foreign_summer_midyear_female', total_second_courser_summer_midyear_female='$total_2nd_courser_summer_midyear_female'
            WHERE hei_uii='$hei_uii' AND ac_year='$ac_year'";
    
            $sql = $sql1 . ";" . $sql2;
    
            $result = mysqli_multi_query($conn, $sql);
    
            if (!$result) {
                echo mysqli_error($conn);
                die();
            } else {
                header("Location:../../stufap-all.php");
                exit();
            }
        } else {
            $sql1 = "INSERT INTO tbl_hei_personnel (ac_year, hei_psg_region, hei_uii, hei_name, hei_email_add, hei_alt_email_add, hei_contact_no, hei_alt_contact_no, hei_head_name, hei_head_designation, hei_head_email_add, hei_head_alt_email_add, hei_head_contact_no, hei_head_alt_contact_no, fhe_focal_name, fhe_focal_designation, fhe_focal_email_add, fhe_focal_alt_email_add, fhe_focal_contact_no, fhe_focal_alt_contact_no, tes_focal_name, tes_focal_designation, tes_focal_email_add, tes_focal_alt_email_add, tes_focal_contact_no, tes_focal_alt_contact_no, tdp_focal_name, tdp_focal_designation, tdp_focal_email_add, tdp_focal_alt_email_add, tdp_focal_contact_no, tdp_focal_alt_contact_no)
                    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii','$hei_name', '$hei_email_add', '$hei_alt_email_add', '$hei_contact_no', '$hei_alt_contact_no', '$hei_head_name', '$hei_head_designation', '$hei_head_email_add', '$hei_head_alt_email_add', '$hei_head_contact_no', '$hei_head_alt_contact_no', '$fhe_focal_name', '$fhe_focal_designation', '$fhe_focal_email_add', '$fhe_focal_alt_email_add', '$fhe_focal_contact_no', '$fhe_focal_alt_contact_no', '$tes_focal_name', '$tes_focal_designation', '$tes_focal_email_add', '$tes_focal_alt_email_add', '$tes_focal_contact_no', '$tes_focal_alt_contact_no', '$tdp_focal_name', '$tdp_focal_designation', '$tdp_focal_email_add', '$tdp_focal_alt_email_add', '$tdp_focal_contact_no', '$tdp_focal_alt_contact_no')";
    
            $sql2 = "INSERT INTO tbl_hei_demographic (ac_year, hei_psg_region, hei_uii, hei_name, enrollment_period_1st, opening_of_classes_1st, total_undergraduate_1st_male, total_foreign_1st_male, total_second_courser_1st_male, total_undergraduate_1st_female, total_foreign_1st_female, total_second_courser_1st_female, enrollment_period_2nd, opening_of_classes_2nd, total_undergraduate_2nd_male, total_foreign_2nd_male, total_second_courser_2nd_male, total_undergraduate_2nd_female, total_foreign_2nd_female, total_second_courser_2nd_female, enrollment_period_3rd, opening_of_classes_3rd, total_undergraduate_3rd_male, total_foreign_3rd_male, total_second_courser_3rd_male, total_undergraduate_3rd_female, total_foreign_3rd_female, total_second_courser_3rd_female, enrollment_period_summer_midyear, opening_of_classes_summer_midyear, total_undergraduate_summer_midyear_male, total_foreign_summer_midyear_male, total_second_courser_summer_midyear_male, total_undergraduate_summer_midyear_female, total_foreign_summer_midyear_female, total_second_courser_summer_midyear_female)
                    VALUES ('$ac_year', '$hei_psg_region', '$hei_uii','$hei_name', '$enrollment_1st', '$opening_1st', $total_undergrad_1st_male, $total_foreign_1st_male, $total_2nd_courser_1st_male, $total_undergrad_1st_female, $total_foreign_1st_female, $total_2nd_courser_1st_female, '$enrollment_2nd', '$opening_2nd', $total_undergrad_2nd_male, $total_foreign_2nd_male, $total_2nd_courser_2nd_male, $total_undergrad_2nd_female, $total_foreign_2nd_female, $total_2nd_courser_2nd_female, '$enrollment_3rd', '$opening_3rd', $total_undergrad_3rd_male, $total_foreign_3rd_male, $total_2nd_courser_3rd_male, $total_undergrad_3rd_female, $total_foreign_3rd_female, $total_2nd_courser_3rd_female,  '$enrollment_summer_midyear', '$opening_summer_midyear', $total_undergrad_summer_midyear_male, $total_foreign_summer_midyear_male, $total_2nd_courser_summer_midyear_male, $total_undergrad_summer_midyear_female, $total_foreign_summer_midyear_female, $total_2nd_courser_summer_midyear_female)";
    
            $sql3 = "INSERT INTO tbl_degree_programs (ac_year, hei_psg_region, hei_uii, hei_name, program_code, program_name, gr_no, copc_no, in_the_portal)
                    SELECT ac_year, hei_psg_region, hei_uii, hei_name, program_code, program_name, gr_no, copc_no, in_the_portal
                    FROM tbl_degree_programs_temp
                    WHERE hei_uii='$hei_uii'";
    
            $sql4 = "DELETE FROM tbl_degree_programs_temp WHERE hei_uii='$hei_uii' AND ac_year='$ac_year'";
    
            $sql = $sql1 . ";" . $sql2 . ";" . $sql3 . ";" . $sql4;
    
            $result = mysqli_multi_query($conn, $sql);
            if (!$result) {
                echo mysqli_error($conn);
                die();
            } else {
                header("Location:../../stufap-all.php");
                exit();
            }
        }
    }else{
        $sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
    
        if ($resultCheck > 0) {
            $sql = "SELECT * FROM tbl_hei_personnel WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
        
            if ($resultCheck > 0) {
                $sql1 = "UPDATE tbl_hei_personnel
                SET hei_email_add='$hei_email_add', hei_alt_email_add='$hei_alt_email_add', hei_contact_no='$hei_contact_no', hei_alt_contact_no='$hei_alt_contact_no', hei_head_name='$hei_head_name', hei_head_designation='$hei_head_designation', hei_head_email_add='$hei_head_email_add', hei_head_alt_email_add='$hei_head_alt_email_add', hei_head_contact_no='$hei_head_contact_no', hei_head_alt_contact_no='$hei_head_alt_contact_no', fhe_focal_name='$fhe_focal_name', fhe_focal_designation='$fhe_focal_designation', fhe_focal_email_add='$fhe_focal_email_add', fhe_focal_alt_email_add='$fhe_focal_alt_email_add', fhe_focal_contact_no='$fhe_focal_contact_no', fhe_focal_alt_contact_no='$fhe_focal_alt_contact_no', tes_focal_name='$tes_focal_name', tes_focal_designation='$tes_focal_designation', tes_focal_email_add='$tes_focal_email_add', tes_focal_alt_email_add='$tes_focal_alt_email_add', tes_focal_contact_no='$tes_focal_contact_no', tes_focal_alt_contact_no='$tes_focal_alt_contact_no', tdp_focal_name='$tdp_focal_name', tdp_focal_designation='$tdp_focal_designation', tdp_focal_email_add='$tdp_focal_email_add', tdp_focal_alt_email_add='$tdp_focal_alt_email_add', tdp_focal_contact_no='$tdp_focal_contact_no', tdp_focal_alt_contact_no='$tdp_focal_alt_contact_no'
                WHERE hei_uii='$hei_uii' AND ac_year='$ac_year'";
        
        
                $sql2 = "UPDATE tbl_hei_demographic
                SET enrollment_period_1st='$enrollment_1st', opening_of_classes_1st='$opening_1st', total_undergraduate_1st_male='$total_undergrad_1st_male', total_foreign_1st_male='$total_foreign_1st_male', total_second_courser_1st_male='$total_2nd_courser_1st_male', total_undergraduate_1st_female='$total_undergrad_1st_female', total_foreign_1st_female='$total_foreign_1st_female', total_second_courser_1st_female='$total_2nd_courser_1st_female', enrollment_period_2nd='$enrollment_2nd', opening_of_classes_2nd='$opening_2nd', total_undergraduate_2nd_male='$total_undergrad_2nd_male', total_foreign_2nd_male='$total_foreign_2nd_male', total_second_courser_2nd_male='$total_2nd_courser_2nd_male', total_undergraduate_2nd_female='$total_undergrad_2nd_female', total_foreign_2nd_female='$total_foreign_2nd_female', total_second_courser_2nd_female='$total_2nd_courser_2nd_female', enrollment_period_3rd='$enrollment_3rd', opening_of_classes_3rd='$opening_3rd', total_undergraduate_3rd_male='$total_undergrad_3rd_male', total_foreign_3rd_male='$total_foreign_3rd_male', total_second_courser_3rd_male='$total_2nd_courser_3rd_male', total_undergraduate_3rd_female='$total_undergrad_3rd_female', total_foreign_3rd_female='$total_foreign_3rd_female', total_second_courser_3rd_female='$total_2nd_courser_3rd_female', enrollment_period_summer_midyear='$enrollment_summer_midyear', opening_of_classes_summer_midyear='$opening_summer_midyear', total_undergraduate_summer_midyear_male='$total_undergrad_summer_midyear_male', total_foreign_summer_midyear_male='$total_foreign_summer_midyear_male', total_second_courser_summer_midyear_male='$total_2nd_courser_summer_midyear_male', total_undergraduate_summer_midyear_female='$total_undergrad_summer_midyear_female', total_foreign_summer_midyear_female='$total_foreign_summer_midyear_female', total_second_courser_summer_midyear_female='$total_2nd_courser_summer_midyear_female'
                WHERE hei_uii='$hei_uii' AND ac_year='$ac_year'";
        
                $sql = $sql1 . ";" . $sql2;
        
                $result = mysqli_multi_query($conn, $sql);
        
                if (!$result) {
                    echo mysqli_error($conn);
                    die();
                } else {
                    header("Location:../../stufap-all.php");
                    exit();
                }
            } else {
                $sql1 = "INSERT INTO tbl_hei_personnel (ac_year, hei_psg_region, hei_uii, hei_name, hei_email_add, hei_alt_email_add, hei_contact_no, hei_alt_contact_no, hei_head_name, hei_head_designation, hei_head_email_add, hei_head_alt_email_add, hei_head_contact_no, hei_head_alt_contact_no, fhe_focal_name, fhe_focal_designation, fhe_focal_email_add, fhe_focal_alt_email_add, fhe_focal_contact_no, fhe_focal_alt_contact_no, tes_focal_name, tes_focal_designation, tes_focal_email_add, tes_focal_alt_email_add, tes_focal_contact_no, tes_focal_alt_contact_no, tdp_focal_name, tdp_focal_designation, tdp_focal_email_add, tdp_focal_alt_email_add, tdp_focal_contact_no, tdp_focal_alt_contact_no)
                        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii','$hei_name', '$hei_email_add', '$hei_alt_email_add', '$hei_contact_no', '$hei_alt_contact_no', '$hei_head_name', '$hei_head_designation', '$hei_head_email_add', '$hei_head_alt_email_add', '$hei_head_contact_no', '$hei_head_alt_contact_no', '$fhe_focal_name', '$fhe_focal_designation', '$fhe_focal_email_add', '$fhe_focal_alt_email_add', '$fhe_focal_contact_no', '$fhe_focal_alt_contact_no', '$tes_focal_name', '$tes_focal_designation', '$tes_focal_email_add', '$tes_focal_alt_email_add', '$tes_focal_contact_no', '$tes_focal_alt_contact_no', '$tdp_focal_name', '$tdp_focal_designation', '$tdp_focal_email_add', '$tdp_focal_alt_email_add', '$tdp_focal_contact_no', '$tdp_focal_alt_contact_no')";
        
                $sql2 = "INSERT INTO tbl_hei_demographic (ac_year, hei_psg_region, hei_uii, hei_name, enrollment_period_1st, opening_of_classes_1st, total_undergraduate_1st_male, total_foreign_1st_male, total_second_courser_1st_male, total_undergraduate_1st_female, total_foreign_1st_female, total_second_courser_1st_female, enrollment_period_2nd, opening_of_classes_2nd, total_undergraduate_2nd_male, total_foreign_2nd_male, total_second_courser_2nd_male, total_undergraduate_2nd_female, total_foreign_2nd_female, total_second_courser_2nd_female, enrollment_period_3rd, opening_of_classes_3rd, total_undergraduate_3rd_male, total_foreign_3rd_male, total_second_courser_3rd_male, total_undergraduate_3rd_female, total_foreign_3rd_female, total_second_courser_3rd_female, enrollment_period_summer_midyear, opening_of_classes_summer_midyear, total_undergraduate_summer_midyear_male, total_foreign_summer_midyear_male, total_second_courser_summer_midyear_male, total_undergraduate_summer_midyear_female, total_foreign_summer_midyear_female, total_second_courser_summer_midyear_female)
                        VALUES ('$ac_year', '$hei_psg_region', '$hei_uii','$hei_name', '$enrollment_1st', '$opening_1st', $total_undergrad_1st_male, $total_foreign_1st_male, $total_2nd_courser_1st_male, $total_undergrad_1st_female, $total_foreign_1st_female, $total_2nd_courser_1st_female, '$enrollment_2nd', '$opening_2nd', $total_undergrad_2nd_male, $total_foreign_2nd_male, $total_2nd_courser_2nd_male, $total_undergrad_2nd_female, $total_foreign_2nd_female, $total_2nd_courser_2nd_female, '$enrollment_3rd', '$opening_3rd', $total_undergrad_3rd_male, $total_foreign_3rd_male, $total_2nd_courser_3rd_male, $total_undergrad_3rd_female, $total_foreign_3rd_female, $total_2nd_courser_3rd_female,  '$enrollment_summer_midyear', '$opening_summer_midyear', $total_undergrad_summer_midyear_male, $total_foreign_summer_midyear_male, $total_2nd_courser_summer_midyear_male, $total_undergrad_summer_midyear_female, $total_foreign_summer_midyear_female, $total_2nd_courser_summer_midyear_female)";
        
                $sql3 = "INSERT INTO tbl_degree_programs (ac_year, hei_psg_region, hei_uii, hei_name, program_code, program_name, gr_no, copc_no, in_the_portal)
                        SELECT ac_year, hei_psg_region, hei_uii, hei_name, program_code, program_name, gr_no, copc_no, in_the_portal
                        FROM tbl_degree_programs_temp
                        WHERE hei_uii='$hei_uii'";
        
                $sql4 = "DELETE FROM tbl_degree_programs_temp WHERE hei_uii='$hei_uii' AND ac_year='$ac_year'";
        
                $sql = $sql1 . ";" . $sql2 . ";" . $sql3 . ";" . $sql4;
        
                $result = mysqli_multi_query($conn, $sql);
                if (!$result) {
                    echo mysqli_error($conn);
                    die();
                } else {
                    header("Location:../../stufap-all.php");
                    exit();
                }
            }
        } else{
            echo "<script>
           alert();
            </script>";
        }
    } 
}
