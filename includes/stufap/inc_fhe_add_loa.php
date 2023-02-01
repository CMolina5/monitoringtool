<?php
session_start();
include_once '../db_connection.php';
include 'inc_template.php';

$ac_year = mysqli_real_escape_string($conn, $_SESSION['ac_year']);
$hei_psg_region = mysqli_real_escape_string($conn, $_SESSION['hei_psg_region']);
$hei_uii = mysqli_real_escape_string($conn, $_SESSION['hei_uii']);
$hei_name = mysqli_real_escape_string($conn, $_SESSION['hei_name']);
$program = "FHE";
$fhe_loa_reason = mysqli_real_escape_string($conn, $_POST['fhe_loa_reason']);
$fhe_loa_other = mysqli_real_escape_string($conn, $_POST['fhe_loa_other']);
$fhe_loa_1st_male = mysqli_real_escape_string($conn, $_POST['fhe_loa_1st_male']);
$fhe_loa_1st_female = mysqli_real_escape_string($conn, $_POST['fhe_loa_1st_female']);
$fhe_loa_2nd_male = mysqli_real_escape_string($conn, $_POST['fhe_loa_2nd_male']);
$fhe_loa_2nd_female = mysqli_real_escape_string($conn, $_POST['fhe_loa_2nd_female']);

if(empty($fhe_loa_1st_male)){
    $fhe_loa_1st_male=0;
}
if(empty($fhe_loa_1st_female)){
    $fhe_loa_1st_female=0;
}
if(empty($fhe_loa_2nd_male)){
    $fhe_loa_2nd_male=0;
}
if(empty($fhe_loa_2nd_female)){
    $fhe_loa_2nd_female=0;
}

