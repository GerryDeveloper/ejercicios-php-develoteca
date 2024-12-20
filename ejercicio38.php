<?php

// abriendo un archivo para leer el contenido
$archivo = "contenido.txt";

$archivoAbierto = fopen($archivo,"r"); // abrir archivo con la opcion de lectura

$contenido = fread($archivoAbierto,filesize($archivo)); // leer el archivo

echo $contenido;

?>