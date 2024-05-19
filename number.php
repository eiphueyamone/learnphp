<?php
// number
$a=1;
$b=2.3;
$c="2";
var_dump($a);
var_dump($b);
var_dump($c);
echo"<br>";
// integer float
$d=4890;
var_dump(is_integer($d));
 $e=98.34;
 var_dump(is_double($e));
 var_dump(is_float($e));
 var_dump(is_int($e));
 echo"<br>";
//  infinity
$f=3e7;
var_dump($f);
echo"<br>";
//Nan
$h=acos(2);
$i=3;
var_dump($h);
var_dump(is_nan($i));
echo"<br>";
//numeric
$j = 85;
var_dump(is_numeric($j));

$j = "85";
var_dump(is_numeric($j));
var_dump($j);
$j = "59.985" + 100;
var_dump(is_numeric($j));
var_dump($j);

$k = "Hello";
var_dump(is_numeric($k));
echo"<br>";
?>