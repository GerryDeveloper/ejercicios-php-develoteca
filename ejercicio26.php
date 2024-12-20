<?php


class persona {

  public $nombre;
  private $edad;
  protected $altura;

  // metodo constructor
  function __construct($nuevoNombre) {
    $this->nombre = $nuevoNombre;
  }

  public function asignarNombre($nuevoNombre) {  
    $this->nombre = $nuevoNombre;
  }
  public function imprimirNombre() {
    echo 'Hola soy '.$this->nombre.'<br>';
  }
  public function mostrarEdad() {
    $this->edad = 20;
    return $this->edad;
  }

}

$objtAlumno = new persona('aaaa');
$objtAlumno->imprimirNombre();


/**
 * metodo constructor
 * 
 * permite crear el objeto a partir de un valor inicial
 */
?>