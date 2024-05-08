<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" type="image/x-icon" href="../../common/img/logo.png">
</head>
<body>

    <?php

        include "../../common/php/conexion.php";

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
        }
            
        session_start();

    ?>

    <header>
        <div class="objheader">
            <div class="objizquierda">
                <button onclick="abrir()">☰</button>
                <a href="../../pRecom/pMusica/index.html">Musica</a>
                <a href="../../pRecom/pVideojuegos/index.html">Videojuegos</a>
                <a href="../../pRecom/pPelis/index.html">Peliculas</a>
                <a href="../../pRecom/pSeries/index.html">Series</a>
            </div>
            <div class="objderecha">
                <div class="login">
                    <a href="../../FrontPage/index.php">Inicio</a>
                </div>

                <?php

                echo "  <div class='login'>
                            <form action='../../common/php/cerrar.php'>
                                <button type='submit' name='logout'>Cerrar Sesion</button>
                            </form>
                        </div>";

                ?>

                <div class="barra">
                    <input type="text" placeholder="Busqueda..." name="search">
                    <button type="submit">Buscar</button>
                </div>
            </div>
        </div>
        <div class="sidetxt" style="display:none" id="mySidebar">
            <button id="cerrar" onclick="cerrar()">&times;</button>
            <a id="opcion" href="../../FrontPage/Trabajofinalhome.html"><button id="opcion">Inicio</button></a>

            <?php

            echo "  <form action='../../common/php/cerrar.php'>
                        <a id='opcion' href='../../FrontPage/Trabajofinalhome.html'><button id='opcion'>Cerrar Sesion</button></a>
                    </form>";

            ?>

            <a id="opcion" href="../../pRecom/pMusica/musica.php"><button id="opcion">Musica</button></a>
            <a id="opcion" href="../../pRecom/pVideojuegos/index.php"><button id="opcion">Videojuegos</button></a>
            <a id="opcion" href="../../pRecom/pPelis/index.php"><button id="opcion">Peliculas</button></a>
            <a id="opcion" href="../../pRecom/pSeries/index.php"><button id="opcion">Series</button></a>
        </div>
    </header>

    <section class="wrapper">
        <div class="top">Perfil</div>
        <div class="bottom" aria-hidden="true">Perfil</div>
    </section>

    <?php include "usuariofetch.php" ?>

    <section class="wrapper">
        <div class="top">Recomendaciones</div>
        <div class="bottom" aria-hidden="true">Recomendaciones</div>
    </section>

    <div class="selectores">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <select name="opcion" onchange="this.form.submit()">
                <option value="1">Musica</option>
                <option value="2">Videojuegos</option>
                <option value="3">Peliculas</option>
                <option value="4">Series</option>
            </select>
        </form>
        <select class="selecsus">
            <option value="0">Generos</option>
            <option value="1">Clasica</option>
            <option value="2">Jazz</option>
            <option value="3">Blues</option>
            <option value="4">Gospel</option>
            <option value="5">Soul</option>
            <option value="6">Pop</option>
            <option value="7">Rock and Roll</option>
            <option value="8">Country</option>
            <option value="9">Electronica</option>
            <option value="10">Disco</option>
            <option value="11">Reggae</option>
            <option value="12">Salsa</option>
            <option value="13">Flamenco</option>
            <option value="14">Ranchera</option>
            <option value="15">Rap</option>
            <option value="16">Reggaeton</option>
            <option value="17">Metal</option>
            <option value="18">Funk</option>
            <option value="19">Bossa Nova</option>
            <option value="20">Melodica</option>
            <option value="21">Infantil</option>
        </select>
        
        <a id='creacion' href='../../pRecom/pMusica/creacionmusica/crear.php'><button>+</button></a>
    </div>
    

    <?php

    include "../../common/php/conexion.php";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }

    if(isset($_POST['opcion'])) {
        // No file was selected for upload, your (re)action goes here
        $opcion = $_POST['opcion'];
    
    }else{
        $opcion = 1;
    }

    if($opcion == 1){
        include "urfetch/mfetch.php";
    }

    ?>

    <footer>
        <a href="../avisoslegales/index.html" target="_blank">Avisos Legales</a>
    </footer>

    <script src="../../common/js/sidebar.js"></script>
    <script src="../../common/js/likedislike.js"></script>
    
</body>
</html>