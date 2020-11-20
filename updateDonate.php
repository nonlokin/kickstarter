<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$text_zaprosa = "SELECT * FROM posts WHERE id='{$_GET['id']}'";
	$zapros = mysqli_query($connect, $text_zaprosa);
	$stroka=$zapros->fetch_assoc();
	$summa = $stroka["donated"] + 10;
	$zapros2 = "UPDATE posts
	SET donated = '$summa' WHERE id = '{$_GET['id']}'";
	$zapros3 = mysqli_query($connect, $zapros2);
	header("location: index.php")
?>
