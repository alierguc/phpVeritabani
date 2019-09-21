<?php 
	
	$host = "127.0.0.1";
	$username = "root";
	$database = "db_deneme";
	$password = null;

if(isset($_POST["kullaniciAdi"])!= "")
{
	try {
			$con = new PDO("mysql:host=$host;dbname=$database;charset=utf8",$username,$password);
			$sorgu = $con->prepare("insert into tb_deneme(username,password) values(?,?)");
			$sorgu->execute(array($_POST["kullaniciAdi"],$_POST["sifre"]));
		 	if($sorgu->rowCount())
		 	{
		 		echo("veri kaydedildi");

		 	}


	} catch (Exception $e) {
		
	}


}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Veri tabanı Denemesi</title>
 	<meta charset="utf-8">
 </head>
 <body>
 <form action="index.php" method="POST">
 	<input style="float: right;" type="text" name="kullaniciAdi">
 	<input type="password" name="sifre">
 	<input type="submit" name="">
 </form>
 </body>
 </html>
