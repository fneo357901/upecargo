<?php

include("functions.php");

$servername = "localhost";
$username = "newaccount";
$password = "$#Upe2019";
$dbname = "upecargo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
