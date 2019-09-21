<?php 

$host = "127.0.0.1";
$db_adi = "db_deneme";
$k_adi = "root";
$pass = "";

try {
	$db = new PDO("mysql:host=$host;dbname=$db_adi;charset=utf8",$k_adi,$pass);
} catch (PDOException $e) {
	echo $e->getMessage();
}


 ?>