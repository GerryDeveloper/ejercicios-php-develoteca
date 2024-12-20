<?php

$edad = 32; 

echo "edad: ".$edad;

$edad = 18;

echo '<br>'."edad actualizada: ".$edad; // using \n does't work, use <br> instead

// uso de constante

define('NOMBRE',"LUIS"); // este valor no se puede cambiar

// IMPRIMIR COSNTANTE
echo "<br>";
echo NOMBRE;


/** CONSTANTES
 * 
 * - variables, su valor cambia
 * - cosntantes, su valor no debe de cambiar
 *    usa deine('VAR_NAME', 'VAR_VALUE');
 *    sin usar singo $
 */

?>