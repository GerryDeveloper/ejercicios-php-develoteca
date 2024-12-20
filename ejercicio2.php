<?php

  if ($_POST) {
    // recivir informaicon del HTML, metodo post
    $nombre = $_POST["txtNombre"];
    echo "Hola mundo ".$nombre;
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
  
  
<!-- el formualrio hace un envio a ejercicio2.php, se lo va a enviar a si mismo
 cuando llegue la info por un metod post
 pero vamos a enviar le input de nombre txtNombre -->
  <form action="ejercicio2.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br>
    <input type="submit" value="Enviar">

  </form>

</body>
</html>
