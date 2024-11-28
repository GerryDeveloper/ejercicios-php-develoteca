<?php

// Conexión a la base de datos
$servidor = "localhost"; 
$usuario = "root";
$password = ""; // deja vacío si root no tiene contraseña

// $usuario = "user1";
// $password = "123";

try {
  $conection = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);
  $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM `fotos`";
  $sentencia = $conection->prepare($sql);
  $sentencia->execute();

  $resultado = $sentencia->fetchAll();
  print_r($resultado);

  echo 'Connection established';

} catch (PDOException $error) {
  echo 'Connection failed: '.$error->getMessage();
}

?>
