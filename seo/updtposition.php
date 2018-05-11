<?php
include("config.php");
$position=$_POST['position'];
$positionid=$_POST['positionid'];
$sql="update keywordrank set position='$position' WHERE id='$positionid'";
mysqli_query($conn,$sql);	
echo "1";
?>