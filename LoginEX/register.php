<?php

echo"<h1> Register </h1>";
$submit = $_POST['submit'];
//data
$fullname = strip_tags($_POST['fullname']);
$username = strip_tags($_POST['username']);
$password = md5(strip_tags($_POST['password']));
$repeatpassword = md5(strip_tags($_POST['repeatpassword']));
$date = date("Y--m--d");

if($submit)
{ 
  if ($fullname&&$username && $password&&$repeatpassword)
  {
  }
  else
	  echo "Please fill in <br> all </br> fields";
	echo "$username/ $password /$repeatpassword  /$fullname";

}


?>
<html>
<form action='register.php' method ='POST'>
<table>
<tr> <td> Your full name </td><td> <input type='text' name='fullname'></td></tr>
<tr> <td> Your User name </td><td> <input type='text' name='username'></td></tr>
<tr> <td> Your Password </td><td> <input type='password' name='password'></td></tr>
<tr> <td> Repeat Your Password </td><td> <input type='password' name='repeatpassword'></td></tr>
</table>
<input type='submit' name='submit' value='Register'>
</form>
</html>
