<?php
$host = "localhost";
$username = "root";
$password = "";  // Leave this empty if 'root' has no password
$database = "restaurant";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
