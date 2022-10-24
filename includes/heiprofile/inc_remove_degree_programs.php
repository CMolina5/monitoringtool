<?php
session_start();
include_once '../db_connection.php';

$uid= $_POST['uid'];

foreach ($uid as $id){
    $sql = "SELECT * FROM tbl_degree_programs_temp WHERE uid =".$id;
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
}

if ($resultCheck > 0) {
    foreach ($uid as $id){
    $sql = "DELETE FROM tbl_degree_programs_temp
    WHERE uid =".$id;
    $result = mysqli_query($conn, $sql);
    }
} else {
    foreach ($uid as $id){
    $sql = "DELETE FROM tbl_degree_programs
    WHERE uid =".$id;
    $result = mysqli_query($conn, $sql);
    }
}

if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "./inc_degree_programs.php";
}
