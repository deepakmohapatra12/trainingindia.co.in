<?php
   include("config.php");
	$metaid = $_POST['rowid'];
	 $sql ="delete from tmeta  WHERE id='$metaid'";
	mysqli_query($conn,$sql);
mysqli_query("delete from keywordrank where metaid='$metaid'");
echo "Meta Updated Successfully ";
	
	
?>