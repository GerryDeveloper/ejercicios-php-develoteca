
<?php

// si no se pone direccion se manda al mismo lugar

if($_GET) {

  $campoNombre = $_GET["campoNombre"];

  echo "esto ni imprime nada".$campoNombre;
  echo "Hola desde php: ".$nombre1;
}

echo "**";
echo "==";
/**
 * 2 cosas
 * 1. recalcar que la informacion en los formularios se puede enviar a archivos diferentes
 * en este caso a uno PHP
 * 
 * 2. podemos enviarlo por otro metodo lalmado GET, ademas de POST
 * 
 * - todo esto sirve para separar el documento PHP del documento HTML
 * - diferencias entre los metodos GET y POST es que 
 * -  GET muestra los datos a travez de la URL
 * -  POST los oculta y los recepciona
 */
?>