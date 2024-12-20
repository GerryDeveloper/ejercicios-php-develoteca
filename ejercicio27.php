<?php


class UnaClase {

  public static function unMetodo() {
    echo 'metodo static llamado sin instancia';
  }
}


$obj = new UnaClase();
$obj->unMetodo();

UnaClase::unMetodo(); // used in ORM's


/** metodos estaticos
 * 
 * practicamente pueden llamarse sin tener una instancia (la creacion de un objeto)
 * 
 * este metodo de acceder al metodo estatico es muy usado en los ORM
 */

?>