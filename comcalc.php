<?php
$p=$_POST["p"];
$r=$_POST["r"];
$n=$_POST["n"];
$t=$_POST["t"];
$s=0;
if($n=="half"){
  $s=2;
}
if($n=="year"){
  $s=1;
}
$ci=($p*pow((1+$r/100)/$s,($s*$t)))-$p;
echo "<h2> Compound Interest is = $ci </h2>";
?>
