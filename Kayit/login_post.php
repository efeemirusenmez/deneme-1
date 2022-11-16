<?php
include('database/dbconnect.php');
?>
<?php
echo "uyelik onaylandı";
$username = $_POST['username'];
$password = $_POST['password'];

if( $_POST['username'] == '' ) { echo 'username yazın!'; }echo "<br>" ;
if( $_POST['password'] == '' ) { echo 'password yazın!'; }echo "<br>" ;
echo "</br>" ;

echo "username-> $username<br>password-> $password ";

$sql = "INSERT INTO users (username, password) VALUES (?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$username ,$password]);
?>
