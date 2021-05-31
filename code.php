<?php


$ip = $_SERVER['REMOTE_ADDR'];


$url5 ="http://ip-api.com/json/".$ip;

$ch = curl_init();

//setup curl options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_URL, $url5);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

//make request
$response = curl_exec($ch);

if($response === false) {
	//curl error occurred, handle it how you like
	echo curl_error($ch);
}

//close the curl object
curl_close($ch);


if($response !== false) {
	$json = json_decode($response, true);
	
$code =$json['countryCode'];


}


?>