<?php

session_start();
session_destroy();

echo "se destruyo la sesion de usuario";
/**
 * destruir una variable de sesion
 * 
 * - cuando teneos un carrito de compra y hacemos le pago se cierra la sesion
 * - iniciamos sesion y la destruimos
 * 
 * 
 */
?>