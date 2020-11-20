<?php
    $connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$text_zaprosa_vstavit = "INSERT INTO posts (title, description, goal, img, place, user)
							VALUES ('{$_GET["title"]}', '{$_GET["description"]}', '{$_GET["goal"]}', '{$_GET["img"]}', '{$_GET["place"]}', '{$_GET["user"]}')";
	$zapros_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);
	header("Location: acc.php")
	?>