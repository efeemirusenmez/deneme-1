<?php
$toEmail = "emir.usenmez@themax.media" ;
$mailHeaders = "Kimden: " . $_POST [ "adınız" ] . "<" . $_POST [ "e-postanız" ] . ">\r\n" ;
if ( mail ( $toEmail, $_POST [ "yorumlar" ] , $_POST [ "telefonunuz" ] , $ mailHeaders ) { 
echo "<p class='success'>Gönderilen İletişim Postaları.</p>" ;
} başka {
echo "<p class='Error'>Posta Gönderirken Sorun.</p>" ;
}
?>