$sql = "SELECT * FROM tbl_loa WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (reason ='$fhe_loa_reason' OR reason ='$fhe_loa_other') AND program='FHE'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    echo "<script>
        Swal.fire(
            'Data already exist!',
            'Please select the data in the table to update!',
            'warning'
        )
    </script>";
} else {
    if ($ac_calendar == 'Trimester') {
        $fhe_loa_3rd_male = mysqli_real_escape_string($conn, $_POST['fhe_loa_3rd_male']);
        $fhe_loa_3rd_female = mysqli_real_escape_string($conn, $_POST['fhe_loa_3rd_female']);
        if(empty($fhe_loa_3rd_male)){
            $fhe_loa_3rd_male=0;
        }
        if(empty($fhe_loa_3rd_female)){
            $fhe_loa_3rd_female=0;
        }
        if ($fhe_loa_reason == 'Others' && !empty($fhe_loa_other)) {
            $sql = "INSERT INTO tbl_loa (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_loa_1st_male, total_loa_1st_female, total_loa_2nd_male, total_loa_2nd_female, total_loa_3rd_male, total_loa_3rd_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_loa_other', '$fhe_loa_1st_male', '$fhe_loa_1st_female', '$fhe_loa_2nd_male','$fhe_loa_2nd_female', '$fhe_loa_3rd_male', '$fhe_loa_3rd_female')";
            $result = mysqli_query($conn, $sql);

            echo "<script>
            Swal.fire(
                'Success!',
                'You added a record!',
                'success'
            )
            </script>";
        }else {
            $sql = "INSERT INTO tbl_loa (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_loa_1st_male, total_loa_1st_female, total_loa_2nd_male, total_loa_2nd_female, total_loa_3rd_male, total_loa_3rd_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_loa_reason', '$fhe_loa_1st_male', '$fhe_loa_1st_female', '$fhe_loa_2nd_male','$fhe_loa_2nd_female', '$fhe_loa_3rd_male', '$fhe_loa_3rd_female')";
            $result = mysqli_query($conn, $sql);

            echo "<script>
            Swal.fire(
                'Success!',
                'You added a record!',
                'success'
            )
            </script>";
        }
    } else if ($ac_calendar == 'Trimester with Summer') {
        $fhe_loa_3rd_male = mysqli_real_escape_string($conn, $_POST['fhe_loa_3rd_male']);
        $fhe_loa_3rd_female = mysqli_real_escape_string($conn, $_POST['fhe_loa_3rd_female']);
        $fhe_loa_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['fhe_loa_summer_midyear_male']);
        $fhe_loa_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['fhe_loa_summer_midyear_female']);

        if(empty($fhe_loa_3rd_male)){
            $fhe_loa_3rd_male=0;
        }
        if(empty($fhe_loa_3rd_female)){
            $fhe_loa_3rd_female=0;
        }
        if(empty($fhe_loa_summer_midyear_male)){
            $fhe_loa_summer_midyear_male=0;
        }
        if(empty($fhe_loa_summer_midyear_female)){
            $fhe_loa_summer_midyear_female=0;
        }
        
        if ($fhe_loa_reason == 'Others' && !empty($fhe_loa_other)) {
            $sql = "INSERT INTO tbl_loa (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_loa_1st_male, total_loa_1st_female, total_loa_2nd_male, total_loa_2nd_female, total_loa_3rd_male, total_loa_3rd_female, total_loa_summer_midyear_male, total_loa_summer_midyear_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_loa_other', '$fhe_loa_1st_male', '$fhe_loa_1st_female', '$fhe_loa_2nd_male','$fhe_loa_2nd_female', '$fhe_loa_3rd_male', '$fhe_loa_3rd_female', '$fhe_loa_summer_midyear_male', '$fhe_loa_summer_midyear_female')";
            $result = mysqli_query($conn, $sql);

         echo "<script>
            Swal.fire(
                'Success!',
                'You added a record!',
                'success'
            )
            </script>";
        } else {
            $sql = "INSERT INTO tbl_loa (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_loa_1st_male, total_loa_1st_female, total_loa_2nd_male, total_loa_2nd_female, total_loa_3rd_male, total_loa_3rd_female, total_loa_summer_midyear_male, total_loa_summer_midyear_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_loa_reason', '$fhe_loa_1st_male', '$fhe_loa_1st_female', '$fhe_loa_2nd_male','$fhe_loa_2nd_female', '$fhe_loa_3rd_male', '$fhe_loa_3rd_female', '$fhe_loa_summer_midyear_male', '$fhe_loa_summer_midyear_female')";
            $result = mysqli_query($conn, $sql);

            echo "<script>
            Swal.fire(
                'Success!',
                'You added a record!',
                'success'
            )
            </script>";
        }
    } else if ($ac_calendar == 'Semester with Summer') {
        $fhe_loa_summer_midyear_male = mysqli_real_escape_string($conn, $_POST['fhe_loa_summer_midyear_male']);
        $fhe_loa_summer_midyear_female = mysqli_real_escape_string($conn, $_POST['fhe_loa_summer_midyear_female']);
        if(empty($fhe_loa_summer_midyear_male)){
            $fhe_loa_summer_midyear_male=0;
        }
        if(empty($fhe_loa_summer_midyear_female)){
            $fhe_loa_summer_midyear_female=0;
        }
        if ($fhe_loa_reason == 'Others' && !empty($fhe_loa_other)) {
            $sql = "INSERT INTO tbl_loa (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_loa_1st_male, total_loa_1st_female, total_loa_2nd_male, total_loa_2nd_female, total_loa_summer_midyear_male, total_loa_summer_midyear_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_loa_other', '$fhe_loa_1st_male', '$fhe_loa_1st_female', '$fhe_loa_2nd_male','$fhe_loa_2nd_female', '$fhe_loa_summer_midyear_male', '$fhe_loa_summer_midyear_female')";
            $result = mysqli_query($conn, $sql);

            echo "<script>
            Swal.fire(
                'Success!',
                'You added a record!',
                'success'
            )
            </script>";
        } else {
            $sql = "INSERT INTO tbl_loa (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_loa_1st_male, total_loa_1st_female, total_loa_2nd_male, total_loa_2nd_female, total_loa_summer_midyear_male, total_loa_summer_midyear_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_loa_reason', '$fhe_loa_1st_male', '$fhe_loa_1st_female', '$fhe_loa_2nd_male','$fhe_loa_2nd_female', '$fhe_loa_summer_midyear_male', '$fhe_loa_summer_midyear_female')";
            $result = mysqli_query($conn, $sql);

            echo "<script>
            Swal.fire(
                'Success!',
                'You added a record!',
                'success'
            )
            </script>";
        }
    } else if ($ac_calendar == 'Semester') {
        if ($fhe_loa_reason == 'Others' && !empty($fhe_loa_other)) {
            $sql = "INSERT INTO tbl_loa (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_loa_1st_male, total_loa_1st_female, total_loa_2nd_male, total_loa_2nd_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_loa_other', '$fhe_loa_1st_male', '$fhe_loa_1st_female', '$fhe_loa_2nd_male','$fhe_loa_2nd_female')";
            $result = mysqli_query($conn, $sql);

            echo "<script>
            Swal.fire(
                'Success!',
                'You added a record!',
                'success'
            )
            </script>";
        } else {
            $sql = "INSERT INTO tbl_loa (ac_year, hei_psg_region, hei_uii, hei_name, program, reason, total_loa_1st_male, total_loa_1st_female, total_loa_2nd_male, total_loa_2nd_female)
            VALUES ('$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', '$program', '$fhe_loa_reason', '$fhe_loa_1st_male', '$fhe_loa_1st_female', '$fhe_loa_2nd_male','$fhe_loa_2nd_female')";
            $result = mysqli_query($conn, $sql);

            echo "<script>
            Swal.fire(
                'Success!',
                'You added a record!',
                'success'
            )
            </script>";
        }
    }
}
include "inc_fhe_loa.php";
