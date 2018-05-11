<?php
include("config.php");
//$page=mysql_real_escape_string(trim($_POST['page']));
$title=$_POST['title'];
$desc=$_POST['desc'];
$photo=$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],'assets/blogimages/'.$photo);

$final = $_POST['title'];
$search = array('&','.','/',',',' ','  ');
$replace=array("-","-","-","-","-","-");
$result = str_replace($search, $replace, $final);
$result = str_replace("--", "-", $result);

$url = $result.'.html';



$sql="insert into blog(title,photo,description,seotitle) values ('$title','$photo','$desc','$url')";
$status = mysqli_query($conn,$sql);
echo "<h3>Data saved successfully we will call you back soon</h3>";
header('Location: newblog.php');	

?>

