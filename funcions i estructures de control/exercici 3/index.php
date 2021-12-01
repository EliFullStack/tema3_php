<?php

$contador = 1;

function amagatall ($i) {

    while ($i <= 20) {
        echo $i."<br>";
        $i++;
        if ($i > 15) {
            break;
        }
    }
}

amagatall ($contador);


?>