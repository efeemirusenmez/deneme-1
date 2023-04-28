<?php
unset($_SESSION);
unset($_SESSION['username']);
 
session_destroy();
 
header("location: index.php");
exit;
?>
