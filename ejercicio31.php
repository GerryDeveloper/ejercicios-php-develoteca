<?php
/**
 * recepcion de datos de un formulario
 * - es una de las partes mas importantes
 * 
 * - vamos a enviar informacion y se la vamos a mostrar al usuario
 * 
 * - flujo:
 *  - obtener informacion
 *  - almacenarla
 *  - recuperarla de la base de datos
 * 
 * - forma de recepcionar los datos
 */

$txtNombre = "";
$rdgLenguaje = ""; // rdg = radio group

$chkphp="";
$chkhtml="";
$chkcss="";

$lsSerie="";

if ($_POST) { // si hay un envio?
  $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "juan"; // if ternario
  $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : ""; // if ternario

  $chkphp= ( isset($_POST['chkphp'] )=="si") ? "checked" : "";
  $chkhtml= ( isset($_POST['chkhtml'] )=="si") ? "checked" : "";
  $chkcss= ( isset($_POST['chkcss'] )=="si") ? "checked" : "";
  // $chkcss= ( isset($_POST['$chkcss'] )=="si") ? "checked" : ""; // this was a f*cking mistake..., $varname != "varname"
  $lsSerie= ( isset($_POST['lsAnime']) ) ? $_POST['lsAnime'] : "";

  print_r($lsSerie); // $_POST

  // print_r($_POST);
  // echo "<br>---<br>";
  echo "Lenguaje: <br>";
  print_r($rdgLenguaje);
  echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>

  <?php if ($_POST) {// si hubo envio?> 
  <!-- php nos permite ingresar codigo php en html -->
   <strong>Hola</strong>: <?php echo $txtNombre; ?>
   <br>
   <strong>Tu lenguaje es: </strong> <?php echo $rdgLenguaje; ?>
   <br>
   <strong>Estas aprendiendo: </strong><br>
   <!-- - <?php echo ($rdgLenguaje=="php")? "PHP":""; ?><br> -->
   <!-- - <?php echo ($rdgLenguaje=="html")? "HTML":""; ?><br> -->
   <!-- - <?php echo ($rdgLenguaje=="css")? "CSS":""; ?><br> --> 
   - <?php echo ($chkphp=="checked")? "PHP":""; ?><br>
   - <?php echo ($chkhtml=="checked")? "HTML":""; ?><br>
   - <?php echo ($chkcss=="checked")? "CSS":""; ?><br>
   <br>
   <strong>Estas viendo la serie de: </strong>
   <?php echo $lsSerie; ?>
   <br>
  <?php } ?>

  <form action="ejercicio31.php" method="post">

  Nombre:<br>
  <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" id="">
  <br>

  Lenguaje que te gusta?:<br>
  <br>php: <input type="radio" <?php echo ($rdgLenguaje=="php")? "checked":"";?> 
    name="lenguaje" value="php" id=""> <br>
  <br>html: <input type="radio" <?php echo ($rdgLenguaje=="html")? "checked":"";?>
    name="lenguaje" value="html" id=""> <br>
  <br>css: <input type="radio" <?php echo ($rdgLenguaje=="css")? "checked":"";?>
    name="lenguaje" value="css" id=""> <br>

    <!-- checkbox -->
  Estas aprendiendo... <br>
  <br>php:<input type="checkbox" <?php echo $chkphp;?> name="chkphp" value="si" id="">
  <br>html:<input type="checkbox" <?php echo $chkhtml;?> name="chkhtml" value="si" id="">
  <br>css:<input type="checkbox" <?php echo $chkcss;?> name="chkcss" value="si" id="">
  <br>

  <!-- select-option ; disabled="disabled"-->
  <br>
  Que serie te gusta?
  <br>
  <select name="lsAnime" id="" > 
    <option value="">[Ninguna Serie]</option>
    <option value="seriea" <?php echo ($lsSerie=="seriea") ? "selected" : ""; ?> >Serie A</option>
    <option value="serieb" <?php echo ($lsSerie=="serieb") ? "selected" : ""; ?> >Serie B</option>
    <option value="seriec" <?php echo ($lsSerie=="seriec") ? "selected" : ""; ?> >Serie C</option>
  </select>
  <br>
  <input type="submit" value="Enviar informacion">

  </form>
  
    <br>
    <?php 
    echo ''.random_int(10000000, 99999999); //33647603 
    echo '</br>';

    function generarCadenaAleatoria() {
      $numeros = '0123456789';
      $letras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
      
      // Generar 6 números aleatorios
      $cadena = '';
      for ($i = 0; $i < 2; $i++) {
          $cadena .= $numeros[random_int(0, strlen($numeros) - 1)];
      }
      
      // Generar 2 letras aleatorias
      for ($i = 0; $i < 4; $i++) {
          // $cadena .= $letras[random_int(0, strlen($letras) - 1)];
          if ($i % 2 == 0) {
            $cadena .= strtolower($letras[random_int(0, strlen($letras) - 1)]);
          } else {
            $cadena .= $letras[random_int(0, strlen($letras) - 1)];
          } // 9L@Z7k80
      }

      // genera 3 numeros aleatorios
      for ($i = 0; $i < 2; $i++) {
        $cadena .= $numeros[random_int(0, strlen($numeros) - 1)];
    }
      
      // Mezclar la cadena para que no tenga un patrón predecible
      return str_shuffle($cadena);
  }
  
  // Ejemplo de uso
  echo generarCadenaAleatoria();
   ?> 
</body>

<!-- 04:00:12 valores tipo checkbox -->
<!-- 04:19:50 valores textarea -->
</html>