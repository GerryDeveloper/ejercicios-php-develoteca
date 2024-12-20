<?php

// valores input file
/**
 * la informacion que estamos enviando la vamos aenviar porque el hecho de adjuntar una imagen
 * nos dara la pauta de querer adjuntar un archivo pdf, un archivo doc, una imagen
 * 
 * -el input:button nos ayuda para enviar otro input, el file
 */


  if($_POST){
    print_r($_POST);

    print_r($_FILES['archivo']['name']);
    echo "<br>";
    print_r($_FILES['archivo']['size']);

    echo "<br><br>";
    print_r($_FILES['imagen2']);

    move_uploaded_file($_FILES['archivo']['tmp_name'], 
    $_FILES['archivo']['name']);
    echo "<br>";
    print_r ($_FILES['archivo']['tmp_name']);

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

  <form action="ejercicio32.php" enctype="multipart/form-data" method="post">

    Imagen:
    <input type="file" name="archivo" id="">
    <br>
    Otra imagen:
    <input type="file" name="imagen2" id="">
    <br>

    <input type="submit" name="enviar" value="Enviar información">
  </form>
  
</body>
</html>