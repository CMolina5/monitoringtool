<?php
session_start();
include_once '../db_connection.php';
include 'inc_template.php';

$sql = "UPDATE tbl_drop_outs
SET 
".$_POST["name"]." = '".$_POST["value"]."' 
WHERE uid = '".$_POST["pk"]."'";
$result = mysqli_query($conn, $sql);