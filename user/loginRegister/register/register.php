<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" type="image/x-icon" href="../../../common/img/logo.png">
    <title>Registrarse</title>
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
        </div>
    </div>
    <div class="sidetxt" style="display:none" id="mySidebar">
        <button id="cerrar" onclick="cerrar()">&times;</button>
        <a id="opcion" href="../../../pRecom/pMusica/musica.php"><button id="opcion">Musica</button></a>
        <a id="opcion" href="../../../pRecom/pVideojuegos/videojuegos.php"><button id="opcion">Videojuegos</button></a>
        <a id="opcion" href="../../../pRecom/pPelis/peliculas.php"><button id="opcion">Peliculas</button></a>
        <a id="opcion" href="../../../pRecom/pSeries/series.php"><button id="opcion">Series</button></a>
    </div>
  </header>

    <form form method='post' action='insertar.php'>

        <?php
            if(isset($_GET["control"])) { 
                $userControl = $_GET['control'];
                if($userControl != null){
                    if($userControl == 2){
                        echo"<h4>El nombre de usuario indicado ya esta en uso</h4>";
                    }elseif($userControl == 3){
                        echo"<h4>Las contraseñas no coinciden</h4>";
                    }
                }
            }
        ?>

        <h1>Registrarse</h1>
        <div class="nombreusu">
            <label for="nombreusu">Nombre de usuario:</label><br>
            <input type="text" name="nombreusu" id="nombreusu" maxlength="20"><br>
        </div>
        <div class="usuario">
            <label for="nombre">Nombre real:</label><br>
            <input type="text" name="nombre" id="nombre" maxlength="50"><br>
        </div>
        <div class="correo">
            <label for="correo">Correo:</label><br>
            <input type="email" name="correo" id="correo" maxlength="100"><br>
        </div>
        <div class="contrasenia">
            <label for="contrasenia">Contraseña:</label><br>
            <input type="password" name="contrasenia" id="contrasenia" maxlength="50"><br>
        </div>
        <div class="repecon">
            <label for="repecon">Repetir Contraseña:</label><br>
            <input type="password" name="repecon" id="repecon" maxlength="50"><br>
        </div>
        <div class="boton">
            <input type="submit" onclick="validar()" value="Registrarse">
        </div>
        <a id="cambio" href="../login/login.php">¿Ya tiene cuenta?</a>
    </form>

    <footer>
        <a href="../../avisoslegales/index.html" target="_blank">Avisos Legales</a>
    </footer>

    <script src="../../../common/js/sidebar.js"></script>

</body>
</html>