<?php

$dbServername = "unifast.gov.ph";
$dbUsername = "unifastgov_monitoringtool";
$dbPassword = "VF&a19jNGJ&Y";
$dbName = "unifastgov_ufdb";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
global $conn;
