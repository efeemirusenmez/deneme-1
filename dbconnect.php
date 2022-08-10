<?php
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "b37f567b3f741c";
$password = "f43585bf";

try {
  $conn = new PDO("mysql:host=$servername;dbname=db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>