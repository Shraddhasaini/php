<?php
$sap=$_POST['sap'];
$n=$_POST['n'];
session_start();
$_SESSION['sap']=$sap;
$_SESSION['n']=$n;
?>
<html>
<form action="two.php" method="post">
<center>
Enter Branch <input type="text" name="b"><br>
Enter SEM <input type="text" name="s"><br>
<input type="submit" value="Next>>">
</center>
</form>
</html>
