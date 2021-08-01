<?php


$ip = $_SERVER['REMOTE_ADDR'];

echo $ip;

$url5 ="http://ip-api.com/json/".$ip;

$response =file_get_contents($url5);


	$json = json_decode($response, true);
	
$code =$json['countryCode'];


}


?>