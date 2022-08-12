<?php
include('header.php');
include('dbconnect.php');
?>
<!--?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'eu-cdbr-west-03.cleardb.net');
define('DB_USERNAME', 'b37f567b3f741c');
define('DB_PASSWORD', 'f43585bf');
define('DB_NAME', 'heroku_123bc0464991a9f');
 
/* Attempt to connect to MySQL database */
$conn = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_123bc0464991a9f', $username, $password);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
