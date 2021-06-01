<html lang="en">

<?php
session_start();
?>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Muebles</title>
        <link rel="icon" type="image/png" href="icono.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

        <center> <br>
                <h1> Ingrese Usuario</h1>
                <br>
                <form action="loguear.php" method="POST">
                        <div style="width:10%">
                                <label>
                                        Nombre Usuario</label>
                                <input class="form-control" type="nombre" name="nombre" />
                                <br>


                                <label>
                                        Contraseña
                                </label>


                                <input class="form-control" type="contrasena" name="contrasena" />
                        </div>
                        <br>
                        <br>
                        <button class="btn btn-primary" type="submit">Enviar</Button><br>

                </form>

        </center>

</body>

</html>