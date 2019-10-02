<?php
echo "<h1> <u> Register </u></h1>";

$submit = $_POST['submit'];
$fullname  = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$repeatpassword = $_POST['repeatpassword'];
$date  = date("y-m-d");
if($submit)
{
	echo"$fullname <br> $username<br> $password <br> $repeatpassword";
}
else {
	die("not yet connected");
	
}
?>
<html>
<form action="Register.php"   method='POST'>

<table align ="Center">
<tr><td>Enter Full Name:</td>
<td><input type='text' name='fullname'></td>
</tr>
<tr><td>User Name:</td>
<td><input type='text' name='username'></td>
</tr>
<tr><td>Password:</td>
<td><input type='password' name='password'></td>
</tr>
<tr><td>Repeat Password:</td>
<td><input type='password' name='repeatpassword'></td>
</tr>
</table>
<p>
<input type='submit' name='submit'   value='Register'/>
</p>
</form>
</html>

