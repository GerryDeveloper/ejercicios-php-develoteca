<?php

// php puede desigrar indices ademas de valores numericos
$frutas = array('f'=> 'fresa','m'=> 'manzana','p'=> 'pera');
$frutas2 = array('fresa', 'manzana','pera');

//echo $frutas; // error: array to string conversion


print_r($frutas);
echo '<br>';

echo $frutas2[2];
echo '<br>';

echo $frutas['m'];

echo '<br>';
echo '<br>Imprimimos valores de array 1 a 1:<br>';
// imprimir valores sin usar print_r, sino usando echo y for
$sizeFrutas = count($frutas2);
for ($i = 0; $i < $sizeFrutas; $i++) {
  echo $frutas2[$i].'<br>';
}

echo '<br>usamos forEach() para imprimir valores:<br>';
foreach($frutas as $indice => &$valor) {

  echo $indice.' -> '.$valor.'<br>';

} // array se leera como indice:valor

echo '<br>otra forma usando foreach()<br>';
foreach($frutas as $indice => &$valor) {

  echo $frutas[$indice].'<br>';

} 

?>