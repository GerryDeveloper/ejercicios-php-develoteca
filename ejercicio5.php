<?php

if($_POST) {

  $txtNombre = $_POST['txtNombre'];
  $txtApellido = $_POST['txtApellido'];
  echo "Hola mucho gusto: ".$txtNombre.", apellido: ".$txtApellido;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>



<form action="ejercicio5.php" method="post">

  Nombre:
  <input type="text" name="txtNombre" id="">
  <br>
  Apellido:
  <input type="text" name="txtApellido" id="">
  <br>
  <hr>
  <input type="submit" value="SEND">

</form>
<!-- TEMAS: 30:00 min
 
- envio de variables 
- concatenacion
-->
  
</body>
</html>