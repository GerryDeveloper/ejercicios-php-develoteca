<?php

$frutas = array('Fresa','Pera','Manzana');
print_r($frutas);

// funciones de arreglos
array_push($frutas, 'Uva');

echo '<br>';
print_r($frutas);

echo '<br>Se puede agregar mas de un dato a la vez:<br>';

array_push($frutas, 'Higo','Durazno');
print_r($frutas);

?>