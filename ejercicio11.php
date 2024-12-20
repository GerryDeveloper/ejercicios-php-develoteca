<?php

// si hay envios
if ($_POST) {

  $valorA = $_POST['valorA'];
  $valorB = $_POST['valorB'];
 
  $resultSuma = $valorA + $valorB;
  $resultResta = $valorA - $valorB;
  $resultMulti = $valorA * $valorB;
  $resultDiv = $valorA / $valorB; 

  echo 'valorA: '.$valorA.", valorB: ".$valorB."<br>";
  echo '<br>'.$resultSuma;
  echo '<br>'.$resultResta;
  echo '<br>'.$resultMulti;
  echo '<br>'.$resultDiv;

  echo '<br>';
  if ( $valorA == $valorB) {

    echo 'El valor de A es igual al valor de B <br>';

    if ( $valorA % 2 == 0 || $valorA == 4) {
      echo 'El valor de A es Par y es igual a 4<br>';
    }

    if ($valorA == 6) {
      echo 'El valor de A es 6 <br>';
    }
  }
  
}
echo 'br <br>';
if ( ($valorA == $valorB) && ($valorA == 4) ) {
  echo 'El valor de A es igual a B y es un numero 4';
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

<form action="ejercicio11.php" method="post">

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