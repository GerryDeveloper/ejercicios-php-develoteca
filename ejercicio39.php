<?php

// vamos a crear un archivo

$nombreArchivo = "archivo.txt";
$contenidoArchivo = "Hola, saudos desde archivo creado en PHP";

$archivoACrear = fopen($nombreArchivo,"w"); // archivo creado si no existe?

fwrite($archivoACrear, $contenidoArchivo);
fclose($archivoACrear);


?>