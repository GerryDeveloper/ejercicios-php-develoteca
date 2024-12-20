<?php 
// en login simplemente queremos no queremos un menu, 
// simplemente queremos un formulario para que el usuario se locale_get_display_language

// codigo por defecto dentro del body:
/*
<header>
      <!-- place navbar here -->
    </header>
    <main></main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    */

if($_POST){

  session_start();
  if( ($_POST['usuario']=='develoteca') && ($_POST['contrasenia']=='12345')) {
    
    
    // guardamos que el usuario se creo y lo redirigimos con header
    $_SESSION['usuario']='develoteca';

    // e  cho "logueado, ok";
    header("location:index.php");

  } else {
    echo "<script> alert('Usuario o constrasenia incorrecta'); </script>";
  }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>

  <body>
    
    <div class="container">

      <div class="row">
        <!-- 4 elementos en 3 espacio -->
        <div class="col-md-4" >
          
        </div>
        <div class="col-md-4" >

          <br>
          <div class="card">
            <div class="card-header">Iniciar Sesion</div>
            <div class="card-body">
              <form action="login.php" method="post">
              
                Usuario: <input class="form-control" type="text" name="usuario" id="">
                <br>
                Contrasenia: <input class="form-control" type="password" name="contrasenia" id="">
                <br>
                <button class="btn btn-success" type="submit">Entrar al portafolio</button>

              </form>
            </div>
            <div class="card-footer text-muted">

            </div>
          </div>
          

        </div>
        <div class="col-md-4" >
          
        </div>
      </div>
      
    </div>
    

    

  </body>
</html>

