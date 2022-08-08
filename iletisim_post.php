
<?php
include('header.php');
?>
<!--style>
.login {
  background-color:dimgrey; 
}
.login echo{
    display:block;
margin: 110px 770px 0px 62px;
}
</style-->
<?php
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];

if( $_POST['firstname'] == '' ) { echo 'Adınızı yazın!'; }echo "<br>" ;
if( $_POST['lastname'] == '' ) { echo 'Soyadınızı yazın!'; }echo "<br>" ;
if( $_POST['username'] == '' ) { echo 'Kullanııc adınızı yazın!'; }echo "<br>" ;
if( $_POST['email'] == '' ) { echo 'Mailinizi yazın!'; } echo "<br>" ;
echo "</br>" ;

echo "İsim-> $name <br>Soyad-> $lastname<br>Kullanıcı adı-> $username<br>Mail-> $email"
?>


<?php
include('footer.php');
?>


<!--?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@example.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'from@example.com';
$mail->FromName = 'Mailer';
$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}