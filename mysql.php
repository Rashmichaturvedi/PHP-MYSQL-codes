<?php
require("Connect.php");
if($_POST['submit'])
{
	$firstname_form = $_POST['firstname'];
	$lastname_form  = $_POST['lastname'];
	
//$write=mysqli_query($connect,"INSERT  INTO people VALUES('','Alex','gen','1989-09-10','f')") or die("baderror");
//$update=mysqli_query($connect,"UPDATE people SET dob='1982-09-30' Where id='2'");
$extract = mysqli_query($connect,"SELECT *FROM people WHERE  firstname  = '$firstname_form  and lastname  = '$lastname_form'");
$numrows = mysqli_num_rows($extract);
while($row=mysqli_fetch_assoc($extract))
{
	$id  =  $row['id'];
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$dob = $row['dob'];
	$gender = $row['gender'];
	echo"$firstname $lastname was born on $dob and is $gender <br/>";
}
<html>
<form action='mysql.php' method = 'POST'>
firstname : <input type='text' name='firstname'></input>
lastname : <input type = 'text' name= 'lastname'></input>
<input type='submit' value='GetData'></input>
</form>
</html>
?>