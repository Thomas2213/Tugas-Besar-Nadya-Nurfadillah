<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bioskop</title>

    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/icomoon.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="top-number">
                            <p><i class="fa fa-phone-square"></i>Enjoy!</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
				<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
<?php 
require 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
  $tampil = query ("SELECT * FROM blog");
  
//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    die("<H1><font color=red><U>LOGIIIN LAGIII</U> !!!!!</font></H1>");//jika belum login jangan lanjut

}
//cek level user
if($_SESSION['level']!="manager"){
  header('location:admin.php');
    // die("Anda bukan manager");
    //jika bukan admin jangan lanjut
}else{
  $username = $_SESSION['username']; 
  $level=$_SESSION['level'];
}
?>

<body style="background color:grey">

  <br>
  <br>

  <title>index</title>
<div align='center'>
  <font color=black>
  <h1 style="text-align: center; font-family: sans-serif; color: white;"><a>Selamat Datang user</a> <b><a><?php echo $username;?></b></a> <a href="berita.php"><b><u><font color=white>Logout</font></u></b></a>
  </font>
</div></h1> 
<!-- <?php

?>

<?php
// $result=mysqli_query($connect,'SELECT * FROM user');
// $row=mysqli_fetch_row($result);
// echo "$row[0] $row[1] $row[2] $row[3]";
?> -->
<CENTER>
<html>
<head>
	<title></title>
</head>
<body>
<h3> <a> Tambah Komentar</a></h3>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		<a> Judul film: </a>
		<input type="text" name="judul" placeholder="" required>
		<br>
		<br>
		<a> Komentar:</a>
		<textarea  name="komentar" rows="5"   placeholder="" required></textarea>
		<br><br>
		<a><input type="submit" name="submit"></a>
 	</form>
</body>
</html>

</center>

<center>
<br><br>
    <h1><a>LIST KOMENTAR</a></h1>
  <br><br>
  <table border=2   cellpadding="10" cellspacing="0" width="70%">
  <tr>
   
     <th> <a> NO </a> </th>
    <th><a> JUDUL FILM </a> </th>
    <th> <a>KOMENTAR</a></th>
    <th> <a>TERAKHIR UPDATE</a> </th>
    <th> <a>OPSI</a></th>
	
  </tr> 

<?php $i=1; ?>
<?php foreach ($tampil as $x ) : //foreach itu pengulangan pada array  ?> 
  <tr>
  
    <td><a><?= $i; ?></a></td>
    <td><a><?= $x["judul"] ?></a></td>
    <td><a><?= $x["komentar"];  ?></a></td>
    <td><a><?= $x["waktu"];  ?></a></td>
    <td>
      <center><button><a href="ubah.php?id=<?= $x["id"]?>">ubah</a></button><br><br>
    </td>
  </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>

<br>
<center>

<br>
<u> <a href="berita.php">Logout</a></u>
</center>
  </body>
</html>
