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
            <a href="../../../pRecom/pMusica/index.html">Musica</a>
            <a href="../../../pRecom/pVideojuegos/index.html">Videojuegos</a>
            <a href="../../../pRecom/pPelis/index.html">Peliculas</a>
            <a href="../../../pRecom/pSeries/index.html">Series</a>
        </div>
        <div class="objderecha">
            <div class="inicio">
                <a href="../../../FrontPage/Trabajofinalhome.html">Inicio</a>
            </div>
            <div class="barra">
                <input type="text" placeholder="Busqueda..." name="search">
                <button type="submit">Buscar</button>
            </div>
        </div>
    </div>
    <div class="sidetxt" style="display:none" id="mySidebar">
        <button id="cerrar" onclick="cerrar()">&times;</button>
        <a id="opcion" href="../../../FrontPage/Trabajofinalhome.html"><button id="opcion">Inicio</button></a>
        <a id="opcion" href="../../../pRecom/pMusica/index.html"><button id="opcion">Musica</button></a>
        <a id="opcion" href="../../../pRecom/pVideojuegos/index.html"><button id="opcion">Videojuegos</button></a>
        <a id="opcion" href="../../../pRecom/pPelis/index.html"><button id="opcion">Peliculas</button></a>
        <a id="opcion" href="../../../pRecom/pSeries/index.html"><button id="opcion">Series</button></a>
    </div>
  </header>

    <form form method='post' action='insertar.php'>
        <h1>Registrarse</h1>
        <div class="nombreusu">
            <label for="nombreusu">Nombre de usuario:</label><br>
            <input type="text" name="nombreusu" id="nombreusu"><br>
        </div>
        <div class="usuario">
            <label for="nombre">Nombre real:</label><br>
            <input type="text" name="nombre" id="nombre"><br>
        </div>
        <div class="correo">
            <label for="correo">Correo:</label><br>
            <input type="email" name="correo" id="correo"><br>
        </div>
        <div class="contrasenia">
            <label for="contrasenia">Contraseña:</label><br>
            <input type="password" name="contrasenia" id="contrasenia"><br>
        </div>
        <div class="repecon">
            <label for="repecon">Repetir Contraseña:</label><br>
            <input type="password" name="repecon" id="repecon"><br>
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
    <script src="../../../common/js/checkpsw.js"></script>

</body>
</html>