<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
    <link rel="stylesheet" href="../rstyles.css">
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
          </div>
           <div class="objderecha">
                    
                <?php
                    echo "  <div class='login'>
                                <a href='../../FrontPage/index.php'>Inicio</a>
                            </div>";
                    if(isset($_SESSION['id'])){
                        echo "  <div class='login'>
                                <a href='../../user/usuario/usu.php'>Perfil</a>
                                </div>";
                                
                        echo "  <div class='login'>
                                <form action='../../common/php/cerrar.php'>
                                    <button type='submit' name='logout'>Cerrar Sesion</button>
                                </form>
                                </div>";
                    }else{
                        echo "  <div class='login'>
                                    <a href='../../user/loginRegister/login/login.php'>Iniciar Sesion</a>
                                </div>  ";
                    }
                    
                ?>
                <form method="post" action="searchres.php" id="barraform">
                    <div class="barra">
                        <input type="text" placeholder="Busqueda..." name="search">
                        <button type="submit">Buscar</button>
                    </div>
                </form>
           </div>
        </div>
        <div class="sidetxt" style="display:none" id="mySidebar">
          <button id="cerrar" onclick="cerrar()">&times;</button>

          <a id="opcionOC" href="../../FrontPage/index.php"><button id="opcion">Inicio</button></a>
          
          <?php

                if(isset($_SESSION['id'])){
                    echo "<a id='opcionOC' href='../../user/usuario/usu.php'><button id='opcion'>Perfil</button></a>";
                }else{
                    echo "<a id='opcionOC' href='../../user/loginRegister/login/login.php'><button id='opcion'>Iniciar Sesion</button></a>";
                }

            ?>
          
          <a id="opcion" href="../pMusica/musica.php"><button id="opcion">Musica</button></a>
          <a id="opcion" href="../pVideojuegos/videojuegos.php"><button id="opcion">Videojuegos</button></a>
          <a id="opcion" href="../pPeliculas/peliculas.php"><button id="opcion">Peliculas</button></a>
        </div>
    </header>

    <section class="wrapper">
        <div class="top">Series</div>
        <div class="bottom" aria-hidden="true">Series</div>
    </section>

    <div class="selectores">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <select name ="opcion">
                <option value="0">Mas nuevo</option>
                <option value="1">Mas antiguo</option>
                <option value="2">Nombre</option>
                <option value="3">Direccion</option>
                <option value="4">Valoracion</option>
            </select>
            <select name ="opcion2" class="selecsus">
                <option value="0">Todos</option>
                <option value="1">Accion</option>
                <option value="2">Aventura</option>
                <option value="3">Ciencia Ficcion</option>
                <option value="4">Comedia</option>
                <option value="5">Policiaca</option>
                <option value="6">Terror</option>
                <option value="7">Romance</option>
                <option value="8">Drama</option>
                <option value="9">Suspense</option>
                <option value="10">Fantasia</option>
                <option value="11">Historica</option>
                <option value="12">Documental</option>
                <option value="13">Animacion</option>
                <option value="14">Musical</option>
                <option value="15">Social</option>
                <option value="16">Deporte</option>
            </select>
            <button id="sbusqueda" type="submit">🔍</button>
        </form>
        
        <a id='creacion' href='<?php if(isset($_SESSION['id'])){echo"creacionserie/crear.php";}else{echo"../../user/loginRegister/login/login.php";}; ?>'><button>+</button></a>
    </div>


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

            if ($opcion2 == 1) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 2) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 3) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 4) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 5) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 6) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 7) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 8) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 9) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 10) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 11) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 12) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 13) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 14) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 15) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif ($opcion2 == 16) {
                if($opcion == 1){
                    include "fetch/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetch/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetch/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/seriefetch.php";
                }
            } elseif($opcion2 == 0) {
                if($opcion == 1){
                    include "fetchnowhere/seriefetchold.php";
                }elseif($opcion == 2){
                    include "fetchnowhere/seriefetchname.php";
                }elseif($opcion == 3){
                    include "fetchnowhere/seriefetchauth.php";
                }elseif($opcion == 4){
                    include "fetchnowhere/seriefetchrating.php";
                }elseif($opcion == 0){
                    include "fetchnowhere/seriefetch.php";
                }
            }
        }else{
            include "fetchnowhere/seriefetch.php";
        }
        
    ?>

        <br><br><br>
    <footer>
        <a href="../../user/avisoslegales/index.html" target="_blank">Avisos Legales</a>
    </footer>
    
    <script src="../../common/js/sidebar.js"></script>
    <script src="../../common/js/likedislike.js"></script>
    
</body>
</html>