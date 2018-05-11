<?php
	session_start();
	include("config.php");
	$metaid = $_POST['metaid'];
	$pagename=mysqli_real_escape_string(trim($_POST['pagename']));
	$description=mysqli_real_escape_string(trim($_POST['description']));
	$title=$_POST['title'];
	$keyword=mysqli_real_escape_string(trim($_POST['keyword']));
	$user=$_POST['user'];
	
	$sql ="UPDATE meta 
		   SET 
		   courseurl='".addslashes($pagename)."',
		   title='".addslashes($title)."',
		   keyword='".addslashes($keyword)."',
           description='".addslashes($description)."',
		   createdby = '$user',
		   updateddate='".date('d-m-Y')."'
           WHERE id='$metaid'";
	mysqli_query($conn,$sql);
	
	$totalkey = $title.",".$keyword;
$userid = $user;
$url = $pagename;
$keyarray = explode(",",$totalkey);
$kword='';
mysqli_query("delete from keywordrank where metaid='$metaid'");
for($i=0; $i<count($keyarray); $i++){
	//insert keywordrank
	$kword=$keyarray[$i];
	$sql2="INSERT INTO keywordrank (userid, metaid, url, keyword,rank) VALUES ('$userid', '$metaid','$url','$kword','10')";
 mysqli_query($conn,$sql2);
}
	$_SESSION['METAMESSAGE'] = "<font color='red'> Meta Updated Successfully !</font>"; 
echo "<script> window.location.href='editmeta.php?id=$metaid'</script>";
	
	
?>