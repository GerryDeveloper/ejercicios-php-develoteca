<?php
// entre azul y medias noches

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Pestañas</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container" id="draggable">

    <img src="images/image.png" alt="" >

    <h1>Bienvenido</h1>
    <div class="tabs">
        <div class="tab active" onclick="showForm('alumno')">Alumno</div>
        <div class="tab" onclick="showForm('profesor')">Profesor</div>
        <div class="tab" onclick="showForm('administrador')">Administrador</div>
    </div>

    


    <div id="alumno" class="form active">
        <form action="procesar.php" method="post">
            <input type="text" name="num_control" placeholder="Número de Control" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>

    <div id="profesor" class="form">
        <form action="procesar.php" method="post">
            <input type="text" name="clave_profesor" placeholder="Clave Profesor" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>

    <div id="administrador" class="form">
        <form action="procesar.php" method="post">
            <input type="text" name="nombre_administrador" placeholder="Nombre Administrador" required><br>
            <input type="password" name="password" placeholder="Contraseña" required><br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</div>

<script src="js/script.js"></script>
<script src="php/procesar.php"></script>
</body>
</html>
