<?php
$host = "localhost" ;
$kullanıcıAdı = "fyrhp" ;
$şifre = "RTDE" ;
$dbName = "fyrhp" ;
// Veritabanı bağlantısı oluştur
$bağlantı = yeni mysqli ( $host, $userName, $password, $dbName ) ;
// Bağlantıyı kontrol et
if ( $bağ->connect_error ) {  
die ( "Bağlantı başarısız: " . $bağ->connect_error ) ;
}
?>