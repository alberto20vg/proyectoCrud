<!doctype html>
<html lang="en">
  
  <?php

  session_start();
  
  $usuario = $_SESSION['sesion'];
  
  if (!isset($usuario)||$usuario!='admin') {
      header("location: paginaUser.php");
  }
  ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administrador</title>
  <link rel="icon" type="image/png" href="icono.png" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <script>
    $(function () {
      $(document).tooltip();
    });
  </script>
  <script>
    $(function () {
      $("#tabs").tabs();
    });
  </script>
</head>

<body>

  <div id="tabs">
    <ul>
      <li><a href="#tabs-1">Formulario</a></li>
      <li><a href="#tabs-2">Tabla</a></li>
      <li><a href="#tabs-3" onclick="location.href='cerrar_sesion.php'">Cerrar Sesion</a></li>
    </ul>
    <div id="tabs-1">
      <form id='formularioAgregar'>
        <label>Nombre</label>
        <input type="text" name="nombreAgregar" class="form-control input" title="Indique el nombre del mueble">
        <br>
        <label>Material</label>
        <input type="text" name="materialAgregar" class="form-control input" title="Indique el material prioritario del mueble">
        <br>
        <label>Precio</label>
        <input type="number" name="precioAgregar" class="form-control input" title="Indique el precio que tendrá">
        <br>
        <label>Cantidad</label>
        <input type="number" name="cantidadAgregar" class="form-control input" title="Indique la cantidad que tendrá de stock incial">
        <br>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="btnAgregar">Agregar</button>
      </form>
    </div>
    <div id="tabs-2">
      <div class="container">
        <div id="tabla"></div>
        <!-- Modal -->
        <div class="modal fade" id="modalEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
          aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modificar Mueble</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id='formularioEditar'>
                  <input type="text" name="idMueble" hidden="" id="idMueble">
                  <label>Nombre</label>
                  <input type="text" name="nombreEditar" id="nombreEditar" class="form-control input">
                  <label>Material</label>
                  <input type="text" name="materialEditar" id="materialEditar" class="form-control input">
                  <label>Precio</label>
                  <input type="number" name="precioEditar" id="precioEditar" class="form-control input">
                  <label>Cantidad</label>
                  <input type="number" name="cantidadEditar" id="cantidadEditar" class="form-control input">
                  <br>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Volver</button>
                  <button type="submit" class="btn btn-primary" id="btnModificar">Modificar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <script>
          $(document).ready(function () {
            $('#tabla').load('tabla.php');
          });
        </script>
        <script>
          $(document).ready(function () {
            $('#tabla').load('tabla.php');
          });
        </script>

        <script src="fetch.js"></script>
        <script src="funciones.js"></script>
      </div>
    </div>
    <div id="tabs-3">
      
    </div>
  </div>


</body>

</html>