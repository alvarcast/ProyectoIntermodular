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

        include "infofetch/name.php";
        include "infofetch/karma.php";
        include "infofetch/desc.php";
        include "infofetch/img.php";
        include "infofetch/uid.php";

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

            <a id="opcion" href="../../pRecom/pMusica/index.html"><button id="opcion">Musica</button></a>
            <a id="opcion" href="../../pRecom/pVideojuegos/index.html"><button id="opcion">Videojuegos</button></a>
            <a id="opcion" href="../../pRecom/pPelis/index.html"><button id="opcion">Peliculas</button></a>
            <a id="opcion" href="../../pRecom/pSeries/index.html"><button id="opcion">Series</button></a>
        </div>
    </header>

    <h1>Perfil</h1>

    <div class="cajausuario">
        <div class="cabeza">
            <div class="imagencabeza">

            <?php

            if($img = " " OR $img = null){
                echo "<img src='../../common/img/default.png'>";
            }elseif(isset($img)){
                echo "<img src='$img'>";
            }

            ?>
                
            </div>
            <div class="pcabeza">
                <div class="pflex">
                    <div class="sec1">
                        <h2>Nombre de usuario:</h2>

                        <?php echo "<p>$name</p>"; ?>

                    </div>
                    <div class="sec2">
                        <h2>Puntuacion:</h2>

                        <?php echo "<p>$karma</p>"; ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="descripcion">
            <h3>Descripcion:</h3>
            <form action="update/actualizar.php" method="post">

                <?php echo "<textarea name='desc' placeholder='Escribe algo sobre ti...'>$desc</textarea>"; ?>
                
                <div class="alibot">
                    <input type="file" accept=".jpg, .jpeg, .png" name="imgusu"></input>
                    <button type="submit">Enviar</button>

                    <?php echo "<p id='uid'>UID: $uid</p>"; ?>

                </div>
            </form>
        </div>
    </div>

    <h1>Recomendaciones</h1>

    <?php include"../../pRecom" ?>

    <footer>
        <a href="../avisoslegales/index.html" target="_blank">Avisos Legales</a>
    </footer>

    <script src="../../common/js/sidebar.js"></script>
    <script src="../../common/js/likedislike.js"></script>
    
</body>
</html>