<?php

// programacion orientada a objetos

class persona {

  public $nombre;
  private $edad;
  protected $altura;

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

class trabajador extends persona{
  public $puesto;

  public function presentarComoTrabajador () {
    echo 'Hola soy '.$this->nombre.' y soy un '.$this->puesto;
  }

}

$objetoAlumno = new persona();
echo $objetoAlumno->nombre;
$objetoAlumno->asignarNombre('Gilliman');
// echo $objetoAlumno->nombre;
$objetoAlumno->imprimirNombre();


// objeto trabajador
$objetoTrabajador = new trabajador();
$objetoTrabajador->asignarNombre('trabajador1');
$objetoTrabajador->puesto = 'Jefe';
$objetoTrabajador->presentarComoTrabajador();


// nos quedamos 2:48:08
?>