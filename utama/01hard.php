<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="images/HJ.png">
<head>
	<title>INFORMATIKA UNTAD 2016</title>
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
			<br>
			<h2><center>Digeber, Prosesor Intel Core i7 7700K Tembus Kecepatan Hingga 7 GHz!!</center></h2>
                        <a target="_blank" href="https://www.bestchange.com/" onclick="this.href='https://www.bestchange.com/?p=159066'">E-currency exchanger</a>
			<br>
			<center><img src="images/intel-core-i7-1.jpg"></center>
			<br>
			&emsp;&emsp;&emsp;Intel dengan prosesor generasi ketujuh buatannya memang belum dirilis hingga saat ini. Banyak para konsumen yang sudah tidak sabar ingin dapat segera mencicipi prosesor dengan kode penamaan Kaby Lake ini karena kabarnya membawa peningkatan sekitar 15 hingga 20% dari seri sebelumnya.
			Namun kita tahu bahwa prosesor generasi ini sudah ada di tangan beberapa kalangan, seperti salah satunya adalah kalangan overclocker. Di sisi lain, nampaknya salah satu varian prosesor Intel Kaby Lake bakal menjadi andalan para overclocker di dunia. Pasalnya baru-baru ini tercatat rekor bahwa varian Core i7 7700K dapat menyentuh kecepatan hingga 7 GHz! Seperti yang kami lansir dari TechPowerUp, adalah Allen Splave Golibersuch, overclocker profesional yang mendapatkan sampel dan memperoleh kesempatan untuk menggeber Intel Core i7 7700K dengan kecepatan 7 GHz tersebut.
			<br>
			<br> 
			<center><img src="images/core-i7-7700K-7ghz.jpg"></center>
			<br>
			<br>
			&emsp;&emsp;&emsp;Untuk mencapai kecepatan fantastis tersebut perlu dicatat bahwa Splave menonaktifkan beberapa konfigurasi seperti Hyper Threading dan mematikan kedua core dan thread yang terdapat pada prosesor tersebut. Sehingga prosesor tersebut hanya memiliki dua buah core aktif saja saat dipacu hingga kecepatan 7022,96 MHz. 
			<br>
			<br>
			&emsp;&emsp;&emsp;Splave menyandingkan dengan beberapa komponen papan atas lainnya, seperti penggunaan motherboard AsRock Z170 OC Formula. Dalam memperoleh kecepatan 7 GHz, pengaturan multiplier-nya sebanyak 69 kali, base clock diatur pada 101,78 MHz, serta voltase diatur hingga 2,00 V. 
			<br>
			<br> 
			<center><img src="images/Intel-corei7-7700k-cpu.jpg"></center>
			<br>
			<br>
			&emsp;&emsp;&emsp;Mengingat masih menggunakan motherboard seri lawas, nampaknya masih ada ruang terbuka untuk mencapai angka yang lebih tinggi lagi. Untuk mencapai kecepatan tinggi, kemungkinan pada motherboard seri Z270 nanti adalah hal mudah, tanpa mematikan satupun core yang terdapat pada prosesor ini. 
			<br>
			<br>
			<div class="sumber">(Sumber : BeritaTeknologi.com) </div>
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
			&copy; CopyRight By ADYATMA LAKATJINDA F55116001  & MUH. SANDI TRIWANTO F55116049 ||  All Right Reserved
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
	