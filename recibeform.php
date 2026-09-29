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

            $conexion = mysqli_connect("localhost", "root", "", "lookbookcinema");
            if (!$conexion){
                die("Falló la conexión" . mysqli_connect_error());
            }

            $query1 = "INSERT INTO usuarios (usuario, mail, contraseña, pais) VALUES ('$usuario', '$mail', '$contraseña', '$pais')";
            if (mysqli_query($conexion, $query1)) {
                echo "Usuario registrado correctamente.";
            }else {
                echo "Error al enviar datos." . $query1 . "<br>" . mysqli_error($conexion);
            }

            mysqli_close($conexion);
        ?>
    </body>
</html>