<?php
$servername = "sql104.infinityfree.com";
$username = "if0_38428478";
$password = "Rutujabidarkar12345";
$database = "if0_38428478_NewDB";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: Notify successful connection (for debugging only)
echo "Connected successfully";
?>
