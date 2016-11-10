<?php
$servername="mysql.hostinger.in";
$username="u602930306_root";
$password="mukul123";
$db="u602930306_hardw";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>