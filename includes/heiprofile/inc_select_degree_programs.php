<?php
session_start();
include_once '../db_connection.php';

if(isset($_POST["uid"])){
    $_SESSION['degree_program_id']=$_POST['uid'];
    $sql="SELECT * FROM tbl_degree_programs_temp WHERE uid='".$_POST["uid"]."'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        $resultCheck= mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        echo json_encode($row);
    }else{
        $sql="SELECT * FROM tbl_degree_programs WHERE uid='".$_POST["uid"]."'";
        $result = mysqli_query($conn, $sql);

        $resultCheck= mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        echo json_encode($row);
    }
}