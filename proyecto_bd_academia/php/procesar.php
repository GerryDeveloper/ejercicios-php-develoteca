<?php
if ($_POST) {
    if (isset($_POST['num_control'])) {
        echo "Número de Control: " . htmlspecialchars($_POST['num_control']) . "<br>";
    } elseif (isset($_POST['clave_profesor'])) {
        echo "Clave Profesor: " . htmlspecialchars($_POST['clave_profesor']) . "<br>";
    } elseif (isset($_POST['nombre_administrador'])) {
        echo "Nombre Administrador: " . htmlspecialchars($_POST['nombre_administrador']) . "<br>";
    }
    echo "Contraseña: " . htmlspecialchars($_POST['password']) . "<br>";
}
?>
