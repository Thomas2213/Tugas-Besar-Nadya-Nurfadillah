<?php 
session_start();
  if (!isset($_SESSION['login'])) {
    header("location: register.php");
    exit;  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>add new articel</title>
</head>
<body>
	<br><br>
 	<form method="POST" action="actioncreat.php">
 		<input type="hidden" name="waktu">
 		Judul film: 
		<input type="text" name="judul" placeholder="Judul">
		<br>
		<br>
		komentar	:
		<textarea name="komentar" placeholder="Text Artikel"> </textarea>
		<br><br>
		<input type="submit" name="submit">
 	</form>
</body>
</html>