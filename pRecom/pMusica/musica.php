<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musica</title>
    <link rel="stylesheet" href="../rstyles.css">
    <link rel="icon" type="image/x-icon" href="../../common/img/logo.png">
</head>
<style media="screen">
    .seleccionado{
        color: white;
        outline: 1px solid black;
    }
</style>
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
                                <a href='../user/usuario/usu.php'>Perfil</a>
                                </div>";
                                
                        echo "  <div class='login'>
                                <form action='../../common/php/cerrar.php'>
                                    <button type='submit' name='logout'>Cerrar Sesion</button>
                                </form>
                                </div>";
                    }else{
                        echo "  <div class='login'>
                                    <a href='../user/loginRegister/login/login.php'>Iniciar Sesion</a>
                                </div>  ";
                    }
                    
                ?>

             <div class="barra">
                    <input type="text" placeholder="Busqueda..." name="search">
                    <button type="submit">Buscar</button>
             </div>
           </div>
        </div>
        <div class="sidetxt" style="display:none" id="mySidebar">
          <button id="cerrar" onclick="cerrar()">&times;</button>
          <?php

                if(isset($_SESSION['id'])){
                    echo "<a id='opcionOC' href='../../user/usuario/usu.php'><button id='opcion'>Perfil</button></a>";
                }else{
                    echo "<a id='opcionOC' href='../../user/loginRegister/login/login.php'><button id='opcion'>Iniciar Sesion</button></a>";
                }

            ?>
          <a id="opcionOC" href="../../FrontPage/Trabajofinalhome.html"><button id="opcion">Inicio</button></a>
          <a id="opcion" href="../pVideojuegos/index.html"><button id="opcion">Videojuegos</button></a>
          <a id="opcion" href="../pPelis/index.html"><button id="opcion">Peliculas</button></a>
          <a id="opcion" href="../pSeries/index.html"><button id="opcion">Series</button></a>
        </div>
    </header>

    <section class="wrapper">
        <div class="top">Musica</div>
        <div class="bottom" aria-hidden="true">Musica</div>
    </section>

    <div class="selectores">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <select name ="opcion">
                <option value="0">Mas nuevo</option>
                <option value="1">Mas antiguo</option>
                <option value="2">Nombre</option>
                <option value="3">Autor</option>
                <option value="4">Valoracion</option>
            </select>
            <select name ="opcion2" class="selecsus">
                <option value="0">Todos</option>
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
            <button id="sbusqueda" type="submit">🔍</button>
        </form>
        
        <a id='creacion' href='<?php if(isset($_SESSION['id'])){echo"creacionmusica/crear.php";}else{echo"../../user/loginRegister/login/login.php";}; ?>'><button>+</button></a>
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
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 2) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 3) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 4) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 5) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 6) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 7) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 8) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 9) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 10) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 11) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 12) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 13) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 14) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 15) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 16) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 17) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 18) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 19) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 20) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif ($opcion2 == 21) {
                if($opcion == 1){
                    include "fetch/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetch/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetch/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetch/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetch/musicafetch.php";
                }
            } elseif($opcion2 == 0) {
                if($opcion == 1){
                    include "fetchnowhere/musicafetchold.php";
                }elseif($opcion == 2){
                    include "fetchnowhere/musicafetchname.php";
                }elseif($opcion == 3){
                    include "fetchnowhere/musicafetchauth.php";
                }elseif($opcion == 4){
                    include "fetchnowhere/musicafetchrating.php";
                }elseif($opcion == 0){
                    include "fetchnowhere/musicafetch.php";
                }
            }
        }else{
            include "fetchnowhere/musicafetch.php";
        }
        
    ?>

    <footer>
        <a href="../../user/avisoslegales/index.html" target="_blank">Avisos Legales</a>
    </footer>
    
    <script src="../../common/js/sidebar.js"></script>
    <script src="../../common/js/likedislike.js"></script>
    
</body>
</html>
