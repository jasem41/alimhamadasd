
<?php

$user =$_GET['user'];
$url = "https://www.m1m1.xyz/offers/adgem.php?user=".$user;

include 'code.php';
echo $code."ass";

if ($code =="US" ||
$code =="CA"||
$code =="FR"||
$code =="NL"){


echo file_get_contents($url);

}else{
?>

دولتك محظورة 
الرجاء ,تشغيل الفي بي ان
على احدى الدول :
فرنسا
هولندا
امريكا
كندا
<?php

}
?>

