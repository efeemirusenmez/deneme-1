<?php
$servername = "db";
$username = "db";
$password = "db";
$dbname = "db";


try {
  $conn = new PDO('mysql:host=db;dbname=db', $username, $password);
  //$conn = new PDO("mysql://b37f567b3f741c:f43585bf@eu-cdbr-west-03.cleardb.net/heroku_123bc0464991a9f?reconnect=true");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>