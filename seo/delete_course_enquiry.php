<?php
	session_start();
	include("config.php");
	
	$delid = $_REQUEST['id'];
	
	$sql = "delete from courseenquiry where id='$delid'";
	
	mysqli_query($conn,$sql);
	
	$_SESSION['msg'] = "Data Deleted Successfully";
	
	header("Location:courseenquirylist.php");
?>