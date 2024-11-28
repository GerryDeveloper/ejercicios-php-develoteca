<?php


 // echo 'Holaaaa';

/**

funciones
 son instrucciones que podemos usar varias veces

imprimirNombre('Luis', 'Ramos');  si funciona el llamado

function imprimirNombre($nombre, $apellido) {
  // rutina o instrucciones
  echo 'Hola '.$nombre." ".$apellido."<br>";

}

imprimirNombre('Luis', 'Ramos');
imprimirNombre('Maritza', "Madrigal");

 nos quedamos 1.46 hrs: funciones matematicas php

*/
imprimirNombre('Luis', 'Calibre');

function imprimirNombre($nombre, $apellido = '') {
  // Rutinas (instrucciones)
  // valor por default vacio en parametro: = ''
  echo 'Hola '.$nombre.' '.$apellido.'<br/>';
}

imprimirNombre('Nanna', 'Cambridge');
imprimirNombre('Jon', 'Bridge');
imprimirNombre('Joe'); // Doe

?>


