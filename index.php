<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="images/HJ.png">
<head>
 <meta charset="UTF-8">
  <title>INFORMATIKA UNTAD 2016</title>
  <link rel='stylesheet prefetch' href='css/bootstraplogin.css'>
  <link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
<?php
session_start();
$username = 'admin';
$password = 'admin';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password){
        //Membuat Session
        $_SESSION["username"] = $username; 
        header("Location: utama/index.php");
    } else {
        // Tampilkan Pesan Error
        echo '<script type="text/javascript">alert("Username Dan Password Salah!!!");</script>';
        display_login_form();

    }
}    
else { 
    display_login_form();
}
function display_login_form(){ ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
    <div class="container main">
    <div class="row">
    <div class="col-md-6 col-md-offset-3 form">
    <h1>ADYATMA LAKATJINDA F55116001 & MUH. SANDI TRIWANTO F55116049</h1>
      <div class="bar"></div>
      </div>
      </div>
<a target="_blank" href="https://www.bestchange.com/" onclick="this.href='https://www.bestchange.com/?p=159066'">xxx</a>
    <h3>Silahkan Masuk Untuk Melanjutkan..!!!   (Nama : admin... Sandi: admin)</h3>
    <input class="input" type="text" name="username" id= "username" placeholder="Nama"/><br/>
    <input class="input" type="password" name="password" id="password" placeholder="Kata Sandi"/>
    <input type="submit" name="submit" class="btn btn-default login" placeholder="Masuk"/>
    </form>    
<?php } ?>

</body>
</html>