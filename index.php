
<?php

$user =$_GET['user'];
$url = "https://www.m1m1.xyz/offers/offertoro.php?user=".$user;

echo file_get_contents($url);
?>



?>