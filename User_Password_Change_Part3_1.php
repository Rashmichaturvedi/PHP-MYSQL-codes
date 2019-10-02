<?php
session_start();
$user = $_SESSION['username'];

if ($user)
{
	//user logged in
	if ($_POST['submit'])
	{
		//start changing password
		$oldpassword = md5($_POST['oldpassword']);
		$newpassword = md5($_POST['newpassword']);
		$repeatnewpassword = md5($_POST['repeatnewpassword']);
		//check password against db
		
		//connect db
		$connect=mysqli_connect("localhost", "root", "");
		mysqli_select_db($connect,"people") or die();
		$queryget = mysqli_query($connect,"SELECT password FROM login WHERE username='$user' ") or ("Query didnt work");
		$row = mysql_fetch_assoc($queryget);
		
		$oldpassworddb = $row['password'];
		echo $oldpassworddb."<br>";
		echo $oldpassword."<br>";
		//check password
		if ($oldpassword==$oldpassworddb)
		
		  {
		   //check two new password
			        if ($newpassword==$repeatnewpassword)
				   {
 						//success
						$querychange = mysql_query($connect,"
						
						UPDATE login SET password='$newpassword' WHERE username='$user'
						
						");
						die("Your password has been changed. <a href=''>Return</a> to the main page");
				   }
			       //else	
					die("New password don't match!");
				   }
	 
		else
		die("Old password doesnt match!");
			
			//echo "$oldpassword/$newpassword/$repeatnewpassword";
	}
	else
	{
	echo"<form action='' method='POST'>
	Old password: <input type='text' name='oldpassword'><p>
	New password: <input type='password' name='onewpassword'><br>
	Repeat New password: <input type='password' name='repeatnewpassword'><p>
	<input type='submit' name='submit' value='submit'>
	</form>
	
	";
	}
}
else
die("You must be logged in in to change your password");
?>