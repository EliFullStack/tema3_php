<?php

$probalilidad = 1;

function isBitten ($prob) {

   if ($prob == rand (0,1)) {
        echo "TRUE";
    } else {
        echo "FALSE";
    }

}

isBitten($probalilidad);

?>