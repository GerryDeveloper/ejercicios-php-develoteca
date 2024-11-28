<?php

session_start();

// echo "Usuario: ".$_SESSION["usuario"].", estatus: ".$_SESSION["estatus"];

if ( isset($_SESSION["usuario"]) ) {
  echo "Usuario: ".$_SESSION["usuario"].", estatus: ".$_SESSION["estatus"];
} else {
  echo "No hay datos.";
}


// el dato que tengo en otro archivo lo pueso leer a unsque sean dos archivos diferentes

/**
 * aunque sean dos archivos deferentes puedo obtener la informacion
 * 
 * - puedo acceder escribiendo session_start();
 * 
 * - al perder la coneccion con el servidor esta coneccion desaparece
 * - esto es al cerrar el servidor por ejemplo
 */

?>