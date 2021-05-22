
<?php

$user =$_GET['user'];
$url = "https://zexarabdas.xyz/offers/offertoro.php?user=".$user;

echo file_get_contents($url);
?>



?>