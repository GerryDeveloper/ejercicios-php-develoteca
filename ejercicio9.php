<?php

if ($_POST) {

  $valorA = $_POST['valorA'];
  $valorB = $_POST['valorB'];

  // COMPARADORES RELACIONALES
  echo 'Valor A: '.$valorA. ", Valor B: ".$valorB;
  echo '<br>';
  if ($valorA > $valorB) {

    echo "El valor de A es mayor que el valor de B";
  }

  
  /**
   * 
   * $resultSuma = $valorA + $valorB;
  * $resultResta = $valorA - $valorB;
  * $resultMulti = $valorA * $valorB;
  *$resultDiv = $valorA / $valorB; 

  *echo 'valorA: '.$valorA.", valorB: ".$valorB."<br>";
  *echo '<br>'.$resultSuma;
  *echo '<br>'.$resultResta;
  *echo '<br>'.$resultMulti;
  *echo '<br>'.$resultDiv;
  */

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

<form action="ejercicio9.php" method="post">

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