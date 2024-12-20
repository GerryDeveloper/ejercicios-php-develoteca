<?php

// antes daba error con esto:
// $server = "localhost";
$server = "localhost:3307"; // direccion del servidor 127.0.0.1 local
$usuario =  "root";
$contrasena = "";

try {

  $conection = new PDO("mysql:host=$server;dbname=album",$usuario,$contrasena);
  $conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // STATIC CONSTANTS

  $sql = "SELECT * FROM `fotos`";

  $sentencia = $conection->prepare($sql);
  $sentencia->execute();

  $resultado = $sentencia->fetchAll();

  print_r($resultado);

  echo '<br>';

  for ($i = 0; $i < count($resultado); $i++) {
    print_r( $resultado[$i]);
    echo "<br>";
  }

  echo '<br><br>Imprimir usando el "forEach():"<br>';
  
  foreach($resultado as $foto) {
    //print_r($foto);
    print_r($foto["id"]);
    echo " - ";
    print_r($foto["nombre"]." **cadena agregada para probar print_r");
    echo "<br>";
  }

  echo "\nConeccion establecida.";

}catch(PDOException $error) {
  // echo "coneccion erronea: $error";
  echo "coneccion fallida: ".$error;
}

// 03:27:56 variables de sesion

?>