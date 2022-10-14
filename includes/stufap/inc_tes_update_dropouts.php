<?php
session_start();
include_once '../db_connection.php';

// $uid=mysqli_real_escape_string($conn, $_SESSION['dropouts_id']);
// $tes_drop_1st_edit = mysqli_real_escape_string($conn, $_POST['tes_drop_1st_1']);
// $tes_drop_2nd_edit = mysqli_real_escape_string($conn, $_POST['tes_drop_2nd_1']);

// if(empty($tes_drop_1st_edit)){
//     $tes_drop_1st_edit=0;
// }
// if(empty($tes_drop_2nd_edit)){
//     $tes_drop_2nd_edit=0;
// }

// $sql = "UPDATE tbl_drop_outs
// SET total_dropout_1st='$tes_drop_1st_edit', total_dropout_2nd='$tes_drop_2nd_edit'
// WHERE uid='$uid' ";
// $result = mysqli_query($conn, $sql);

// include "./inc_tes_dropouts.php";

$sql = "UPDATE tbl_drop_outs
SET 
".$_POST["name"]." = '".$_POST["value"]."' 
WHERE uid = '".$_POST["pk"]."'";
$result = mysqli_query($conn, $sql);