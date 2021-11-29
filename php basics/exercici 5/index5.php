<?php
//defino los arrays
$pares = array (2,6,10,22,36);
$impares = array (3,7,11);

//agrego un nuevo valor a $impares
$impares[] = 21;

//fusiono los dos arrays
$fusionados = array_merge ($pares,$impares);
echo count ($fusionados); //tamaño del array
echo "<pre>"; //me permite ver de manera ordenada la información
var_dump ($fusionados);//imprimo por pantalla el array resultante valor por valor y su tamaño


?>