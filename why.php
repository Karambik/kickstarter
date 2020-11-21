<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	<div class="mx-auto col-2">
		<?php 
			$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
			$query = mysqli_query($con, "SELECT * FROM posts WHERE id = {$_GET['id']}");
			$stroka = $query->fetch_assoc();
		 ?>
	<form method="GET" action="new.php">
		<input style="width: 400px; display: none" type="" name="id1" placeholder="" value="<?php echo $stroka['id'] ?>">
		<input style="width: 400px" type="" name="title1" placeholder="title" value="<?php echo $stroka['title'] ?>">
		<input style="width: 400px" type="" name="description1" placeholder="description" value="<?php echo $stroka['decription'] ?>">
		<input style="width: 400px" type="" name="goal1" placeholder="goal" value="<?php echo $stroka['goal'] ?>">
		<input style="display: none" type="" name="donated1" placeholder="donated" value="<?php echo $storka['donated'] ?>">
		<input style="width: 400px" type="" name="img1" placeholder="img" value="<?php echo $stroka['img'] ?>">
		<input style="width: 400px" type="" name="user1" placeholder="user" value="<?php echo $stroka['user'] ?>">
		<input style="width: 400px" type="" name="place1" placeholder="place" value="<?php echo $stroka['place'] ?>">
		<button class="btn btn-success">Update</button>

	</form>
</div>
</body>
</html>