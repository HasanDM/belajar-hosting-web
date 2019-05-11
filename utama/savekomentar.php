<?php 
$host = 'mysql.idhostinger.com';
$user = 'u530529939_root';
$pass = 'informatika$$';
$db = 'u530529939_tubes';
$handphone = $_POST['handphone'];
$nama = $_POST['nama'];
$komentar = $_POST['komentar'];
try{
	$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = 'INSERT INTO komentar (handphone,nama,komentar) VALUES (:handphone,:nama,:komentar);';
	$conn->prepare($sql)->execute([ 
		':handphone'=>$handphone,
		':nama'=>$nama,
		':komentar'=>$komentar
	]);
	echo "Komentar Telah tersimpan";
	}
	catch(PDOException $e)
	{
		echo "Tampilan gagal" .$e->getMessage();
	}
 ?>		