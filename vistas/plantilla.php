<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Gangazo Store</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 mx-auto">
          <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Producto</th>
                  <th scope="col">Valor</th>                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Codigo </th>
                  <td> <?= $gangazostore1->getCodigo() ?> </td>
                </tr>
                <tr>
                  <th scope="row">Nombre</th>
                  <td> <?= $gangazostore1->getNombre() ?> </td>
                </tr>
                <tr>
                  <th scope="row">Imagen</th>
                  <td> <?= $gangazostore1->getImagen() ?> </td>
                </tr>
                <tr>
                  <th scope="row">Precio</th>
                  <td> <?= $gangazostore1->getPrecio() ?> </td>
                </tr>
                <tr>
                  <th scope="row">Marca</th>
                  <td> <?= $gangazostore1->getMarca() ?> </td>
                </tr>
                <tr>
                  <th scope="row">Talla</th>
                  <td> <?= $gangazostore1->getTalla() ?> </td>
                </tr>
                <tr>
                  <th scope="row">Cedula cliente</th>
                  <td> <?= $gangazostore1->getCedula() ?> </td>
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