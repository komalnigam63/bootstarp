<?php
$servername = "localhost";
$username = "interns";
$password = "interns@123";
$dbName="interns";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
