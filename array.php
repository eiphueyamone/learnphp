<?php
//echo"</pre>";
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo"<br>";
//access
echo $cars[0];
echo"<br>";
// change value
$cars[1] = "Ford";
var_dump($cars);
echo"<br>";

//loop
foreach ($cars as $x) {
  echo "$x <br>";
}
//array push
$cars[3]="M";
var_dump( $cars);
echo"<br>";
array_push($cars,"H");
var_dump( $cars);
echo"<br>";

//associative array
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
echo"<br>";
echo $car["model"];
echo"<br>";
// change value
$car["year"] = 2024;
var_dump($car);
echo"<br>";
//loop
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
echo"<br>";
?>