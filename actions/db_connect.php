<?php 

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "be17_cr4_arman_biglibrary";

$connect = mysqli_connect($localhost, $username, $password, $dbname);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}