<?php
$kullanici_adi = "emir";
$sifre = 123456;
if(isset($_SESSION['loginin']) && $_SESSION['loginin'] == true){ // Daha önce oturum açıldıysa anasayfaya gidiyor.
header("Location: index.php");
}
if(isset($_POST['kullaniciadi']) && isset($_POST['sifre']))
{ // Burada input alanına giren verileri değişkendeki verilerle karşılaştırıyorum doğruysa anasayfaya değilse bulunduğu sayfaya hata çıkıyor
if($_POST['kullaniciadi'] == $kullanici_adi && $_POST['sifre'] == $sifre){
  $_SESSION['loginin'] = true;
  header("Location: index.php");
}else{
  echo 'Giriş Bilgileri Hatalı.';
}
}
?>
<?php
session_start();
session_destroy(); // Bu Fonksiyon ile tüm Session siliyoruz.
header('Location: login.php');
?>
<?php
unset($_SESSION['loginin']);
?>