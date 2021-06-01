<!doctype html>
<html lang="en">
<?php

session_start();

$usuario = $_SESSION['sesion'];

if (!isset($usuario)) {
    header("location: login.php");
}
?>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuario</title>
    <link rel="icon" type="image/png" href="icono.png" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<nav style="margin: 5px;">
<button type="submit" class="btn btn-primary" data-bs-dismiss="modal" onclick="location.href='cerrar_sesion.php'">Cerrar Sesion</button>

</nav>
<script>
          $(document).ready(function () {
            $("#tabla").hide();
            $("#tabla").show(5000);
          });
        </script>
<div class="container">
<div class="row">


    <h2>Tabla Muebles</h2>
    <table id="tabla" class="table table-hover table-condensed table-bordered">

        <tr>
            <td>Nombre</td>
            <td>Material</td>
            <td>Precio</td>
            <td>Cantidad</td>
        </tr>

        <?php
        include "conexion.php";
        $sql = "SELECT id,nombre, material,precio, cantidad FROM muebles";

        $result = mysqli_query($conn, $sql);
        while ($ver = mysqli_fetch_row($result)) {

            $datos = $ver[0] . "," . $ver[1] . "," . $ver[2] . "," . $ver[3]. "," . $ver[4];
        ?>
            <tr>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[3] ?></td>
                <td><?php echo $ver[4] ?></td>
              
            </tr>
        <?php
        }
        ?>
    </table>
</div>
</div>
</html>