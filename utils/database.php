<?php 
$servername = "localhost";
$username = "root";
$password = "password";
$database_name = "new_database";

// Create connection
$db_connection = mysqli_connect($servername, $username, $password, $database_name);
// Check connection
if (mysqli_connect_errno()) {
  die("Connection failed: " . mysqli_connect_error());
  exit();
}
