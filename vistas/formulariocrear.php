<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estiloscrear.css">

    <title>Gangazo Store</title>
     <link rel="icon" type="image/png" href="../imagenes/faviconnn.png"/>
  </head>
  <body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="../index.php">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="scriptcrear.php">Agregar Productos <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item active">
        <a class="nav-link" href="scriptmostrar.php">Mostrar Productos<span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link active" href="../controlador/scriptcerrarsesion.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
      </li>
     </ul>
  </div>
</nav>
      <div class="fondo">
        <center>
           <img src="../imagenes/fondomuñecacrear.png" class="mt-1 imgc " width="500" height="300">
        </center>
      </div>
        <nav class=" navbar-light bg-warning">
          <center>
            <h2 class="col-md-4">Agregar Productos</h2>
         </center>
       </nav>
         <form method="post" action="scriptalmacenar.php" enctype="multipart/form-data">
                  <div class="col-sm-5 mx-auto form-row">
            <div class="form-group col-md-5">
            <label for="codigo">Codigo Producto</label>
            <input type="text" class="form-control" id="codigo" name="codigo">
          </div>
          <div class="form-group col-md-5">
              <label for="nombre">Nombre del producto</label>
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
          <div class="form-group  col-md-5 ">
            <label for="preio">Precio del Producto</label>
            <input type="text" class="form-control" id="precio" name="precio" >
          </div>
          <div class="form-group  col-md-5  ">
            <label for="marca">Marca del producto</label>
            <input type="text" class="form-control" id="marca" name="marca" >
          </div>
          <div class="form-group  col-md-5  ">
            <label for="talla">Talla del Producto</label>
            <input type="text" class="form-control" id="talla" name="talla" >
          </div>
          <div class="form-group  col-md-5  ">
            <label for="cedula">Cedula</label>
            <input type="document" class="form-control" id="cedula" name="cedula" >
          </div>
          <div class="form-group  col-md-10">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile02" name="imagen" id="imagen">
                <label for="imagen" class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Agregar imagen</label>
              </div>
          </div>
            
             <button type="submit" class="btn btn-warning col-md-10">INGRESAR PRODUCTO</button>
            </div>
          </form>
      </div>
   
     

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>