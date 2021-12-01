<?php

$probalilidad = 50;

function isBitten ($num) {

   if ($num == rand (0,100)) {
        echo "$num, TRUE";
    } else {
        echo "FALSE";
    }

}

isBitten ($probalilidad);

?>