<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
            $usuario = $_POST['usuario'];
            $mail = $_POST['mail'];
            $contraseña = $_POST['contraseña'];
            $pais = $_POST['pais'];

            $host="localhost";
            $user="root";
            $pass="";
            $database="";

            $conexion = mysqli_connect("localhost", "root", "", "");
            if ($conexion = false) {
                die("Falló la conexión" . mysqli_connect_error());
            }

            $query1="INSERT INTO usuarios VALUES ('$usuario', '$mail', '$contraseña', '$pais')";

            $consulta = mysqli_query($conexion,$query1) or die("Hubo un error" . mysqli_error($conexion))
            mysqli_close($conexion);
        ?>
    </body>
</html>