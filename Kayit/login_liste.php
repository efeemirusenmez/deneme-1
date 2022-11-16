<?php
include('database/dbconnect.php');
?>

<?php
$q = $conn->prepare("SELECT * FROM users ORDER BY ID ASC");
$q->execute();
$r = $q->fetchAll(PDO::FETCH_ASSOC);
if($r){
    echo'<table border="1" bgcolor="yellow">';
    foreach ($r as $sonuc){
        echo '<tr>';
        echo '<td>';
        echo $sonuc['username'];
        echo '</td>';
        echo '<td>';
        echo $sonuc['password'];
        echo '</td>';
        echo '</tr>';
        
    }
    echo'</table>';
}
else{
    echo 'sonuc yok';
}
?>
