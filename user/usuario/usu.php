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

    <div class="selectores">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <select name="opcion">
                <option value="0">Todos</option>
                <option value="1">Musica</option>
                <option value="2">Videojuegos</option>
                <option value="3">Peliculas</option>
                <option value="4">Series</option>
            </select>
            <select  name ="opcion2" class="selecsus">
                <option value="0">Mas nuevo</option>
                <option value="1">Mas antiguo</option>
                <option value="2">Nombre</option>
                <option value="3">Creador</option>
                <option value="4">Valoracion</option>
            </select>
            <button id="sbusqueda" type="submit">🔍</button>
        </form>
        
        <a id='creacion' href='../../pRecom/pMusica/creacionmusica/crear.php'><button>+</button></a>
    </div>
    

    <?php

    include "../../common/php/conexion.php";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $opcion = $_POST['opcion'];
        $opcion2 = $_POST['opcion2'];
        
        if($opcion2 == 1){
            if($opcion == 1){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetchold/mfetch.php";
            }elseif($opcion == 2){
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetchold/vfetch.php";
            }elseif($opcion == 3){
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetchold/pfetch.php";
            }elseif($opcion == 4){
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetchold/sfetch.php";
            }elseif($opcion == 0){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetchold/mfetch.php";
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetchold/vfetch.php";
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetchold/pfetch.php";
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetchold/sfetch.php";
            }
        }elseif($opcion2 == 2){
            if($opcion == 1){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetchname/mfetch.php";
            }elseif($opcion == 2){
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetchname/vfetch.php";
            }elseif($opcion == 3){
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetchname/pfetch.php";
            }elseif($opcion == 4){
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetchname/sfetch.php";
            }elseif($opcion == 0){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetchname/mfetch.php";
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetchname/vfetch.php";
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetchname/pfetch.php";
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetchname/sfetch.php";
            }
        }elseif($opcion2 == 3){
            if($opcion == 1){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetchauth/mfetch.php";
            }elseif($opcion == 2){
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetchauth/vfetch.php";
            }elseif($opcion == 3){
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetchauth/pfetch.php";
            }elseif($opcion == 4){
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetchauth/sfetch.php";
            }elseif($opcion == 0){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetchauth/mfetch.php";
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetchauth/vfetch.php";
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetchauth/pfetch.php";
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetchauth/sfetch.php";
            }
        }elseif($opcion2 == 4){
            if($opcion == 1){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetchrating/mfetch.php";
            }elseif($opcion == 2){
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetchrating/vfetch.php";
            }elseif($opcion == 3){
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetchrating/pfetch.php";
            }elseif($opcion == 4){
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetchrating/sfetch.php";
            }elseif($opcion == 0){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetchrating/mfetch.php";
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetchrating/vfetch.php";
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetchrating/pfetch.php";
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetchrating/sfetch.php";
            }
        }elseif($opcion2 == 0){
            if($opcion == 1){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetch/mfetch.php";
            }elseif($opcion == 2){
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetch/vfetch.php";
            }elseif($opcion == 3){
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetch/pfetch.php";
            }elseif($opcion == 4){
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetch/sfetch.php";
            }elseif($opcion == 0){
                echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
                include "urfetch/mfetch.php";
                echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
                include "urfetch/vfetch.php";
                echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
                include "urfetch/pfetch.php";
                echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
                include "urfetch/sfetch.php";
            }
        }
    }else{
        echo"<section class='wrapper'><div class='top'>Musica</div><div class='bottom' aria-hidden='true'>Musica</div></section>";
        include "urfetch/mfetch.php";
        echo"<section class='wrapper'><div class='top'>Videojuegos</div><div class='bottom' aria-hidden='true'>Videojuegos</div></section>";
        include "urfetch/vfetch.php";
        echo"<section class='wrapper'><div class='top'>Peliculas</div><div class='bottom' aria-hidden='true'>Peliculas</div></section>";
        include "urfetch/pfetch.php";
        echo"<section class='wrapper'><div class='top'>Series</div><div class='bottom' aria-hidden='true'>Series</div></section>";
        include "urfetch/sfetch.php";
    }

    ?>

    <footer>
        <a href="../avisoslegales/index.html" target="_blank">Avisos Legales</a>
    </footer>

    <script src="../../common/js/sidebar.js"></script>
    
</body>
</html>