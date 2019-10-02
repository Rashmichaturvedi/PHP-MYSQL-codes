<?php

session_start();
$user = $_SESSION['username'];

if ($user)
{
	//user logged in
	if ($_POST['submit'])
	{
	//start changing password
	$oldpassword = $_POST['oldpassword'];
	$newpassword = $_POST['newpassword'];
	$repeatnewpassword = $_POST['repeatnewpassword'];
	echo "$oldpassword/$newpassword/$repeatnewpassword";
	}
	else
	{
	echo"
	<form action='' method='POST'>
	Old password: <input type='text' name='oldpassword'><p>
	New password: <input type='password' name='onewpassword'><br>
	Repeat New password: <input type='password' name='repeatnewpassword'><p>
	<input type='submit' name='submit' value='change password'>
	</form>
	
	";
	}
}
else
die("You must be logged in in to change your password");


?>