<?php

$dbServername = "unifast.gov.ph";
$dbUsername = "unifastgov_monitoring";
$dbPassword = "R@10931!!!";
$dbName = "unifastgov_ufdb";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
global $conn;
