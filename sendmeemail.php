<?php
$to="Rc1981999@gmail.com";
$subject="email send it";
?>
<html>
<form  action="sendmeemail.php" method="POST">
Name:<input type="text" name="name" maxlength='20'><br>
Message  : <textarea name="message"></textarea>
<br>
<input type='submit' name='submit' value="send me email">
</form>
</html>
