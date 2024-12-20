<?php

// programacion orientada a objetos

class persona {

  // encapsulamiento
  public $nombre; // propiedades
  private $edad; // solo accesible dentro de la clase
  protected $altura; // protegido, solo accesible desde la misma clase y derivadas

  public function asignarNombre($nuevoNombre) {  // acciones o metodos
    $this->nombre = $nuevoNombre;
  }

  public function imprimirNombre() {
    echo 'Hola soy '.$this->nombre;
  }

  public function mostrarEdad() {
    $this->edad = 20;
    return $this->edad;
  }

}

$objetoAlumno = new persona(); // instancia de un objeto
echo $objetoAlumno->nombre;
$objetoAlumno->asignarNombre('Gilliman');
// echo $objetoAlumno.$nombre; // error: obj persona cannot convert to str

// print_r($objetoAlumno.$nombre); // objt of class cannot convert to str
echo $objetoAlumno->nombre; // imprimiendo una propiedad


$objAlumno2 = new persona();
$objAlumno2->asignarNombre('Prometeus');
$objAlumno2->imprimirNombre();

// echo $objAlumno2->edad;
// echo $objAlumno2->altura;
echo $objAlumno2->mostrarEdad().'<br>';

echo $objAlumno2->nombre;

?>