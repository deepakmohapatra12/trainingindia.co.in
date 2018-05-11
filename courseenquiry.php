<?php
session_start();
$n = $_POST['fname'];
$e = $_POST['email'];
$co = $_POST['cor'];
$l = $_POST['loc'];
$mes = $_POST['msg'];
include("dbconfig.php");
$sql = "insert into courseenquiry(name,email,course,location,message) values('$n','$e','$co','$l','$mes')";
$status = mysqli_query($conn,$sql);
echo "<h3>Data saved successfully we will call you back soon</h3>";
?>