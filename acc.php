<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
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
			<a href=""><img src="ik.png" class="rounded-circle" ></a>

		</div>
	</div>
</div>
<div class="mx-auto col-9">
	<form method="GET" action="insert.php">
		<input type="" name="title" placeholder="title">
		<input type="" name="description" placeholder="description">
		<input type="" name="goal" placeholder="goal">
		<input style="display: none" type="" name="donated" placeholder="donated" value=0>
		<input type="" name="img" placeholder="img">
		<input type="" name="user" placeholder="user">
		<input type="" name="place" placeholder="place">
		<button class="btn btn-success">Add new project</button>

	</form>
</div>
<div class="col-10 mx-auto">
	<a href="index (1).php">Back to the main</a>
	<h4 class="">My projects <span class="text-success font-weight-bold"></span></h4>
	<p></p>
	<div class="row mt-5">
		<?php 
		$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
		$query = mysqli_query($con, "SELECT * FROM posts WHERE user = 'myself'");
		$num = mysqli_num_rows($query);
		for ($i=0; $i < $num ; $i++) { 
			$stroka = $query->fetch_assoc()
		 ?>
		 		 <div class="col-4">
		 			<div class="col-10" style="background-image: url(<?php  echo $stroka['img']  ?>); background-size: cover; background-position: center;
		 		 	height: 400px">
		 				
		 			</div>
		 			<div>
		 				<h1><?php echo $stroka['title'];  ?></h1>
		 				<p><?php echo $stroka['decription']?></p>
		 			</div>
		 			<div>
		 				<p><?php echo $stroka['place']; ?></p>
		 			</div>
		 			<div>
		 				<h1><?php echo $stroka['goal'];  ?>$ goal</h1>
		 				<h2><?php echo $stroka['donated']; ?>$ pledget</h2>
		 			</div>
		 			<form action="update.php" method="GET">
		 				<input style="display: none" type="" name="id" value="<?php echo $stroka['id'] ?>">
		 				<button class="btn btn-success">back this project 10$+</button>
		 			</form>
		 			<form action="delete.php" method="GET">
		 				<input style="display: none" type="" name="id" value="<?php echo $stroka['id'] ?>" >
		 				<button class="btn btn-danger">Delete this project</button>
		 			</form>
		 			<form action="why.php">
		 				<input style="display: none" type="" name="id" value="<?php echo $stroka['id'] ?>" >
		 				<button class="btn btn-info">Update this project</button>
		 			</form>
				 </div>
		<?php 
			}
		 ?>
	</div>

</div>
</body>
</html>