<?php
$host = 'mysql.idhostinger.com';
$user = 'u530529939_root';
$pass = 'informatika$$';
$db = 'u530529939_tubes';
$id=$_POST['id'];
try{
	$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = 'DELETE FROM komentar WHERE id = :id;';
	$conn->prepare($sql)->execute([
		':id'=>$id,
	]) ;
	echo "Komentar Telah terhapus";
	}
	catch(PDOExeception $e)
	{
		echo "Tampilan gagal" .$e->getMessage();
	}
 ?>