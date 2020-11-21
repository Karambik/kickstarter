<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
	mysqli_query($con, "UPDATE posts SET title = {$_GET['title1']}, decription = {$_GET['description1']}, goal = {$_GET['goal1']},
		donated = {$_GET['donated1']}, img = {$_GET['img1']}, user = {$_GET['user1']}, place = {$_GET['place1']}
	 WHERE id='{$_GET['id1']}'");
	
	header("Location: acc.php");
 ?>