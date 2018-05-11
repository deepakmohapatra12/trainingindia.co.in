<?php
include("config.php");
$rank=$_POST['rank'];
$rankid=$_POST['rankid'];
$res = mysqli_query("select * from keywordrank  where id='$rankid'");
$row = mysqli_fetch_array($res);
$oldrank = $row['rank'];
$sql="update keywordrank set rank='$rank', oldrank='$oldrank' where id='$rankid'";
mysqli_query($conn,$sql);	
echo $oldrank;
?>