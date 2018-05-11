<?php
include("config.php");
$userid=$_POST['userid'];
$rowid=$_POST['rowid'];
$sql=mysqli_query("update tmeta set createdby='$userid' where id='$rowid'");
$sql="update keywordrank set userid='$userid' where metaid='$rowid'";
mysqli_query($conn,$sql);	
echo "ok";
?>