<?php

$nombre = $_POST['nombreAgregar'];
$material = $_POST['materialAgregar'];
$precio = $_POST['precioAgregar'];
$cantidad = $_POST['cantidadAgregar'];

if ($nombre === '' || $material === '' || $cantidad === ''){
  echo json_encode('error');

} else {
  include "conexion.php";
  require 'conexion.php';
  // Check connection
  if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
  }else{
    echo "db conected";
  }

  $sql = "INSERT INTO muebles (nombre, material,precio, cantidad)
  VALUES ('$nombre', '$material', '$precio', '$cantidad')";

  if (mysqli_query($conn, $sql)) {
    echo json_encode ('Registro grabado correctamente en la BD: ' . $nombre . ' '  . $material . ' ' . $precio. ' ' . $cantidad);
  } else {
    echo json_encode ('Error: ' . $sql . '<br>' . mysqli_error($conn));
  }

  $conn->close();
  }
?>