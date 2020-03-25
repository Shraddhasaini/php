<?php
$b=$_POST['b'];
$s=$_POST['s'];
session_start();
$_SESSION['b']=$b;
$_SESSION['s']=$s;
?>
<html>
<form action="three.php" method="post">
<center>
Enter M.no <input type="text" name="m"><br>
Enter Email <input type="text" name="e"><br>
<input type="submit" value="SUBMIT">
</center>
</form>
</html>
