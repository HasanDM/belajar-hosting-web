<?php 
$host = 'mysql.idhostinger.com';
$user = 'u530529939_root';
$pass = 'informatika$$';
$db = 'u530529939_tubes';
try{
	$conn = new PDO("mysql:host=$host;charset=utf8",$user,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("CREATE DATABASE IF NOT EXISTS $db");
	$createTable = "CREATE TABLE IF NOT EXISTS $db.komentar (id int(11) AUTO_INCREMENT PRIMARY KEY, handphone VARCHAR(255) NOT NULL UNIQUE, nama VARCHAR(255) NOT NULL, komentar TEXT NOT NULL);";
	$conn->exec($createTable);
}
catch(PDOException $e)
{
	echo "Pembuatan basis data gagal". $e->$getMessages();
}
 ?>

