<?php 
$host = 'mysql.idhostinger.com';
$user = 'u530529939_root';
$pass = 'informatika$$';
$db = 'u530529939_tubes';
try{
	$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8",$user,$pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$rows = $conn->query('SELECT * FROM komentar ORDER BY handphone ASC');
	$show = '';
	while ($row = $rows->fetch(PDO::FETCH_OBJ)) {
		$show .= '<li class="list-group-item">'.$row->nama.'<p style="display:inline" class="pull-right">'.$row->komentar.'<span id='.$row->id.' onclick="deletekomentar(this.id)""></p></li>';
	}
	$show .='';

	echo $show;
	}
	catch(PDOException $e)
	{
		echo "Tampilan gagal" . $e->getMessage();
	}
 ?>