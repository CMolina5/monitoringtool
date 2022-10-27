<?php
session_start();
include_once '../db_connection.php';
include 'inc_template.php';

$ac_year = $_SESSION['ac_year'];
$hei_psg_region = $_SESSION['hei_psg_region'];
$hei_uii = $_SESSION['hei_uii'];
$hei_name = $_SESSION['hei_name'];
$total_fhe_opt_out_1st_male = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_1st_male']);
$total_fhe_opt_out_1st_female = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_1st_female']);
$total_fhe_opt_out_2nd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_2nd_male']);
$total_fhe_opt_out_2nd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_2nd_female']);
$total_fhe_opt_out_3rd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_3rd_male']);
$total_fhe_opt_out_3rd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_3rd_female']);
$total_fhe_opt_out_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_summer_midyear_male']);
$total_fhe_opt_out_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_fhe_opt_out_summer_midyear_female']);

$total_fhe_vol_cont_1st_male = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_1st_male']);
$total_fhe_vol_cont_1st_female = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_1st_female']);
$total_fhe_vol_cont_2nd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_2nd_male']);
$total_fhe_vol_cont_2nd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_2nd_female']);
$total_fhe_vol_cont_3rd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_3rd_male']);
$total_fhe_vol_cont_3rd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_3rd_female']);
$total_fhe_vol_cont_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_summer_midyear_male']);
$total_fhe_vol_cont_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_fhe_vol_cont_summer_midyear_female']);

// $total_fhe_loa_1st_male = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_1st_male']);
// $total_fhe_loa_1st_female = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_1st_female']);
// $total_fhe_loa_2nd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_2nd_male']);
// $total_fhe_loa_2nd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_2nd_female']);
// $total_fhe_loa_3rd_male = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_3rd_male']);
// $total_fhe_loa_3rd_female = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_3rd_female']);
// $total_fhe_loa_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_summer_midyear_male']);
// $total_fhe_loa_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['total_fhe_loa_summer_midyear_female']);

$total_tes_applicant_male = mysqli_real_escape_string($conn, $_POST['total_tes_applicant_male']);
$total_tes_applicant_female = mysqli_real_escape_string($conn, $_POST['total_tes_applicant_female']);
// $total_tes_loa_1st_male = mysqli_real_escape_string($conn, $_POST['total_tes_loa_1st_male']);
// $total_tes_loa_1st_female = mysqli_real_escape_string($conn, $_POST['total_tes_loa_1st_female']);
// $total_tes_loa_2nd_male = mysqli_real_escape_string($conn, $_POST['total_tes_loa_2nd_male']);
// $total_tes_loa_2nd_female = mysqli_real_escape_string($conn, $_POST['total_tes_loa_2nd_female']);
// $total_tdp_loa_1st_male = mysqli_real_escape_string($conn, $_POST['total_tdp_loa_1st_male']);
// $total_tdp_loa_1st_female = mysqli_real_escape_string($conn, $_POST['total_tdp_loa_1st_female']);
// $total_tdp_loa_2nd_male = mysqli_real_escape_string($conn, $_POST['total_tdp_loa_2nd_male']);
// $total_tdp_loa_2nd_female = mysqli_real_escape_string($conn, $_POST['total_tdp_loa_2nd_female']);

if (empty($total_fhe_opt_out_1st_male)) {
    $total_fhe_opt_out_1st_male = 0;
}
if (empty($total_fhe_opt_out_1st_female)) {
    $total_fhe_opt_out_1st_female = 0;
}

if (empty($total_fhe_opt_out_2nd_male)) {
    $total_fhe_opt_out_2nd_male = 0;
}
if (empty($total_fhe_opt_out_2nd_female)) {
    $total_fhe_opt_out_2nd_female = 0;
}

if (empty($total_fhe_opt_out_3rd_male)) {
    $total_fhe_opt_out_3rd_male = 0;
}
if (empty($total_fhe_opt_out_3rd_female)) {
    $total_fhe_opt_out_3rd_female = 0;
}

