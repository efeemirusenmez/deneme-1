<?php
include('database/dbconnect.php');
?>
<?php

$username = $_POST['username'];
$password = $_POST['password'];

if( $_POST['username'] == '' ) 
{ echo 'username yazın!'; exit;}echo "<br>" ;
if( $_POST['password'] == '' ) 
{ echo 'password yazın!'; exit;}echo "<br>" ;
echo "</br>" ;

echo "username-> $username<br>password-> $password ";
$passwordmd5=md5($password);

$sql = "SELECT * FROM users WHERE username=? and password=?";
$stmt= $conn->prepare($sql);
$kayitoldumu=$stmt->execute([$username ,$passwordmd5]);
if( $kayitoldumu===true )
{
    $userinfo = $stmt->fetch();
    if($userinfo){
        echo "Giriş başarılı";
        $_SESSION['loginin']=true;
        $_SESSION['username']=$userinfo['username'];
    }
    
}
else
{
    echo "Sorgu yapılamadı";
}
?>
