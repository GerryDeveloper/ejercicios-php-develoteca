<?php

// siempre donde tengamos que usar las sesiones tenemos que usar session_start()

session_start();

$valor1 = $_SESSION['valor1'];

echo $valor1 . "</br>";

$_SESSION['valor2'] = 'Luis';

echo "<a href='pagina3.php'>Ir a la pagina 3</a>";

?>