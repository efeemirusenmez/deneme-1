<?php
include('database/dbconnect.php');
?>
<?php
define('DB_SERVER', 'db');
define('DB_USERNAME', 'db');
define('DB_PASSWORD', 'db');
define('DB_NAME', 'db');
 

$conn = new PDO('mysql:host=db;dbname=db', $username, $password);
 

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>