if (empty($total_fhe_opt_out_summer_midyear_male)) {
    $total_fhe_opt_out_summer_midyear_male = 0;
}
if (empty($total_fhe_opt_out_summer_midyear_female)) {
    $total_fhe_opt_out_summer_midyear_female = 0;
}

if (empty($total_fhe_vol_cont_1st_male)) {
    $total_fhe_vol_cont_1st_male = 0;
}
if (empty($total_fhe_vol_cont_1st_female)) {
    $total_fhe_vol_cont_1st_female = 0;
}

if (empty($total_fhe_vol_cont_2nd_male)) {
    $total_fhe_vol_cont_2nd_male = 0;
}
if (empty($total_fhe_vol_cont_2nd_female)) {
    $total_fhe_vol_cont_2nd_female = 0;
}

if (empty($total_fhe_vol_cont_3rd_male)) {
    $total_fhe_vol_cont_3rd_male = 0;
}
if (empty($total_fhe_vol_cont_3rd_female)) {
    $total_fhe_vol_cont_3rd_female = 0;
}

if (empty($total_fhe_vol_cont_summer_midyear_male)) {
    $total_fhe_vol_cont_summer_midyear_male = 0;
}
if (empty($total_fhe_vol_cont_summer_midyear_female)) {
    $total_fhe_vol_cont_summer_midyear_female = 0;
}

// if (empty($total_fhe_loa_1st_male)) {
//     $total_fhe_loa_1st_male = 0;
// }
// if (empty($total_fhe_loa_1st_female)) {
//     $total_fhe_loa_1st_female = 0;
// }

// if (empty($total_fhe_loa_2nd_male)) {
//     $total_fhe_loa_2nd_male = 0;
// }
// if (empty($total_fhe_loa_2nd_female)) {
//     $total_fhe_loa_2nd_female = 0;
// }

// if (empty($total_fhe_loa_3rd_male)) {
//     $total_fhe_loa_3rd_male = 0;
// }
// if (empty($total_fhe_loa_3rd_female)) {
//     $total_fhe_loa_3rd_female = 0;
// }

// if (empty($total_fhe_loa_summer_midyear_male)) {
//     $total_fhe_loa_summer_midyear_male = 0;
// }
// if (empty($total_fhe_loa_summer_midyear_female)) {
//     $total_fhe_loa_summer_midyear_female = 0;
// }

if (empty($total_tes_applicant_male)) {
    $total_tes_applicant_male = 0;
}
if (empty($total_tes_applicant_female)) {
    $total_tes_applicant_female = 0;
}

// if (empty($total_tes_loa_1st_male)) {
//     $total_tes_loa_1st_male = 0;
// }
// if (empty($total_tes_loa_1st_female)) {
//     $total_tes_loa_1st_female = 0;
// }

// if (empty($total_tes_loa_2nd_male)) {
//     $total_tes_loa_2nd_male = 0;
// }
// if (empty($total_tes_loa_2nd_female)) {
//     $total_tes_loa_2nd_female = 0;
// }

// if (empty($total_tdp_loa_1st_male)) {
//     $total_tdp_loa_1st_male = 0;
// }
// if (empty($total_tdp_loa_1st_female)) {
//     $total_tdp_loa_1st_female = 0;
// }

// if (empty($total_tdp_loa_2nd_male)) {
//     $total_tdp_loa_2nd_male = 0;
// }
// if (empty($total_tdp_loa_2nd_female)) {
//     $total_tdp_loa_2nd_female = 0;
// }

