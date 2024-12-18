<?php include "header.php"; 
// min 06:06 -> crear tabla mysql
// video para crear la bd:    Phpmyadmin Crear base de Datos 02:59:36
?>
<?php include "conexion.php" ?>

<?php 

if ($_POST) {

  // print_r($_POST);

  $nombre = $_POST["nombre"]; // recepcionamos el nombre del proyecto con una variable
  $descripcion = $_POST['descripcion']; // descripcion

  $fecha = new DateTime();
  $imagen = $fecha->getTimestamp()."_".$_FILES['archivo']['name']; // hora en milisegundos
  // 06:58 -> adjuntar imagenes, lo haremos agregandolas a una carpeta
  $imagen_temporal = $_FILES['archivo']['tmp_name'];

  move_uploaded_file($imagen_temporal, "imagenes/".$imagen); // mueve el $archivo_temporal a el nombre de la $imagen

  $objConexion = new conexion(); // instancia de la clase conexion
  $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) 
  VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
  $objConexion->ejecutar($sql);
  // $id=$objConexion->ejecutar($sql); // recordar que este metodo devuelve el id insertado

  header("location:portafolio.php");

  // 06:24:56 determinacom con el codigo de conexion que todo esta correcto (this was on someday)
  // started again on 15/12/24
}

if ($_GET){

  // "DELETE FROM proyectos WHERE `proyectos`.`id` = 15"

  $id = $_GET['borrar']; // la razon de separar es para validar el id, si es numero, si es valido, etc
  $objConexion = new conexion();

  $imagen = $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id = ".$id);
  // print_r($imagen[0]['imagen']); // para saber si se devuelve la imagen que se va a borrar

  unlink("imagenes/".$imagen[0]['imagen']); 

  // $sql = "DELETE FROM proyectos WHERE `proyectos`.`id` =".$_GET['borrar'];
   $sql = "DELETE FROM proyectos WHERE `proyectos`.`id` =".$id;
  $objConexion->ejecutar($sql);

  header("location:portafolio.php");

}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");

// print_r($proyectos);

?>

<div class="container">
  <div class="row">
    
  <!-- creamos un div y lo dividimos a la mitad (de 6 c/u) -->
    <div class="col-md-6">

      <!-- form -->
      <br>
      <div class="card">
        <div class="card-header">
          Datos del proyecto
        </div>
        <div class="card-body">
          <form action="portafolio.php" method="post" enctype="multipart/form-data">

            Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
            <br>
            Imagen del proyecto: <input required class="form-control" type="file" name="archivo" id="">
            <br>
            Descripcion:
            <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>
            <br>
            

            <input class="btn btn-success" type="submit" value="Enviar proyecto">

          </form>
        </div>
      </div>

    </div>  
    <div class="col-md-6">

      <!-- tabla -->
      <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre Proyecto</th>
              <th scope="col">Imagen</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>

            <!-- este tr es el que vamos a repetir dependiendo la cantidad de registros -->
            <?php foreach($proyectos as $proyecto) { ?>
            <tr class="">
              <td><?php echo $proyecto['id']; ?></td>
              <td><?php echo $proyecto['nombre']; ?></td>
              <td>
              
              <img width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt="" srcset="">

            
              </td>
              <td><?php echo $proyecto['descripcion']; ?></td>
              <td> <a
                name=""
                id=""
                class="btn btn-danger"
                href="?borrar=<?php echo $proyecto['id']; ?>"
                role="button"
                >Eliminar</a>
               </td>
            </tr>
            <?php } ?>
           
          </tbody>
        </table>
      </div>
      
    </div>

  </div>
</div>
  


<?php include("footer.php"); ?>