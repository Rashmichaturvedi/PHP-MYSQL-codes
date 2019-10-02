<?php
function add($x,$y)
{
$sum= $x+$y;
echo"Sum is =$sum<br><br>";
}
function sub($x,$y){
$sub=$x-$y;
echo"difference is =$sub  <br><br>";
}
if(isset($_Post['add'])) {
add($_Post['first'],$_Post['second']);
}
if(isset($_Post['sub'])) {
sub($_Post['first'],$_Post['second']);
}

?>
<form method="Post">
ENTER  FIRST NO:<input type="number" name="first"/><br><br>
ENTER  SECOND NO:<input type="number" name="second"/><br><br>

<input type="submit" name="add"  value="sum" />
<input type="submit"  name="sub" value="subtraction"/>
</form>
