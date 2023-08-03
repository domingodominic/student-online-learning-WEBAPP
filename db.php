<?php 
$servername = "localhost";
$username = "root";
$password = "654321";
$database = "online_learning_webapp";

$connection = mysqli_connect($servername, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
