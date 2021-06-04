
<?php

$user =$_GET['user'];

include 'code.php';

//if ($code =="LB"){

$url = "https://www.m1m1.xyz/offers/offertoro.php?user=".$user;
//echo file_get_contents($url);

//}else{
?>
<iframe src="https://www.offertoro.com/ifr/show/22813/<?php  echo $user;  ?>/12608" frameborder="0" width="860" height="2400" ></iframe> 
<?php

//}
?>