<?php

$probalilidad = 50;

function isBitten ($prob) {

   if ($prob == rand (50,50)) {
        echo "$prob, TRUE";
    } else {
        echo "FALSE";
    }

}

isBitten($probalilidad);

?>