<?php
//Elimina un element de l’array anterior. 
//Després d'eliminar l'element, les claus senceres han de ser normalitzades.

$X = array (10, 20, 30, 40, 50);

echo "<pre>";
var_dump ($X);
echo "</pre>";
echo "<br>";
unset($X [3]);
echo "<pre>";
var_dump (array_values($X));
echo "</pre>";


?>