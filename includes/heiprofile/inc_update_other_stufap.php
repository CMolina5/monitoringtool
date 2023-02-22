<?php
session_start();
include_once '../db_connection.php';

    $sql = "UPDATE tbl_hei_other_funded_stufaps
    SET 
    ".$_POST["name"]." = '".$_POST["value"]."' 
    WHERE uid = '".$_POST["pk"]."'";
    $result = mysqli_query($conn, $sql);

    include "./inc_other_stufaps.php";