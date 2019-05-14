
<body background="yaya.jpeg">

<?php 
	require 'koneksi.php';


	session_start();
	$judul = $_POST['judul'];
	$komentar = $_POST['komentar'];
	$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$judul','$komentar',null)");

		if ($tambah>0) {
			echo "<font color=white><h1>data berhasil ditambahkan<h1></font>";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'><font color=white><h2>disini</h2></font></a>";
			echo " <font color=white>untuk melihat hasil</font>";
		}
		else {
			echo "<font color=white>data gagal ditambahkan</font>";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>d<font color=white>isini</font></a>";


		}
	

 ?>
 </center>
 </body>