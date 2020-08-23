<?php 
  session_start();
  if (isset($_GET["accion"])) {
  $mensaje ="";
  $clase ="";
  switch ($_GET["accion"]) {
    case 1:
       $mensaje="El usuario se creo correctamente";
        $clase="alert alert-success";
        break;
    case 2:
       $mensaje="El usuario no se creo";
        $clase="alert alert-danger";
        break;
    case 3:
      $mensaje="El usuario no existe";
        $clase="alert alert-danger";
        break;
    case 4:
      $mensaje="Contraseña incorrecta";
        $clase="alert alert-danger";
      break;
    case 5:
      $mensaje="El Producto se Agrego correctamente";
        $clase="alert alert-success";
        break;
    case 6:
      $mensaje="El Producto no se creo";
        $clase="alert alert-danger";
      break;
     case 7:
        $mensaje="El producto se actualizo correctamente";
        $clase="alert alert-success";  
        break;
    case 8:
        $mensaje="El producto no se actualizo";
        $clase="alert alert-danger";
        break;
    case 9:
        $mensaje="El producto se elimino correctamente";
        $clase="alert alert-success";
        break;
    case 10:
        $mensaje="El producto no se elimino";
        $clase="alert alert-danger";
        break;
    }
  }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilosg.css">
   
    <title>Gangazo Store</title>
    <link rel="icon" type="image/png" href="imagenes/faviconnn.png"/>
  </head>
  <body>
    <div class="container-fluid">
      <div class="fondo">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <?php
              if (isset($_SESSION["login"])) { ?>
            <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="controlador/scriptcrear.php">Agregar Productos <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="controlador/scriptmostrar.php">Mostrar Productos<span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link active" href="controlador/scriptcerrarsesion.php">Cerrar Sesión<span class="sr-only">(current)</span></a>
      </li>
     </ul>
  </div>
            <?php
            }
            else{
              ?>
            <a class="navbar-brand" href="controlador/scriptingresar.php">Iniciar Sesión</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="controlador/scriptregistrar.php">Registrarme</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <?php
              } 
               ?>
            <span class="navbar-text float-right">
                <div class="iconos ">
                   <a href="https://www.instagram.com/gangazo_store/?hl=es-la" target="_blank"><img alt="Siguenos en Instagram" src="https://lh3.googleusercontent.com/-D-erW-8vZFo/UIqE3H6oUuI/AAAAAAAABgE/4kh346Lwaxk/s48/instagram48.png" width=30 height=30  /></a>
                      <a href="https://www.facebook.com/GangazoStore/?ref=bookmarks" target="_blank"><img alt="Siguenos en Facebook" src="https://lh3.googleusercontent.com/-NSLbC_ztNls/T6VX0g6z8AI/AAAAAAAAA0A/_vyIBrmZbuY/s48/facebook48.png" width=30 height=30  /></a>
                </div> 
            </span>

        </nav>
        <center>
          
        
        <img src="imagenes/mujer.png" class="mt-1 mujer " width="300" height="300"> 
        <img src="imagenes/logo5.png" class="mt-1 imgc " width="350" height="300">
        
        </center>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <h1>Bienvenidos</h1>
      </nav>

      </div>
      <?php 
      if(isset($_GET["accion"])){
      ?>
      <div class="<?=$clase?>" role="alert">
        <?=$mensaje?>
      </div>
    <?php } ?>
      
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>