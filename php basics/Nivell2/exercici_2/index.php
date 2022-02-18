<?php

//Escriu un programa PHP per intercanviar el primer i últim caràcter d'una cadena donada
//i imprimeix la nova cadena.

function intercambio ($string)
{
    return strlen($string) > 1  ? substr($string, strlen($string) - 1)
    . substr($string, 1, strlen($string) - 2) . substr($string, 0, 1)
     : $string;
}

echo intercambio ("OPQRS")."<br>";
echo intercambio ("T")."<br>";
echo intercambio ("UY")."<br>";



//Otra manera también podría ser:

/*function intercambio ($string)
{
    if (strlen ($string) > 1) {
        return substr($string, strlen($string) - 1)
         . substr($string, 1, strlen($string) - 2) . substr($string, 0, 1);
    } else {

        return $string;
    }

} 

echo intercambio ("OPQRS")."<br>";
echo intercambio ("T")."<br>";
echo intercambio ("UY")."<br>";
*/

?>