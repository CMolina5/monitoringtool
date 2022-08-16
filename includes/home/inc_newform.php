<?php
include '../db_connection.php';
session_start();

if (isset($_POST['btn_save'])) {
    $required = array('ac_year', 'ac_calendar');

    foreach ($required as $field) {
        if (empty($_POST[$field])) {
            header("Location:../../home.php");
            exit();
        } else {
            $ac_year = $_POST['ac_year'];
            $hei_psg_region = $_SESSION['hei_psg_region'];
            $hei_uii = $_SESSION['hei_uii'];
            $hei_name = $_SESSION['hei_name'];
            $ac_calendar = mysqli_real_escape_string($conn, $_POST['ac_calendar']);
            $fhe = mysqli_real_escape_string($conn, $_POST['fhe']);
            $tes = mysqli_real_escape_string($conn, $_POST['tes']);
            $tdp = mysqli_real_escape_string($conn, $_POST['tdp']);

            $sql = "SELECT * FROM tbl_hei_records WHERE ac_year='$ac_year' AND hei_psg_region = '$hei_psg_region' AND hei_uii = '$hei_uii'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if ($resultCheck > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $_SESSION['alert'] = 'found';
                    header("Location:../../home.php");
                    exit();
                }
            } else {

                $timestamp = date('m/d/Y');

                $sql1 = "INSERT INTO tbl_hei_records (ac_year, hei_psg_region, hei_uii, hei_name, ac_calendar, fhe, tes, tdp, form_status, date_created)
                VALUES ('$ac_year', '$hei_psg_region', '$hei_uii','$hei_name','$ac_calendar','$fhe','$tes','$tdp', 'ongoing', '$timestamp')";

                $sql2 = "INSERT INTO tbl_degree_programs_temp (ac_year, hei_psg_region, hei_uii, hei_name, program_code, program_name, in_the_portal)
                SELECT '$ac_year', '$hei_psg_region', '$hei_uii', '$hei_name', course_code, course_name, 'yes'
                FROM tbl_registry
                WHERE hei_uii='$hei_uii'";

                $sql = $sql1 . ";" . $sql2;

                $result = mysqli_multi_query($conn, $sql);
                if (!$result) {
                    echo mysqli_error($conn);
                    die();
                } else {
                    $_SESSION['ac_year'] = $ac_year;
                    $_SESSION['alert'] = 'new';
                    header("Location:../../heiprofile.php");
                    exit();
                }
            }
        }
    }
}