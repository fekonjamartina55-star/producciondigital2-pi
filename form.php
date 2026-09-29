<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="recibeform.php" method="post">
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
    </body>
</html>