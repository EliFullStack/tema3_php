<?php

//Escriure un programa PHP per calcular la suma dels dos valors enters donats.
//Si els dos valors són iguals, torna el doble de la seva suma.

function calcular ($n1, $n2)
{
    $suma = $n1 + $n2;

    if ($n1 == $n2) {
        return $suma * 2;
    } else {
        return $suma;
    }

}

echo calcular (5, 7) . "<br>";
echo calcular (6, 9) . "<br>";
echo calcular (4, 4) . "<br>"



// Probando otra manera de obtener los mismos resultados
// Utilizando el operador ternario

/*
function calcular ($n1, $n2)
{
    $suma = $n1 + $n2;

    return($n1 == $n2) ? $suma * 2  : $suma;
    
}

echo calcular (5, 7) . "<br>";
echo calcular (6, 9) . "<br>";
echo calcular (4, 4) . "<br>"
    
*/


?>
