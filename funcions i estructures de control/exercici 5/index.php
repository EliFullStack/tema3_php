<?php

$nota = 0.59;

function verificar_grau ($n) {

    if ($n >= 0.60) {
        echo "El grau es Primera Divisió. <br>";
    } 
    elseif ($n >= 0.45) {
        echo "El grau es Segona Divisió. <br>";
    } 
    elseif ($n >= 0.33) {
        echo "El grau es Tercera Divisió. <br>";
    } 
    else {
        echo "L'estudiant reprovarà.";
    }
    
}  

verificar_grau ($nota);


?>