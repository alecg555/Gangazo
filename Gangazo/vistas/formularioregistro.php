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
            <label for="nombres">Nombre</label>
            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ejemplo: Carlos">
          </div>
          <div class="form-group col-md-5">
              <label for="apellidos">Apellido</label>
              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ejemplo: Lopez Marin">
            </div>
          <div class="form-group  col-md-10 ">
            <label for="login">Usuario</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Login">
          </div>
          <div class="form-group">
                  <label for="tipo">Tipo</label>
                  <select class="form-control" id="tipo" name="tipo">
                    <option value="0">Seleccione tipo de usuario</option>
                     <option value="1">Administrador</option>
                      <option value="2">Usuario</option>
                  </select>
                 
            </div>
          <div class="form-group col-md-5">
            <label for="clave">Clave</label>
            <input type="password" class="form-control" id="clave" name="clave">
          </div>
          <div class="form-group col-md-6">
              <label for="identificacion">Nº Identificacion</label>
              <input type="number" class="form-control" id="identificacion" name="identificacion" placeholder="Ingrese numero de identificacion">
            </div>
            <div class="form-group col-md-4">
              <label for="tipoidentificacion">Tipo De Identificacion</label>
              <select id="inputState" class="form-control">
                <option selected>CC</option>
                <option selected>TI</option>
                <option selected>RC</option>
                <option selected>CE</option>
              </select>
            </div>
           <div class="form-group col-md-6">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Cll(Cra) 00 # 00-00">
          </div>
           <div class="form-group col-md-4">
            <label for="barrio">Barrio</label>
            <input type="text" class="form-control" id="barrio" name="barrio">
          </div>
             <button type="submit" class="btn btn-warning col-md-10">REGISTRARME</button>
            </div>
          </form>
   


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>