<?php
$host = "localhost";
$user = "uulevslgtrnau";
$pass = "ld4dy42tkorz";
$db   = "dbnd6uvftvhbzv";
 
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
 
