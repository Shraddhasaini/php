<?php
$m=$_POST['m'];
$e=$_POST['e'];
session_start();
$sap=$_SESSION['sap'];
$n=$_SESSION['n'];
$b=$_SESSION['b'];
$s=$_SESSION['s'];

echo "YOUR SAP ID IS:".$sap."</br>";
echo "YOUR NAME IS:".$n."</br>";
echo "YOUR BRANCH IS:".$b."</br>";
echo "YOUR SEM IS:".$s."</br>";
echo "YOUR MNO IS:".$m."</br>";
echo "YOUR EMAIL IS:".$e;
session_destroy();
?>
