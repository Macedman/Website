<?php
header('Content-type: text/json');
$servername = "localhost";
$username = "root";
$password = "";
$database = "INSURANCE";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else 
    {
      
    }
?>