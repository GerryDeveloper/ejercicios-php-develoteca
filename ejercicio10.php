<?php

if ($_POST) {

  $valorA = $_POST['valorA'];
  $valorB = $_POST['valorB'];

  // operaciones logicas and, or, not
  if ( ($valorA != $valorB) || ($valorA > $valorB)) {

    echo "El valor de A es DIFERENTE al valor de B<br>";
  
  }
  if ( ($valorA != $valorB) && ($valorA > $valorB)) {

    echo "El valor de A es DIFERENTE al valor de B y ademas \n A es MAYOR a B<br>";
  
  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Aritmeticos</title>
</head>
<body>

<form action="ejercicio10.php" method="post">

  Valor A:
  <input type="text" name="valorA" id="">
  <br>
  Valor B:
  <input type="text" name="valorB" id="">
  <br>

  <input type="submit" value="Calcular">

</form>
  
</body>
</html>