
<?php

$user =$_GET['user'];
$url = "https://www.m1m1.xyz/offers/offertoro.php?user=".$user;
//$url ="https://www.offertoro.com/ifr/show/22813/".$user ."/11822";
//echo file_get_contents($url);
?>


<iframe src="https://www.offertoro.com/ifr/show/22813/<?php echo $user; ?>/11822" frameborder="0" width="100%" height="100%" ></iframe> 


