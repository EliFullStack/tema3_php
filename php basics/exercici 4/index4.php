<?php
//declaro las variables y les asigno un valor
$x = 16;
$y = 4;
$m = 12.6;
$n = 7.3;

//trabajando con las variables x e y
echo $x. "</br>";
echo $y. "</br>";
echo $x + $y. "</br>"; 
echo $x - $y. "</br>"; 
echo $x * $y. "</br>"; 
echo $x % $y. "</br></br>"; 

//trabajando con las variables n y m
echo $m. "</br>";
echo $n. "</br>";
echo $m + $n. "</br>"; 
echo $m - $n. "</br>";  
echo $m * $n. "</br>";  
echo $m % $n. "</br></br>"; 

//para todas las variables
echo $x * 2;
echo "</br>";
echo $y * 2;
echo "</br>";
echo $m * 2;
echo "</br>";
echo $n * 2;
echo "</br> </br>";

$suma = $x + $y + $m + $n; //suma de todas las variables
echo $suma;
echo "</br> </br>";

$producto = $x * $y * $m * $n; //producto de todas las variables
echo $producto;

?>