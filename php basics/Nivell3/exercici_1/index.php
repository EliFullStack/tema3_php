<?php

//Escriu un programa en PHP per convertir una cadena en un array
//(retallant cada caràcter i eliminant les línies buides). 

function retallar ($string)
{
    return strlen ($string) > 1 ? str_split (str_replace(' ', '', $string)) : $string;
   
}
echo "<pre>";
var_dump (retallar ("Hello World"));
echo "</pre>";

?>