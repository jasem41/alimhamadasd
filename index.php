
<?php

$user =$_GET['user'];
//$url = "https://www.m1m1.xyz/offers/offertoro.php?user=".$user;
$url ="https://www.offertoro.com/ifr/show/22813/".$user ."/11822";
echo file_get_contents($url);
?>


