<?php
include("config.php");
$value=$_POST['value'];
$rowid=$_POST['rowid'];
$sql="update meta set current='$value' where id='$rowid'";
mysqli_query($conn,$sql);	
echo "ok";
?>