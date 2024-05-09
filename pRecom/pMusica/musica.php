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

                if(isset($_SESSION['id'])){
                    include "../pfp.php";
                }else{
                    echo "  <div class='login'>
                                <a href='../../user/loginRegister/login/login.php'>Iniciar Sesion</a>
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
        <select id="selec1">
            <option value="Destacado">Destacado</option>
            <option value="Lo mas Reciente">Lo mas Reciente</option>
            <option value="En Alza">En Alza</option>
        </select>
        <select id="selecsus">
            <option value="M0">Generos</option>
            <option value="M1">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '1'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M2">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '2'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M3">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '3'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M4">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '4'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M5">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '5'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M6">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '6'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M7">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '7'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M8">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '8'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M9">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '9'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M10">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '10'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M11">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '11'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M12">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '12'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M13">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '13'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M14">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '14'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M15">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '15'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M16">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '16'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M17">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '17'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M18">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '18'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M19">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '19'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M20">
            <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '20'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
            <option value="M21">
                <?php
                    $consulta = "SELECT GeneroMS FROM genero_m WHERE ID = '21'";
                    $result = $conn -> query($consulta);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo $row["GeneroMS"];
                    }
                ?>
            </option>
        </select>
        
        <a id='creacion' href='<?php if(isset($_SESSION['id'])){echo"creacionmusica/crear.php";}else{echo"../../user/loginRegister/login/login.php";} ?>'><button>+</button></a>


    </div>

    <?php

        include "musicafetch.php";

    ?>

    <footer>
        <a href="../../user/avisoslegales/index.html" target="_blank">Avisos Legales</a>
    </footer>
    
    <script src="../../common/js/sidebar.js"></script>
    <script src="../../common/js/likedislike.js"></script>
    
</body>
</html>
