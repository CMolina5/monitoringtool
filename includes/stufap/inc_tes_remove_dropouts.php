<?php
session_start();
include_once '../db_connection.php';

$uid= $_POST['uid'];

foreach ($uid as $id){
    $sql = "DELETE FROM tbl_drop_outs
   WHERE uid =".$id;
    $result = mysqli_query($conn, $sql);
}
   
if (!$result) {
    echo mysqli_error($conn);
    die();
} else {
    include "./inc_tes_dropouts.php";
}
