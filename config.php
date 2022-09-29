<?php 

$server = "localhost";
$user = "root";
$pass = "123456";
$database = "login_artanis";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>