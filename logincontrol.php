<?php
session_start();
$username = $_POST['kullanici_adi'];
$password = $_POST['parola'];
 
if($username and $password){
 
$db_username = $db -> username();
$db_password = $db -> password();
 
if($db_username == $username and $db_password == $password){
echo "Giriş Başarılı Şekilde Yapıldı.";
include("session.php");
} else { echo "Kullanıcı adı veya parola yanlış.";
header("location:form.html");
}
 
} else {
header("location:form.html");
}