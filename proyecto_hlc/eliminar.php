<?php
  include "conexion.php";
  require 'conexion.php';

$id = $_POST['id'];

$sql = "DELETE FROM muebles where id = '$id'";
echo $result=mysqli_query($conn, $sql);
?>