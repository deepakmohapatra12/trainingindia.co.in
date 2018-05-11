<?php
include("config.php");
//$page=mysql_real_escape_string(trim($_POST['page']));
$pagename=mysqli_real_escape_string(trim($_POST['pagename']));
$description=mysqli_real_escape_string(trim($_POST['description']));
$title=$_POST['title'];
$keyword=mysqli_real_escape_string(trim($_POST['keyword']));
$user=$_POST['user'];

 $sql="insert into meta(pagename, description, title, keyword, createdby) values 
          ('$pagename', '$description','$title', '$keyword','$user')";
$totalkey = $title.",".$keyword;

mysqli_query($conn,$sql);
$metaid = mysqli_insert_id();
$userid = $user;
$url = $pagename;
$keyarray = explode(",",$totalkey);
$kword='';
for($i=0; $i<count($keyarray); $i++){
	$kword=$keyarray[$i];
	$sql2="INSERT INTO keywordrank (userid, metaid, url, keyword,rank) VALUES ('$userid', '$metaid','$url','$kword','10')";
 mysqli_query($conn,$sql2);
}
header('Location: taglist.php');	
	  
?>
