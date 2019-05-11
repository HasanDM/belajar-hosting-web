<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="images/HJ.png">
<head>
	<title>TUBES WEB</title>
	<?php
	require_once('db.php');
	?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src= "js/bootstrap.js"></script>
	<script type="text/javascript" src= "js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<font color="#000000">
</head>
<body>
	<div class="wrap">
		<div class="header">			
			<div class="image"><a href="index.html"></a><img src="images/HJ.png"></div>
			<div class="headertulis"><h3><center><font color="white">PORTAL TEKNOLOGI MASA KINI</font></center></h3></div>
		</div>
		<a id="resp-menu" class="responsive-menu" href="#"></i> Menu</a>
   <ul class="menu">
   <li><a class="homer" href="index.php"></i> HOME</a>
   </li>
  <li><a  href="profil.html"></i>PROFILE</a></li>
    <li><a  href="#"></i>KATEGORI</a>
  <ul class="sub-menu">
   <li><a href="hardware.html">Hardware</a></li>
   <li><a href="software.html">Software</a>
   </li>
   </ul>
  </li>
  <li><a  href="tentang.html"></i>TENTANG</a></li>
  <li><a  href="http://16informatics.16mb.com"></i>KELUAR</a></li>
  </ul>
  </nav>
		<div class="badan">			
			<div class="content">
			<br>
			<h2><center>Snapchat Perkenalkan Fitur Baru, Bukti Kreatif yang Tak Sekadar 'Meniru'</center></h2>
			<br>
			<center><img src="images/new-world-lenses-snapchat.jpg"></center>
			<br>
			&emsp;&emsp;&emsp;Snapchat memang diterpa banyak godaan. Selain karena para pesaingnya (terutama Instagram) sering menjiplak fitur-fitur yang mereka buat, pengguna aplikasi yang diluncurkan pada tahun 2011 ini pun tak mempunyai pengguna sebanyak para pesaingnya. Tetapi sepertinya semua itu tak menjadi alasan Snapchat untuk berhenti berkreasi. Terbukti, mereka justru mengeluarkan fitur-fitur terbaru. Beberapa di antaranya adalah fitur berulang no limit, yang akan menantang fitur Boomerang di Instagram, fitur magic-eraser, dan fitur AR Augmented Reality yang lebih elegan di World Lenses. Fitur no limit bisa diatur pengguna yang membuat Snap, agar video bisa terus berulang sampai pemirsa siap berpindah ke Snap lain. Sedangkan fitur magic-eraser, digunakan untuk menghilangkan aspek-aspek “mengganjal” dalam foto secara cepat.
			<br>
			<br>
			<center><img src="images/magic-eraser-snapchat.jpg"></center>
			<br>
			&emsp;&emsp;&emsp;Ada pula fitur baru dari World Lenses. Fitur yang menurut para pengguna menjadi fitur yang paling favorit ini, kini mempunyai kemampuan untuk membuat tulisan 3D yang seakan berada di dunia nyata. Berikut ini videonya: Fitur-fitur terbaru dari Snapchat ini bisa dijalankan di iOS ataupun Android. Sahabat tinggal mengupdate aplikasinya saja bila telah tersedia dalam beberapa waktu lagi.
			<br>
			<br>
			<div class="sumber">(Sumber : BeritaTeknologi.com) </div>
			<br>
			<br>
			<br>
			<br>
			<br>
<div class="container">
	<div class="col-md-6-col-md-offset-3">
		<div class="row">
			<h1>Komentar</h1>
		</div>
		<div class="row">
			<h4>Silahkan Tinggalkan Komentar Anda Tentang Website Ini... </h4>
			<form>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" required="required">
				</div>
				<div class="form-group">
					<label for="handphone">No. HandPhone</label>
					<input type="text" class="form-control" name="handphone" required="required">
				</div>
				<div class="form-group">
					<label for="komentar">Komentar</label>
					<textarea class="form-control" name="komentar" required="required"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" id="simpan">Simpan</button>
					<br>
					<br>
					<br>
					<br>
					<ul class="list-group" id="list-komentar"></ul>
					<br>
					<br>
					<br>
				</div>
			</form>
		</div>
	</div>
</div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="footer"><center>
			&copy; CopyRight By HASAN F55117103  ||  All Right Reserved
		</center></div>
	</div>
</body>


	<script type="text/javascript">
	function loadkomentar() 
	{   
		$.get("getkomentar.php", function(data, status){ 
			$("#list-komentar").html(data);
		});     
		$("input[name=nama]").val('');   
		$("input[name=handphone]").val('');   
		$("textarea[name=komentar]").val('');  
	}; 
	function deletekomentar(id)
	{
		if(confirm("Menghapus data?")){
			$.post("deletekomentar.php",{
				id : id
			},
			function(data,status){
				alert(data);
				loadkomentar();
			});
		}
		return false;
	}
	$(document).ready(function(){
		loadkomentar();
	});
	$(document).ready(function(){
		$("form").submit(function(event){
			$.post("savekomentar.php",{
				nama : $("input[name=nama]").val(),
				handphone : $("input[name=handphone]").val(),
				komentar : $("textarea[name=komentar]").val()
			},
			function(data,status){
				alert(data);
				loadkomentar();
			});
			return false;
		});
	});
</script>
</html>
