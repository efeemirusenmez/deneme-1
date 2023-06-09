<?php
include('database/dbconnect.php');
?>
<html>
    <body>
    <link href="slider.css" rel="stylesheet" >
  <img src="Fotograflar/The.gif" class="card-img-top" id="img" alt="..."  height="350">
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$email = $_POST['email'];
$cinsiyet=$_POST['cinsiyet'];

if( $_POST['name'] == '' ) { echo 'Adınızı yazın!'; }echo "<br>" ;
if( $_POST['surname'] == '' ) { echo 'Soyadınızı yazın!'; }echo "<br>" ;
if( $_POST['username'] == '' ) { echo 'Kullanııc adınızı yazın!'; }echo "<br>" ;
if( $_POST['email'] == '' ) { echo 'Mailinizi yazın!'; } echo "<br>" ;
echo "</br>" ;

echo "Ad ve Soyadınız-> $name<br>Mail-> $email <br>Kart numarası-> $username<br>Kart son kullanma tarihi-> $surname <br> Alınan nft->$cinsiyet";

$sql = "INSERT INTO iletisim (name, surname,username,email, cins) VALUES (?,?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$name, $surname,$username ,$email, $cinsiyet]);

 ?>    
</body>

</html>
