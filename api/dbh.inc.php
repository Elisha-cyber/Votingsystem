<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "M321.penda";
$dbName = "voting";
$dbPort = 3360;

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName, $dbPort);

if (!$conn) {
    # code...
    die("could not connect to the database" . mysqli_connect_error());
}
