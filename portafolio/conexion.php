<?php 

// aqui vamos a poner las etiquetas que teniamos

class conexion {
  private $servidor="localhost";
  private $usuario="root";
  private $contrasenia="";
  private $conexion;

  public function __construct() {

    try{
      $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album", $this->usuario, $this->contrasenia);
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch ( PDOException $e) {
      return "falla de conexion=".$e;
    }
  }

  // metodos
  public function ejecutar($sql) { // insertar/delete/actualizar

    $this->conexion->exec($sql);
    return $this->conexion->lastInsertId();

  }

  public function consultar($sql) {

    $sentencia=$this->conexion->prepare($sql); // prepare() prepara una consulta sql para su ejecucion
    $sentencia->execute();

    return $sentencia->fetchAll(); // retorna todos los registros que tu puedas consultar con la sentencia $sql

  }



}

?>