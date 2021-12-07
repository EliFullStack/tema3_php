<?php

$contador = 1;
$limite = 9;

function amagatall ($i,$limite) {

   do {
        echo $i."<br>";
        $i++;
    } while ($i <= $limite);
}


amagatall ($contador,$limite);


?>