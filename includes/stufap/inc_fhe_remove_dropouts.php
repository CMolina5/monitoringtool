<?php
session_start();
include_once '../db_connection.php';

$uid=mysqli_real_escape_string($conn, $_SESSION['dropouts_id']);

$sql = "DELETE FROM tbl_drop_outs
WHERE uid='$uid' ";
$result = mysqli_query($conn, $sql);

include "./inc_fhe_dropouts.php";