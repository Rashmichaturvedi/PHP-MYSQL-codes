<?php
Session_start();
$user = $_SESSION['username'];
if($user){
	if($_POST['submit'])
	{  
        $oldpassword = md5($_POST['oldpassword']);
		$newpassword = md5($_POST['newpassword']);
		$repeatnewpassword = md5($_POST['repeatnewpassword']);
	$connect = mysqli_connect("localhost","root","") or die ("not connected");
      mysqli_select_db($connect,"people" ) or die ("couldn.t find data");
$queryget = mysqli_query($connect,"SELECT password FROM login
                      WHERE username='$user'") or die ("query dont work");



$row = mysqli_fetch_assoc($queryget);
$oldpassworddb = $row['password'];
echo $oldpassword."<br>";
echo $oldpassworddb. "<br>" ;



if ($oldpassword==$oldpassworddb){
     if ($newpassword==$repeatnewpassword){
echo "succes";
$querychange = mysqli_query($connect,"UPDATE login SET password = '$newpassword'
 WHERE username = '$user'");

die("password has changed  <a href ='Index.php' > return back </a>");
	 }
	 else die (" newpassword doesnt match");
}
else die ("old password doesnot match");
}


else {
	echo "<form action='changepassword.php' method='POST'>
		
		oldpassword : <input type='text' name = 'oldpassword'>
		<p>
		newpassword : <input type='password' name='newpassword'><br>
repeatnewPassword : <input type='password' name = 'repeatnewpassword'><br>
        <input type='submit' name = 'submit' value='changepassword'></form>";
		
	}
}
else die ("cannot change");


?> 
	 
		