<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0;URL=login.php">
</head>

<body>

    <?php
    include('conexion.php');
    require 'conexion.php';

    session_start();

    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    $contrasenaMd5 = md5($contrasena);
  

    $query = "SELECT COUNT(*) AS numero_usuarios FROM usuarios WHERE nombre='$nombre' AND contrasena = '$contrasenaMd5'";
    $statement = mysqli_query($conn, $query);
    $array_statement = mysqli_fetch_array($statement);

    if ($array_statement['numero_usuarios'] > 0) {
        $_SESSION['sesion'] = $nombre;
        if ($nombre == 'admin') {
            header("location: paginaAdmin.php");
        } else {
            header("location: paginaUser.php");
        }
    } else {
        echo '<script language="javascript">alert("Datos incorrectos");</script>';
    }
    ?>