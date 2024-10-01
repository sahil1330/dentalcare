<?php
$servername = "103.145.50.126"; //103.145.50.126
$username = "dentaluser"; //dentaluser
$password = "OCdZi-t1#D3e"; //OCdZi-t1#D3e
$dbname = "NADC"; //NADC

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>