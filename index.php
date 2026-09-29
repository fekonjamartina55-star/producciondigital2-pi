<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lookbook Cinema</title>
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
                </ul>
            </nav>
        </header>

        <main>
            <section class="grid">
                <article class="card">
                    <div class="clard-content">
                        <h2>Acerca de LookBook Cinema</h2>
                        <p>Es una enciclopedia visual de cine donde puedes buscar inspiración o información específica sobre películas, sin tener que navegar entre miles de páginas desordenadas. La página tiene contenido sobre directores, estilos visuales, planos de cámara, vestuarios, iluminación, géneros cinematográficos y mucho más, todo organizado de manera clara y
                        accesible. Fue creada principalmente para cinéfilos, estudiantes de cine y personas apasionadas por el mundo audiovisual que quieran aprender, analizar referencias o descubrir nuevas
                        ideas para sus proyectos.</p>
                    </div>
                    <div><img src="./img/camaraimgpng.png" class="camaraimg"></div>
                </article>
                    <h3>Directores Destacados</h3>
                    <p>Explora los directores más influyentes en el cine</p>
                        <ul id="director">
                            <li><img src="./img/Director1.jpeg" height="255" width="200"></li>
                            <li><img src="./img/Director3.jpeg" height="255" width="200"></li>
                            <li><img src="./img/Director4.jpeg" height="255" width="200"></li>
                            <li><img src="./img/Director5.jpeg" height="255" width="200"></li>
                            <li><img src="./img/Director6.jpeg" height="255" width="200"></li>
                            <li><img src="./img/Director7.jpeg" height="255" width="200"></li>
                            <li><img src="./img/Gretagerwig.jpeg" height="255" width="200"></li>
                        </ul>
                </article>
            </section>
                <article>
                    <h3>Películas que revolucionaron el cine</h3>
                    <p>Películas que hicieron historia</p>
                        <ul id="peliculas"> 
                            <li><img src="./img/2001.jpeg" height="350" width="235"></li>
                            <li><img src="./img/magooz.jpeg" height="350" width="235"></li>
                            <li><img src="./img/Matrix.jpeg" height="350" width="235"></li>
                            <li><img src="./img/phycho.jpeg" height="350" width="235"></li>
                            <li><img src="./img/Stars Wars_ Episode IV - A New Hope (1977).jpeg" height="350" width="235"></li>
                            <li><img src="./img/citizen.jpeg" height="350" width="235"></li>
                        </ul>
                </article>
            </section>
        </main>

        <footer>
            <p>2026 LookBook Cinema por Martu</p>
        </footer>
    </body>
</html>