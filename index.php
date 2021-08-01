
<?php

$user =$_GET['user'];



$url = "https://www.m1m1.xyz/offers/offertoro.php?user=".$user;


Redirect($url,false);
 function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}





?>
