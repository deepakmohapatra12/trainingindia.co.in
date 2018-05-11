<?php
	session_start();
	include("config.php");
	
	
	$sql = "truncate table usertrack";
	
	mysqli_query($conn,$sql);
	
	$_SESSION['msg'] = "Data Deleted Successfully";
	
	header("Location:usertracklist.php");
?>