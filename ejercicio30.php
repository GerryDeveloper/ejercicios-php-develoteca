<?php

// variables de sesion
session_start();  // nos sirve para mantener informacion en cualquie pagina mientras el navegador este abierto

$_SESSION["usuario"] = "develoteca1";
$_SESSION['estatus'] = "logeado";

echo "sesion iniciada."."<br>";

echo "Usuario: ".$_SESSION["usuario"].", estatus: ".$_SESSION["estatus"];





/** 
 * hay que mantener los datos de la persona logeada en toda la pagina para saber que esta logeado
 * 
 */

?>