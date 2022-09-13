<?php
$server = "sql209.epizy.com";
$username = "epiz_32572167";
$password = "aCnbtATt3OG5R7";
$dbname = "epiz_32572167_contactform";

// Create connection
$conn = new mysqli($server, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>