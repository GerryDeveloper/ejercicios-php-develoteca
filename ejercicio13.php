<?php

if($_POST) {

  // como vamos a evaluar que boton se presiono si todos se llaman igual??

  $buton = $_POST['btnValor'];

  switch ($buton) {
    case 1: // evaluamos el valor del button
      echo 'Presiono el boton 1';
    break;

    case 2:
      echo 'Presiono el boton 2';
    break;

    case 3:
      echo 'Presiono el boton 3';
    break;
  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch</title>
</head>
<body>
  <form action="ejercicio13.php" method="post">

  <!-- le pondremos el mismo nombre a los botones porque vamos a evaular lo que es el boton presionado -->
  <input type="submit" name="btnValor" value="1"> 
  <br>
  <input type="submit" name="btnValor" value="2">
  <br>
  <input type="submit" name="btnValor" value="3">



  </form>
</body>
</html>