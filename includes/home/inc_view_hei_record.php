<?php
session_start();
include_once '../db_connection.php';

if(isset($_POST["uid"])){
    $_SESSION['form_id']=$_POST['uid'];
    $sql="SELECT * FROM tbl_hei_records WHERE uid='".$_POST["uid"]."'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['ac_year']=$row['ac_year'];
        }
    }
}