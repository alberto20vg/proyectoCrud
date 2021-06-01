<?php

$idEditar = $_POST['idMueble'];
$nombreEditar = $_POST['nombreEditar'];
$materialEditar = $_POST['materialEditar'];
$precioEditar = $_POST['precioEditar'];
$cantidadEditar = $_POST['cantidadEditar'];

if ($nombreEditar === '' || $materialEditar === '' || $cantidadEditar === '') {
  echo json_encode('error');
} else {
  include "conexion.php";
  require 'conexion.php';
  // Check connection
  if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
  } else {
    echo "db conected";
  }

  $sqlEditar = "UPDATE muebles SET nombre='$nombreEditar',material='$materialEditar',precio=$precioEditar,cantidad=$cantidadEditar where id=$idEditar";

  if (mysqli_query($conn, $sqlEditar)) {
    echo json_encode('Registro grabado correctamente en la BD: ' . $nombreEditar . ' '  . $materialEditar . ' ' . $cantidadEditar);
  } else {
    echo json_encode('Error: ' . $sqlEditar . '<br>' . mysqli_error($conn));
  }

  $conn->close();
}
