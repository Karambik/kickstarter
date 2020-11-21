<?php 	
	$con = mysqli_connect('127.0.0.1', 'root','','kickstarter');
	mysqli_query($con, "UPDATE posts SET donated = donated + 10 WHERE id='{$_GET['id']}'");
	
	header("Location: index (1).php");
 ?>