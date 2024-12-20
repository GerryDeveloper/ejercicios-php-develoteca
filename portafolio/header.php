<?php 

  session_start();
  // print_r($_SESSION);
  if( isset($_SESSION['usuario']) != 'develoteca' ) {

    header("location:login.php");

  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portafolio</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>

<div
  class="container"
>
  <a href="index.php">Inicio</a> |
  <a href="portafolio.php">Portafolio</a> |
  <a href="cerrarSesion.php">Cerrar Sesion</a>
  <br>



  