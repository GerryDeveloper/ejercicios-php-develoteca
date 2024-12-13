<?php include "header.php"; 
// min 06:06 -> crear tabla mysql
// video para crear la bd:    Phpmyadmin Crear base de Datos 02:59:36
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
          <form action="portafolio.php" method="post">

            Nombre del proyecto: <input class="form-control" type="text" name="nombre" id="">
            <br>
            Imagen del proyecto: <input class="form-control" type="file" name="archivo" id="">
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
            </tr>
          </thead>
          <tbody>
            <tr class="">
              <td scope="row">3</td>
              <td>Aplicacion web</td>
              <td>imagen.jpg</td>
            </tr>
            <tr class="">
              <td scope="row">Item</td>
              <td>Item</td>
              <td>Item</td>
            </tr>
          </tbody>
        </table>
      </div>
      
    </div>

  </div>
</div>
  


<?php include("footer.php"); ?>