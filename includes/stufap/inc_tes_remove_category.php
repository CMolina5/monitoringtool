<?php
session_start();
include_once '../db_connection.php';

$uid=mysqli_real_escape_string($conn, $_SESSION['category_id']);

$sql = "DELETE FROM tbl_tes_category
WHERE uid='$uid' ";
$result = mysqli_query($conn, $sql);

include "./inc_tes_category_table.php";
