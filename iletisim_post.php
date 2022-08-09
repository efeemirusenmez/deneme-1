
<?php
include('header.php');
include('dbconnect.php');
?>


<?php
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$cinsiyet=$_POST['cinsiyet'];

if( $_POST['firstname'] == '' ) { echo 'Adınızı yazın!'; }echo "<br>" ;
if( $_POST['lastname'] == '' ) { echo 'Soyadınızı yazın!'; }echo "<br>" ;
if( $_POST['username'] == '' ) { echo 'Kullanııc adınızı yazın!'; }echo "<br>" ;
if( $_POST['email'] == '' ) { echo 'Mailinizi yazın!'; } echo "<br>" ;
echo "</br>" ;

echo "İsim-> $name <br>Soyad-> $lastname<br>Kullanıcı adı-> $username<br>Mail-> $email";

$sql = "INSERT INTO iletisim (name, surname,username,email, cins) VALUES (?,?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$name, $lastname,$username ,$email, $cinsiyet]);
?>


<?php
include('footer.php');
?>
