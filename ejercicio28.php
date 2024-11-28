<?php

// coneccion a la base de datos

$servidor = "localhost"; // 127.0.0.1 // servidor al que se conectara la base de datos
$usuario = "root";
$password = "";


try{

  $conection = new PDO("mysql:host=$servidor;dbname=album", $usuario, $password);
  $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // STATIC constants

  

  echo 'Connection established';

}catch (PDOException $error){

  echo 'connection failed: '.$error;

}


// nos quedamos en 3:21:08 leer datos de php
?>