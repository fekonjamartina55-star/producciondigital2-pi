<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LookBook Cinema · Iniciar Sesión</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/estilo.css">
        <link rel="icon" href="./img/LKBC - Icon.ico">
    </head>

    <body>
        <header>
            <a href="index.php"><img src="./img/LBCLOGO.png" height="100rem" width="200rem" class="logo"></a>
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

        <main class="mainform">
            <section class="formatoform">
                <div class="formulario">
                    <form action="recibeform.php" method="post">

                            <div class="divform">
                                <label for="usuario">Usuario:</label>
                                <br>
                                <br>
                                <input type="text" id="usuario" name="usuario" placeholder="Juan" required>
                            </div>

                            <div class="divform">
                                <label for="mail">Correo Electrónico:</label>
                                <br>
                                <br>
                                <input type="email" id="mail" name="mail" placeholder="Juan@gmail.com" required>
                            </div>

                            <div class="divform">
                                <label for="contraseña">Contraseña:</label>
                                <br>
                                <br>
                                <input type="password" id="contraseña" name="contraseña" required>
                            </div>

                            <div class="divform">
                                <label for="pais">País:</label>
                                <br>
                                <br>
                                <input type="text" id="pais" name="pais" placeholder="Argentina" required>
                            </div>

                            <div class="divform">
                                <input type="submit">
                                <input type="reset">
                            </div>
                        
                    </form>
                </div>
            </section>
        </main>

        <footer>
            <p>©2026 Desarrollado por Martina Fekonja Casiña & Ezequiel Lopez Mic </p>
        </footer>
    </body>
</html>