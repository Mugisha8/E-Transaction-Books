<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name="accounting";


// $servername = "localhost";
// $username = "Mugisha_web";
// $password = "Mugisha@123";


// Create connection
$conn = new mysqli($servername, $username,$password,$db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>