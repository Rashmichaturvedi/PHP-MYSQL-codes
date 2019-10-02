<?php
$name=$_FILES["myfile"]["name"];
$type=$_FILES["myfile"]["type"];
$size=$_FILES["myfile"]["size"];
$temp=$_FILES["myfile"]["tmp_name"];
$error=$_FILES["myfile"]["error"];
if($error>0)
	die("error uploaded  file $error");
else
{
	if($type="image/PNG")
	{
	die("that format is not allowed");}
	else{
		move_uploaded_file($temp,"uploaded/",$name);
		echo"upload success";
	}
}
?>