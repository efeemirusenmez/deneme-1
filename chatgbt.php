<!DOCTYPE html>
<html>
<head>
	<title>E-Ticaret Ana Sayfası</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Hoş Geldiniz!</h1>
	<h2>Ürünler</h2>
	<ul>
		<?php
			// Ürünleri dizi olarak tanımla
			$urunler = array(
				array("id" => 1, "isim" => "Bilgisayar", "fiyat" => 2500),
				array("id" => 2, "isim" => "Telefon", "fiyat" => 1500),
				array("id" => 3, "isim" => "Televizyon", "fiyat" => 3500),
				array("id" => 4, "isim" => "Tablet", "fiyat" => 1000),
				array("id" => 5, "isim" => "Oyun Konsolu", "fiyat" => 2000)
			);
			
			// Her bir ürünü listele
			foreach($urunler as $urun){
				echo "<li>";
				echo "<a href='detay.php?id=".$urun['id']."'>".$urun['isim']."</a> - ".$urun['fiyat']." TL";
				echo "</li>";
			}
		?>
	</ul>
</body>
</html>
