<?php

if ($_POST) {

  $valorA = $_POST['valorA'];
  $valorB = $_POST['valorB'];

  $resultadoSuma = $valorA + $valorB;
  echo "Operaciones Basicas";
  echo "<hr>";
  echo "numeroA: ".$valorA.", numeroB: ".$valorB."<br>";
  echo "Suma: ".$resultadoSuma."<br>";
  echo "Resta: ".($valorA - $valorB)."<br>";
  echo "Multiplicacion: ".($valorA * $valorB)."<br>";
  echo "Division: ".($valorA / $valorB)."<br>";

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

<form action="" method="post">

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