$sql = "SELECT * FROM tbl_stufap_info WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    $sql = "UPDATE tbl_stufap_info
    SET total_fhe_opt_out_1st_male='$total_fhe_opt_out_1st_male', total_fhe_opt_out_1st_female='$total_fhe_opt_out_1st_female',
        total_fhe_opt_out_2nd_male='$total_fhe_opt_out_2nd_male', total_fhe_opt_out_2nd_female='$total_fhe_opt_out_2nd_female',
        total_fhe_opt_out_3rd_male='$total_fhe_opt_out_3rd_male', total_fhe_opt_out_3rd_female='$total_fhe_opt_out_3rd_female',
        total_fhe_opt_out_summer_midyear_male='$total_fhe_opt_out_summer_midyear_male', total_fhe_opt_out_summer_midyear_female='$total_fhe_opt_out_summer_midyear_female',
        total_fhe_vol_cont_1st_male='$total_fhe_vol_cont_1st_male', total_fhe_vol_cont_1st_female='$total_fhe_vol_cont_1st_female',
        total_fhe_vol_cont_2nd_male='$total_fhe_vol_cont_2nd_male', total_fhe_vol_cont_2nd_female='$total_fhe_vol_cont_2nd_female',
        total_fhe_vol_cont_3rd_male='$total_fhe_vol_cont_3rd_male', total_fhe_vol_cont_3rd_female='$total_fhe_vol_cont_3rd_female',
        total_fhe_vol_cont_summer_midyear_male='$total_fhe_vol_cont_summer_midyear_male', total_fhe_vol_cont_summer_midyear_female='$total_fhe_vol_cont_summer_midyear_female', total_tes_applicant_male = '$total_tes_applicant_male', total_tes_applicant_female = '$total_tes_applicant_female'
    WHERE hei_uii='$hei_uii' AND ac_year='$ac_year'
    ";
     $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo mysqli_error($conn);
        die();
    } else {
        header("Location:../../compliance.php");
        exit();
    }
} else {
    if ($fhe == 'yes' and $tes == 'no' and $tdp == 'no') {
        if ($ac_calendar == 'Trimester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_3rd_male, 
            total_fhe_opt_out_summer_midyear_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_3rd_male, 
            total_fhe_vol_cont_summer_midyear_male,
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_3rd_female, 
            total_fhe_opt_out_summer_midyear_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_3rd_female, 
            total_fhe_vol_cont_summer_midyear_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_3rd_male, 
            $total_fhe_opt_out_summer_midyear_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_3rd_male, 
            $total_fhe_vol_cont_summer_midyear_male,
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_3rd_female, 
            $total_fhe_opt_out_summer_midyear_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_3rd_female, 
            $total_fhe_vol_cont_summer_midyear_female)";
        } else if ($ac_calendar == 'Semester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_summer_midyear_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_summer_midyear_male,
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_summer_midyear_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_summer_midyear_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_summer_midyear_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_summer_midyear_male,
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_summer_midyear_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_summer_midyear_female)";
        } else if ($ac_calendar == 'Trimester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_3rd_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_3rd_male,  
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_3rd_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_3rd_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_3rd_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_3rd_male, 
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_3rd_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_3rd_female)";
        } else if ($ac_calendar == 'Semester') {
            $sql = "INSERT INTO tbl_stufap_info (
                ac_year, 
                hei_psg_region, 
                hei_uii, 
                hei_name, 
                total_fhe_opt_out_1st_male, 
                total_fhe_opt_out_2nd_male, 
                total_fhe_vol_cont_1st_male, 
                total_fhe_vol_cont_2nd_male, 
                total_fhe_opt_out_1st_female, 
                total_fhe_opt_out_2nd_female, 
                total_fhe_vol_cont_1st_female, 
                total_fhe_vol_cont_2nd_female)
                VALUES ('$ac_year', 
                '$hei_psg_region', 
                '$hei_uii', 
                '$hei_name', 
                $total_fhe_opt_out_1st_male, 
                $total_fhe_opt_out_2nd_male, 
                $total_fhe_vol_cont_1st_male, 
                $total_fhe_vol_cont_2nd_male, 
                $total_fhe_opt_out_1st_female, 
                $total_fhe_opt_out_2nd_female, 
                $total_fhe_vol_cont_1st_female, 
                $total_fhe_vol_cont_2nd_female)";
        }
    } else if ($fhe == 'yes' and $tes == 'yes' and $tdp == 'no') {
        if ($ac_calendar == 'Trimester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_3rd_male, 
            total_fhe_opt_out_summer_midyear_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_3rd_male, 
            total_fhe_vol_cont_summer_midyear_male,
            total_tes_applicant_male, 
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_3rd_female, 
            total_fhe_opt_out_summer_midyear_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_3rd_female, 
            total_fhe_vol_cont_summer_midyear_female,  
            total_tes_applicant_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_3rd_male, 
            $total_fhe_opt_out_summer_midyear_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_3rd_male, 
            $total_fhe_vol_cont_summer_midyear_male,  
            $total_tes_applicant_male, 
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_3rd_female, 
            $total_fhe_opt_out_summer_midyear_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_3rd_female, 
            $total_fhe_vol_cont_summer_midyear_female, 
            $total_tes_applicant_female)";
        } else if ($ac_calendar == 'Semester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_summer_midyear_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_summer_midyear_male, 
            total_tes_applicant_male,
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_summer_midyear_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_summer_midyear_female, 
            total_tes_applicant_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_summer_midyear_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_summer_midyear_male, 
            $total_tes_applicant_male, 
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_summer_midyear_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_summer_midyear_female, 
            $total_tes_applicant_female)";
        } else if ($ac_calendar == 'Trimester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_3rd_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_3rd_male, 
            total_tes_applicant_male, 
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_3rd_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_3rd_female,  
            total_tes_applicant_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_3rd_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_3rd_male, 
            $total_tes_applicant_male, 
           
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_3rd_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_3rd_female,  
            $total_tes_applicant_female)";
        } else if ($ac_calendar == 'Semester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_tes_applicant_male, 
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_tes_applicant_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male,  
            $total_tes_applicant_male,
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female,
            $total_tes_applicant_female)";
        }
    } else if ($fhe == 'yes' and $tes == 'yes' and $tdp == 'yes') {
        if ($ac_calendar == 'Trimester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_3rd_male, 
            total_fhe_opt_out_summer_midyear_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_3rd_male, 
            total_fhe_vol_cont_summer_midyear_male,  
            total_tes_applicant_male,
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_3rd_female, 
            total_fhe_opt_out_summer_midyear_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_3rd_female, 
            total_fhe_vol_cont_summer_midyear_female, 
            total_tes_applicant_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_3rd_male, 
            $total_fhe_opt_out_summer_midyear_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_3rd_male, 
            $total_fhe_vol_cont_summer_midyear_male, 
            $total_tes_applicant_male,
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_3rd_female, 
            $total_fhe_opt_out_summer_midyear_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_3rd_female, 
            $total_fhe_vol_cont_summer_midyear_female, 
            $total_tes_applicant_female)";
        } else if ($ac_calendar == 'Semester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_summer_midyear_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_summer_midyear_male,
            total_tes_applicant_male,
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_summer_midyear_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_summer_midyear_female, 
            total_tes_applicant_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_summer_midyear_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_summer_midyear_male,  
            $total_tes_applicant_male,
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_summer_midyear_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_summer_midyear_female, 
            $total_tes_applicant_female)";
        } else if ($ac_calendar == 'Trimester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_3rd_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_3rd_male, 
            total_tes_applicant_male,
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_3rd_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_3rd_female, 
            total_tes_applicant_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_3rd_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_3rd_male, 
            $total_tes_applicant_male,
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_3rd_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_3rd_female, 
            $total_tes_applicant_female)";
        } else if ($ac_calendar == 'Semester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_tes_applicant_male
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female,  
            total_tes_applicant_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_tes_applicant_male, 
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_tes_applicant_female)";
        }
    } else if ($fhe == 'yes' and $tes == 'no' and $tdp == 'yes') {
        if ($ac_calendar == 'Trimester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_3rd_male, 
            total_fhe_opt_out_summer_midyear_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_3rd_male, 
            total_fhe_vol_cont_summer_midyear_male,             
            total_tes_applicant_male, 
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_3rd_female, 
            total_fhe_opt_out_summer_midyear_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_3rd_female, 
            total_fhe_vol_cont_summer_midyear_female, 
            total_tes_applicant_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_3rd_male, 
            $total_fhe_opt_out_summer_midyear_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_3rd_male, 
            $total_fhe_vol_cont_summer_midyear_male,
            $total_tes_applicant_male,
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_3rd_female, 
            $total_fhe_opt_out_summer_midyear_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_3rd_female, 
            $total_fhe_vol_cont_summer_midyear_female,
            $total_tes_applicant_female)";
        } else if ($ac_calendar == 'Semester with Summer') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_summer_midyear_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_summer_midyear_male,
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_summer_midyear_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_summer_midyear_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male,
            $total_fhe_opt_out_summer_midyear_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_summer_midyear_male,
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female,
            $total_fhe_opt_out_summer_midyear_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_summer_midyear_female)";
        } else if ($ac_calendar == 'Trimester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year, 
            hei_psg_region, 
            hei_uii, 
            hei_name, 
            total_fhe_opt_out_1st_male, 
            total_fhe_opt_out_2nd_male, 
            total_fhe_opt_out_3rd_male, 
            total_fhe_vol_cont_1st_male, 
            total_fhe_vol_cont_2nd_male, 
            total_fhe_vol_cont_3rd_male,
            
            total_fhe_opt_out_1st_female, 
            total_fhe_opt_out_2nd_female, 
            total_fhe_opt_out_3rd_female, 
            total_fhe_vol_cont_1st_female, 
            total_fhe_vol_cont_2nd_female, 
            total_fhe_vol_cont_3rd_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_opt_out_3rd_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male, 
            $total_fhe_vol_cont_3rd_male,
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_opt_out_3rd_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female, 
            $total_fhe_vol_cont_3rd_female)";
        } else if ($ac_calendar == 'Semester') {
            $sql = "INSERT INTO tbl_stufap_info (ac_year,
             hei_psg_region, 
             hei_uii, 
             hei_name, 
             total_fhe_opt_out_1st_male, 
             total_fhe_opt_out_2nd_male, 
             total_fhe_vol_cont_1st_male, 
             total_fhe_vol_cont_2nd_male,
             
             total_fhe_opt_out_1st_female, 
             total_fhe_opt_out_2nd_female, 
             total_fhe_vol_cont_1st_female, 
             total_fhe_vol_cont_2nd_female)
            VALUES ('$ac_year', 
            '$hei_psg_region', 
            '$hei_uii', 
            '$hei_name', 
            $total_fhe_opt_out_1st_male, 
            $total_fhe_opt_out_2nd_male, 
            $total_fhe_vol_cont_1st_male, 
            $total_fhe_vol_cont_2nd_male,
            
            $total_fhe_opt_out_1st_female, 
            $total_fhe_opt_out_2nd_female, 
            $total_fhe_vol_cont_1st_female, 
            $total_fhe_vol_cont_2nd_female)";
        }
    } else if ($fhe == 'no' and $tes == 'yes' and $tdp == 'yes') {
        $sql = "INSERT INTO tbl_stufap_info (ac_year, 
        hei_psg_region, 
        hei_uii, 
        hei_name, 
        total_tes_applicant_male,
        total_tes_applicant_female)
        VALUES ('$ac_year', 
        '$hei_psg_region', 
        '$hei_uii', 
        '$hei_name', 
        $total_tes_applicant_male,
        $total_tes_applicant_female)";
    } else if ($fhe == 'no' and $tes == 'yes' and $tdp == 'no') {
        $sql = "INSERT INTO tbl_stufap_info (ac_year, 
        hei_psg_region, 
        hei_uii, 
        hei_name, 
        total_tes_applicant_male,
        total_tes_applicant_female)
        VALUES ('$ac_year', 
        '$hei_psg_region', 
        '$hei_uii', 
        '$hei_name', 
        $total_tes_applicant_male,
        $total_tes_applicant_female)";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location:../../compliance.php");
        exit();
    } else {
        echo mysqli_error($conn);
        die();
    }
}
// if (mysqli_query($conn, $sql)) {
//             header("Location:../../compliance.php");
//             exit();
//         } else {
//             echo mysqli_error($conn);
//             die();
//         }