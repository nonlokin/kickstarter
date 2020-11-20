<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
</head>
<body>
<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "kickstarter");
	$text_zaprosa = "SELECT * FROM posts";
	$zapros = mysqli_query($connect, $text_zaprosa);
?>	
<div class="col-12">
	<div class="row">
		<div class="col-2 pt-3">
			<a href="" class="text-dark ml-3">Explore</a>
			<a href="" class="text-dark ml-3">Start a project</a>
			<a href="acc.php" class="text-dark ml-3">Личный кабинет</a>
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
	<h4 class="">Explore <span class="text-success font-weight-bold"><!--Вывести количество проектов--></span></h4>
	<p></p>
	<div class="row mt-5">

		<!--Вывести сами проекты здесь-->
		<?php
			for($i=0;$i<$zapros->num_rows;$i++){
				$stroka = $zapros->fetch_assoc();
			
		?>
		<!--див с игрой-->
		<div class="border ml-2" style="width:500px;">
			<!--картинка-->
			<img src="<?php echo $stroka["img"]?>" class="w-100">
			<!--заголвоок-->
			<p class="font-weight-light mt-2" style="font-size:20px;"><?php echo $stroka["title"]?></p>
			<!--description-->
			<p><?php echo $stroka["description"]?></p>
			<!--user-->
			<p>by <?php echo $stroka["user"]?></p>
			<!--place-->
			<p><?php echo $stroka["place"]?></p>
			<!--goal-->
			<p>goal <?php echo $stroka["goal"]?></p>
			<!--donated-->
			<p class="text-success">pledged $<?php echo $stroka["donated"]?></p>
			<form action="updateDonate.php" method="GET">
				<button href="updateDonate.php" class="btn bg-success text-white">Back this project +10$</button>
				<input type="hidden" name="id" value="<?php echo $stroka["id"]?>">
			</form>	
		</div>
		<?php
			}
		?>
	</div>

</div>
</body>
</html>