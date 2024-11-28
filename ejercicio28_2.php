<?php

// antes daba error con esto:
// $server = "localhost";
$server = "localhost:3307"; // direccion del servidor 127.0.0.1 local
$usuario =  "root";
$contrasena = "";

try {

  $conection = new PDO("mysql:host=$server;dbname=album",$usuario,$contrasena);
  $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // STATIC CONSTANTS

  $sql=
  "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg'); ";

  $conection->exec($sql);

  echo "Coneccion establecida.";

}catch(PDOException $error) {
  // echo "coneccion erronea: $error";
  echo "coneccion fallida: ".$error;
}


?>