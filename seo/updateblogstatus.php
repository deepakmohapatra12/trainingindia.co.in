<?php
include("config.php");
$sts=$_POST['sts'];
$blogid=$_POST['blogid'];
$sql="update blog set status='$sts' where id='$blogid'";
mysqli_query($conn,$sql);	
echo "Updated Successfully";
?>