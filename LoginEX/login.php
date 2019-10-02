<?php
Session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);
if($username && $password)
{
$connect = mysqli_connect("localhost" ,"root" ,"") or die ("couldn't find data");
mysqli_select_db($connect,"people" ) or die ("couldn.t find data");
$query = mysqli_query($connect,"SELECT * FROM 
         login WHERE username='$username'");


$numrows = mysqli_num_rows($query);

if($numrows != 0 ){
	while($row = mysqli_fetch_assoc($query))
	{
		$dbusername = $row['username'];
		$dbpassword = $row['password'];
	}
	if($username==$dusername&&$password==$dpassword)
{
echo"you are in 
<a href = 'member.php'> click </a> here to ";
$_SESSION["username"]=$dusername;

}
else 
	echo "Incorrect password or username";
} else die ("user doesnot exist");
echo $numrows;

}
else die("please enter name and password");
?>
