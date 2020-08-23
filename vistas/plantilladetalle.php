<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilosdetalle.css">

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
 <div class="fondodetalle">
        <center>
           <img src="../imagenes/detalleproducto.png" class="mt-1 imgc " width="500" height="340">
        </center>
      </div>
       <nav class="navbar navbar-expand-lg navbar-light bg-warning">
       </nav>
<br>
   <div class="row">
        <div class="col-sm-6 mx-auto">
          <table class="table table-bordered">
              <thead class="thead-dark ">
                <tr>
                  <th scope="col">Producto</th>
                  <th scope="col">Valor</th>                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Codigo</th>
                  <td> <?=$producto->codigo_prod ?> </td>
                </tr>
                <tr>
                  <th scope="row">Nombre</th>
                  <td> <?=$producto->nombre_prod ?> </td>
                </tr>
                <tr>
                  <th scope="row">Imagen</th>
                  <td> 
                      <img src="<?=$producto->imagen_prod?>"width="300" height="300">
                   </td>
                </tr>
                <tr>
                  <th scope="row">Precio</th>
                  <td> <?=$producto->precio_prod ?> </td>
                </tr>
                <tr>
                  <th scope="row">Marca</th>
                  <td> <?=$producto->marca_prod ?> </td>
                </tr>
                <tr>
                  <th scope="row">Talla</th>
                  <td> <?=$producto->talla_prod ?> </td>
                </tr>
                <tr>
                  <th scope="row">Cedula cliente</th>
                  <td> <?=$producto->cedula_cli ?> </td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>

  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>