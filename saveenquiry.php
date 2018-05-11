<?php

session_start();


$n = $_POST['name'];
$e = $_POST['email'];
$sub = $_POST['sub'];
$mes = $_POST['message'];


include("dbconfig.php");

$sql = "insert into enquiry (name,email,subject,message) values('$n','$e','$sub','$mes')";

$status = mysqli_query($conn,$sql);


echo "<h3>Data saved successfully we will call you back soon</h3>";

?>