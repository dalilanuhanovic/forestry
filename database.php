<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ervin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Konekcija neuspješna: " . $conn->connect_error);
}