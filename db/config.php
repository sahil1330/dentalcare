<?php
$servername = "localhost"; //103.145.50.126
$username = "root"; //dentaluser
$password = ""; //OCdZi-t1#D3e
$dbname = "nadc"; //NADC

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>