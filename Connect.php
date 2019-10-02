<?php

$connect=mysqli_connect("localhost","root","")or die("Connection failed");
mysqli_select_db($connect,"people")or die("no table");

echo "Connected<br/>";
?>