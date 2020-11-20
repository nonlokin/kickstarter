<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");	

	$text_zaprosa = "UPDATE posts
	SET description = '{$_GET["description"]}', title = '{$_GET["title"]}'
	WHERE id = {$_GET["id"]}";
	mysqli_query($connect, $text_zaprosa);
	header("Location: acc.php");
?>