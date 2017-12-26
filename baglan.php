<?php
$mysql_hostname = "localhost"; // db'nin buludu�u adres
$mysql_user = "vhrnlzcl_musteri"; // db kullan�c� ad�
$mysql_password = "seyda1234@"; // db �ifresi
$mysql_database = "vhrnlzcl_musteri"; // db ad� 
$bd = @mysql_connect($mysql_hostname, $mysql_user, $mysql_password)
or die("size daha iyi hizmet verebilmek i�in bak�m �al��mas� yapmaktay�z.");
mysql_select_db($mysql_database, $bd) or die("size daha iyi hizmet verebilmek i�in bak�m �al��mas� yapmaktay�z.");
?>
