<?php
session_start();
include_once '../db_connection.php';

if(isset($_POST["uid"])){
    $_SESSION['category_id']=$_POST['uid'];
    $sql="SELECT * FROM tbl_tes_category WHERE uid='".$_POST["uid"]."'";
    $result = mysqli_query($conn, $sql);
    
    $resultCheck= mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    echo json_encode($row);
}