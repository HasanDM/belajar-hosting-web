<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="images/HJ.png">
<head>
	<title>TUBES WEB</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src= "js/bootstrap.js"></script>
	<script type="text/javascript" src= "js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<font color="#000000">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}

.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="header">			
			<div class="image"><img src="images/HJ.png"></div>
			<div class="headertulis"><h3><center><font color="white">PORTAL TEKNOLOGI MASA KINI</font></center></h3></div>
		</div>
		<a id="resp-menu" class="responsive-menu" href="#"></i> Menu</a>
   <ul class="menu">
   <li><a class="homer" href="index.html"></i> HOME</a>
   </li>
  <li><a  href="profil.html"></i>PROFILE</a></li>
    <li><a  href="#"></i>KATEGORI</a>
  <ul class="sub-menu">
   <li><a href="hardware.html">Hardware</a></li>
   <li><a href="software.html">Software</a>
   </li>
   </ul>
  </li>
  <li><a  href="tentang.html"></i>LAPORAN</a></li>
  <li><a  href="http://16informatics.16mb.com"></i>KELUAR</a></li>
  </ul>
  </nav>
		<div class="badan">			
		<div class="content">
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/cat/intel-core-i7-1.jpg" style="width:100%" onclick="window.open('01hard.php', '_blank');" /> 
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/cat/Asus-Radeon-RX-580-Dual-Series-000.jpg" style="width:100%" onclick="window.open('02hard.php', '_blank');" />
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/cat/windows-10-macam-macam.jpg" style="width:100%" onclick="window.open('04soft.php', '_blank');" />
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 3</div>
  <img src="images/cat/new-world-lenses-snapchat.jpg" style="width:100%" onclick="window.open('03soft.php', '_blank');" />
  <div class="text"></div>
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
		</div>
		</div>
		<div class="clear"></div>
		<div class="footer"><center>
		&copy; CopyRight By HASAN F55117103 ||  All Right Reserved
		</center></div>
	</div>
</body>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2600);
}
</script>

</html>
