<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" type="image/x-icon" href="../../../common/img/logo.png">
    <title>Iniciar Sesion</title>
</head>
<body>

    <header>
        <div class="objheader">
            <div class="objizquierda">
                <button onclick="abrir()">☰</button>
                <a href="../../../pRecom/pMusica/musica.php">Musica</a>
                <a href="../../../pRecom/pVideojuegos/videojuegos.php">Videojuegos</a>
                <a href="../../../pRecom/pPelis/peliculas.php">Peliculas</a>
                <a href="../../../pRecom/pSeries/series.php">Series</a>
            </div>
            <div class="objderecha">
                <div class="inicio">
                    <a href="../../../FrontPage/index.php">Inicio</a>
                </div>
                <div class="barra">
                    <input type="text" placeholder="Busqueda..." name="search">
                    <button type="submit">Buscar</button>
                </div>
            </div>
        </div>
        <div class="sidetxt" style="display:none" id="mySidebar">
            <button id="cerrar" onclick="cerrar()">&times;</button>
            <a id="opcion" href="../../../FrontPage/index.php"><button id="opcion">Inicio</button></a>
            <a id="opcion" href="../../../pRecom/pMusica/musica.php"><button id="opcion">Musica</button></a>
            <a id="opcion" href="../../../pRecom/pVideojuegos/videojuegos.php"><button id="opcion">Videojuegos</button></a>
            <a id="opcion" href="../../../pRecom/pPelis/peliculas.php"><button id="opcion">Peliculas</button></a>
            <a id="opcion" href="../../../pRecom/pSeries/series.php"><button id="opcion">Series</button></a>
        </div>
    </header>

    <form action="validar_sesion.php" method="post">

        <?php
            if(isset($_GET["control"])) { 
                $userControl = $_GET['control'];
                if($userControl != null){
                    if($userControl == 2){
                        echo"<h4>Hay algun problema con el usuario</h4>";
                    }elseif($userControl == 3){
                        echo"<h4>Hay algun problema con la contraseña</h4>";
                    }
                }
            }
        ?>

        <h1>Iniciar sesión</h1>
        <div class="usuario">
            <label for="usuario">Usuario:</label><br>
            <input type="text" name="usuario" id="usuario"><br>
        </div>
        <div class="contrasenia">
            <label for="contrasenia">Contraseña:</label><br>
            <input type="password" name="contrasenia" id="contrasenia"><br>
        </div>
        <div class="boton">
            <button type="submit">Enviar</button>
        </div>
        <a id="cambio" href='../register/register.php'>Registrarse</a>
    </form>

    <footer>
        <a href="../../avisoslegales/index.html" target="_blank">Avisos Legales</a>
    </footer>

    <script src="../../../common/js/sidebar.js"></script>

</body>
</html>