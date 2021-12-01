<?php

$nota = 0.44;

function amagatall ($i) {

    if ($i >= 0.60) {
        echo "El grau es Primera Divisió. <br>";
    } 
    elseif ($i >= 0.45 && $i < 0.60) {
        echo "El grau es Segona Divisió. <br>";
    } 
    elseif ($i >= 0.33 & $i < 0.45) {
        echo "El grau es Tercera Divisió. <br>";
    } 
    else {
        echo "L'estudiant reprovarà.";
    }
    
}  

amagatall ($nota);


?>