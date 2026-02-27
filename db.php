<?php
$host = "sql208.infinityfree.com";
$user = "if0_41260001";
$pass = "9174yrns6269";
$db   = "if0_41260001_Mydatabaseyam";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database Connection Failed");
}
?>
