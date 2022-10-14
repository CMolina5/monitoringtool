<?php
session_start();
include_once '../db_connection.php';

// $uid=mysqli_real_escape_string($conn, $_SESSION['dropouts_id']);
// $tdp_drop_1st_edit = mysqli_real_escape_string($conn, $_POST['tdp_drop_1st_1']);
// $tdp_drop_2nd_edit = mysqli_real_escape_string($conn, $_POST['tdp_drop_2nd_1']);

// if(empty($tdp_drop_1st_edit)){
//     $tdp_drop_1st_edit=0;
// }
// if(empty($tdp_drop_2nd_edit)){
//     $tdp_drop_2nd_edit=0;
// }

// $sql = "UPDATE tbl_drop_outs
// SET total_dropout_1st='$tdp_drop_1st_edit', total_dropout_2nd='$tdp_drop_2nd_edit'
// WHERE uid='$uid' ";
// $result = mysqli_query($conn, $sql);

// include "./inc_tdp_dropouts.php";

$sql = "UPDATE tbl_drop_outs
SET 
".$_POST["name"]." = '".$_POST["value"]."' 
WHERE uid = '".$_POST["pk"]."'";
$result = mysqli_query($conn, $sql);