<?php
// casting
// cast to integer
$l = 23465.768;
$m = (int)$l;
echo $m;
echo"<br>";
$x = "23465.768";
$i = (int)$x;
echo $i;
echo "<br>";
$a = 5;  
$b = 2.44;    
$c = "hello"; 
$d = true;   
$e = NULL;    
$g = "hello 35"; 
$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$g = (int) $g;
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($g);
echo "<br>";
// cast to string
$a = 5;  
$b = 2.44;    
$c = "hello"; 
$d = true;   
$e = NULL;    

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo "<br>";
// cast to float
$a = 5;  
$b = 2.44;    
$c = "hello"; 
$d = true;   
$e = NULL;    
$g = "hello 35"; 
$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$g = (float) $g;
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($g);
echo "<br>";

// cast to float
$a = 5;  
$b = 2.44;    
$c = "hello"; 
$d = true;   
$e = NULL;    
$g = ""; 
$s=0;
$j=-1;
$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$g = (bool) $g;
$s = (bool) $s;
$j = (bool) $j;
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($g);
var_dump($s);
var_dump($j);
echo "<br>";

// cast to array
$a = 5;  
$b = 2.44;    
$c = "hello ,world"; 
$d = true;   
$e = NULL;    

$b = (array) $b;
$a = (array) $a;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo "<br>";

// cast to object
$a = 5;  
$b = 2.44;    
$c = "hello ,world"; 
$d = true;   
$e = NULL;    

$b = (object) $b;
$a = (object) $a;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo "<br>";

// cast to null (error)
$a = 5;  
$b = 2.44;    
$c = "hello ,world"; 
$d = true;   
$e = NULL;    


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
echo "<br>";

?>