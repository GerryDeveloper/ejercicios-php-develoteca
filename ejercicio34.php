<?php

/**
 * 
 * en esta ocasion veremos lo inverso a un json_decode
 * - tambien podemos mostrar informacion en formato JSON para otras aplicaciones
 * - esto es muy util pues nos servira para intercambiar informacion entre aplicaciones de diferentes tecnologias
 * - la comunicacion mas sencilla es usando este formato
 * 
 */

 $personas = array("Oscar"=>40, "Jose"=>20, "Maritza"=>38);

// yo quiero transformar este arreglo con indices y valores en un formato JSON
// usaremos JSON_ENCODE()

print_r($personas); // Array ( [Oscar] => 40 [Jose] => 20 [Maritza] => 38 )
echo "<br>";

echo json_encode($personas); // {"Oscar":40,"Jose":20,"Maritza":3

?>