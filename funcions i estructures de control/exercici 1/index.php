<?php

$edad = 48;

function par_o_impar ($valor){
    if ($valor %2 == 0) {
        echo "$valor es par";
    } else {
        echo "$valor es impar";
    
    }
    
}

par_o_impar ($edad);




?>