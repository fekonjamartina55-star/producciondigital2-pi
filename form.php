<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./estilos.css/estilo.css">
    </head>

    <body>
        <header>
            <a href="index.php"><img src="./img/LBCLOGO.png" id="logo"></a>
            <input type="text" placeholder="Buscar película o estética...">
            <nav>
                <ul>
                    <li><a href="iluminacion.php">Iluminación</a></li>
                    <li><a href="colores.php">Colores</a></li>
                    <li><a href="composicion.php">Composición</a></li>
                    <li><a href="planos.php">Planos</a></li>
                    <li><a href="vestuario.php">Vestuario</a></li>
                    <li><a href="form.php">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <form action="recibeform.php" method="post" class ="formulario">
                <div>
                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Juan" required>
                </div>
            
                <br>

                <div>
                    <label for="mail">Correo Electrónico:</label>
                    <input type="mail" id="mail" name="mail" placeholder="Juan@gmail.com" required>
                </div>

                <div>
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" required>
                </div>

                <br>

                <div>
                    <label for="pais">País:</label>
                    <input type="text" id="pais" name="pais" placeholder="Argentina" required>
                </div>

                <br>

                <div>
                    <input type="submit">
                    <input type="reset">
                </div>
            </form>
        </main>

        <footer>
            <p>2026 LookBook Cinema por Martu</p>
        </footer>
    </body>
</html>