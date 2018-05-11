<?php
	include("config.php");
	
	$blogid = $_POST['blogid'];
	
	$sql = "delete from blog where id='$blogid'";
	
	mysqli_query($conn,$sql);
	
	echo "Data Deleted Successfully";
	
?>