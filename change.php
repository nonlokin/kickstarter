<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$text_zaprosa = "SELECT * FROM posts WHERE user='Vlad'";
	$zapros = mysqli_query($connect, $text_zaprosa);
?>
		<?php

				$stroka = $zapros->fetch_assoc();

		?>	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>

		</div>
		<div class="col-8 text-center">
			<img src="logo.png" class="w-25">
			<p>#BlackLivesMatter</p>
		</div>
		<div class="col-2 text-left pt-3">
			<a href="" > <i class="fa fa-search"></i> Search</a>
			<a href=""><img src="lk.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="col-10 mx-auto">
	<form action="update.php" method="GET">
		<input value="<?php echo $_GET["title"]?>" type="" name="title" class="form-control mx-auto" style="width:600px;">
		<input value="<?php echo $_GET["description"]?>" type="" name="description" class="form-control mt-2 mx-auto" style="width:600px;">
		<input type="hidden" name="id" class="col-4 form-control mt-2" value="<?php echo $_GET["id"]?>" style="border:0">
		<button class="btn bg-success text-white mt-2" style="margin-left:740px;">Изменить</button>
	</form>



</div>
</body>
</html>