
<?php

$user =$_GET['user'];

include 'code.php';

//if ($code =="LB"){

$url = "https://www.m1m1.xyz/offers/offertoro.php?user=".$user;
echo file_get_contents($url);

//}else{
?>
<?php

//}
?>