<?php

/**
 * vamos a leer un comando JSON, los formatos JSON son informacion que aveces nos enviasn
 * alguns API's
 * 
 * - por ejemplo API's para consumir un video, nosotros consumimos un video ese video
 *  tiene cierta invormacion como 
 *  - titulo
 *  - URL
 *  - tumbnail
 * 
 * - que pasa si yo quiero consumir esa informacion en una API de YoutTube, nos va a proporcionar
 *  la url del video, nos va a proporcionar el thumbnail, incluso la descripcion
 *  comunmente nos lo va a proporcionar en un contenido JSON
 * 
 * - la idea es que nosotros podamos interpretar esa informacion, y eso es lo que vamos a ver ahora
 *  
 * - php nos proporciona informacion para poder consumir estos tipos de formatos
 *  esto es porque aveces el tipo de formato que llega es String y a la hora de convertir ese String
 *  pues nosotros no podemos leerlo, tendriamos que convertirlo en un OBJETO o convertirlo 
 *  a un ARREGLO para poder sacar la informacion o poder leer toda la informacion.
 * 
 * 
 */


 // contenido en formato JSON que vamos a terminar leyendo
 // cada corchete representa un registro de informacion
 // las API son la forma de intercambiar informacion y de comunicar a las aplicaciones
 // bajo esta premisa, ya sabemos que el formato JSON va a servir par a intercambiar informacion
 // supongamos que la infor de abajo viene de una URL

$jsonContenido = '[
  {"nombre":"Oscar", "apellido":"Uh"},
  {"nombre":"Jose", "apellido":"Perez"}
  ]';

$resultado = json_decode($jsonContenido); // devuelve un arreglo de objetos
// print_r($resultado);
// echo '<br>';

foreach($resultado as $persona) {
  // print_r($persona->nombre);
  //echo '<br>';
  echo ($persona->nombre)." ".($persona->apellido)."<br>";
}


?>