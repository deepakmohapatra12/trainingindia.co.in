<?php
ob_start();
session_start();
include ("config.php");

$password=$_POST['password'];
$login=$_POST['username'];

    $qry="SELECT * FROM adminuser WHERE email ='$login' AND password ='".md5($password) ."'";


$result=mysqli_query($conn,$qry);

if(mysqli_num_rows($result)>0) {
	//session_start();
	$member=mysqli_fetch_array($result);
	$_SESSION['username']=$member['username']; 
	$_SESSION['userid']= $member['userid'];


             header("Location: welcome.php");

        }
	else
	{  $_SESSION["loginFlag"] = '0';
        $_SESSION['MSG']="<font color='red'>Invalid Email ID</font>";
             header("Location: index.php");
	
	}



?>

