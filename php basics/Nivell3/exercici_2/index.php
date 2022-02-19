<?php
//Escriu un programa en PHP que compta el nombre total de vegades que un valor existeix en l'array.

$array = array (15, 2, 5, 6, 2, 8, 2, 5);

function total_de_vegades ($array)
{
    return array_count_values ($array);
}

echo "<pre>";
print_r (total_de_vegades ($array));
echo "</pre>";


?>