<?php
$userpassword="abc";
  $userpassworddenc  = md5($userpassword);
  if($_POST['password'])
  {
	  $submitenc = md5($_POST['password']);
	  if($submitenc = $userpassworddenc)
	  {
		  echo  "compared $userpassworddenc to $submitenc<br>";
		  die("correct");
	    }
	  else die ("Incorrect");
  }
  ?>
  <form action='md5.php' method = 'POST'>
  <input type='text' name = 'password'>
  <input type = 'submit' value = 'login'>
  </form>
  
  
  