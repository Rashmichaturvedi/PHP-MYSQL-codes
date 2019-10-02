<?php


session_start();
if ($_SESSION["username"]){
echo "WElcome" , $_SESSION["username"];
 echo "<br> <a href='logout.php'> logout</a>
 <br>
 <a href='changepassword.php'> change password </a>";
}

else die ("u must be logged out ");
?>