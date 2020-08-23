<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/estilosregistro.css">
    <title>Gangazo Store</title>
     <link rel="icon" type="image/png" href="../imagenes/faviconnn.png"/>
  </head>
  <body>
    <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <a class="navbar-brand" href="../index.php">Inicio</a>
</nav>
      <div class="fondo">
        <center>
           <img src="../imagenes/muñeco.png" class="mt-1 imgc " width="350" height="300">
        </center>
         </div>
        <nav class=" navbar-light bg-warning">
          <center>
            <h2 class="col-md text-center">Por favor ingresa tus datos personales</h2>
         </center>
          </nav>
            <form method="post" action="scriptalmacenarusuario.php">
                  <div class="col-sm-5 mx-auto form-row">
            <div class="form-group col-md-5">
            <label for="nombres">Nombres</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo: Carlos" required>
          </div>
          <div class="form-group col-md-5">
              <label for="apellidos">Apellidos</label>
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ejemplo: Lopez Marin" required>
            </div>
          <div class="form-group  col-md-10 ">
            <label for="login">Usuario</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
          </div>
          <div class="form-group">
                  <label for="tipo">Tipo de Usuario</label>
                  <select class="form-control" id="tipo" name="tipo" required>
                    <?php
                    foreach($tipos as $tipo){?>
                     <option value="<?=$tipo->tip_id ?>"> <?=$tipo->tip_nombre ?> </option>
                    <?php
                      }
                    ?>
                  </select>
                 
            </div>
          <div class="form-group col-md-5">
            <label for="clave">Clave</label>
            <input type="password" class="form-control" id="clave" name="clave" required>
          </div>
          <div class="form-group col-md-10">
              <label for="cedula">Nº Identificacion</label>
              <input type="number" class="form-control" id="cedula" name="cedula" placeholder="Ingrese numero de identificacion" required>
            </div>
            <div class="form-group col-md-10">
              <label for="correo">Correo Electronico</label>
              <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese correo electronico" required>
            </div>
            <div class="form-group col-md-10">
              <label for="telefono">Telefono</label>
              <input type="number" class="form-control" id="telefono" name="telefono" required>
            </div>
           <div class="form-group col-md-6">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Cll(Cra) 00 # 00-00- Barrio" required>
          </div>
             <button type="submit" class="btn btn-warning col-md-10">REGISTRARME</button>
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

