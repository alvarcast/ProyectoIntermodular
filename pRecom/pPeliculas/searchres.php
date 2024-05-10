<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de busqueda</title>
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
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" id="barraform">
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
          <a id="opcion" href="peliculas.php"><button id="opcion">Volver</button></a>
          <a id="opcion" href="../pMusica/musica.php"><button id="opcion">Musica</button></a>
          <a id="opcion" href="../pVideojuegos/videojuegos.php"><button id="opcion">Videojuegos</button></a>
          <a id="opcion" href="../pSeries/series.php"><button id="opcion">Series</button></a>
        </div>
    </header>

    <section class="wrapper">
        <div class="top">Resultado</div>
        <div class="bottom" aria-hidden="true">Resultado</div>
    </section>

    <?php

        include "../../common/php/conexion.php";
            
        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
        }


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $_POST['search'];
        }

        $sql = "SELECT idpelicula,
        nombre,
        director,
        texto,
        valoracion,
        imgpelicula,
        nombreusuario,
        generops
        FROM recomendacion_p p
        INNER JOIN usuarios u ON u.idusuario = p.idusuario
        INNER JOIN genero_ps g ON g.idgenerops = p.idgeneropelicula
        WHERE nombre LIKE '{$search}%' OR director LIKE '{$search}%' OR nombreusuario LIKE '{$search}%'
        ORDER BY idpelicula DESC
        LIMIT 20";

        $mysqliresult = $conn->query($sql);
        $results = $mysqliresult->fetch_all(MYSQLI_ASSOC);

        ?>

        <?php foreach ($results as $item):

        if($item['valoracion'] == 1){
            $valoracion = "../../common/img/1star.png";
        }elseif($item['valoracion'] == 2){
            $valoracion = "../../common/img/2star.png";
        }elseif($item['valoracion'] == 3){
            $valoracion = "../../common/img/3star.png";
        }elseif($item['valoracion'] == 4){
            $valoracion = "../../common/img/4star.png";
        }else{
            $valoracion = "../../common/img/5star.png";
        }

        $imagen = "img/".$item['imgpelicula']."";

        ?>

        <section class='recomBox'>
            <div class='items'>
                <div class='portada'>
                    <img src='<?php echo htmlspecialchars($imagen); ?>'></a>
                </div>
                <div class='alineador'>
                    <div class='info'>
                        <div class='cabezaRecom'>
                            <p id='desc1'>Pelicula: <?= htmlspecialchars($item['nombre'], ENT_QUOTES, 'UTF-8') ?></p>
                            <p id='desc1'>Direccion: <?= htmlspecialchars($item['director'], ENT_QUOTES, 'UTF-8') ?></p>
                            <p>Genero: <?= htmlspecialchars($item['generops'], ENT_QUOTES, 'UTF-8') ?></p>
                            <p id='desc2'>Usuario: <?= htmlspecialchars($item['nombreusuario'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                        <div class='estrellas'>
                            <img src='<?php echo htmlspecialchars($valoracion); ?>'>
                        </div>
                        <div class='texto'>
                            <p><?= htmlspecialchars($item['texto'], ENT_QUOTES, 'UTF-8') ?></p>
                        </div>
                    </div>
                    <div class='likedislike'>
                        <div class='like'>
                            <button class="btn" id='green'>↑</button>
                        </div>
                        <div class='dislike'>
                            <button class="btn" id='red'>↓</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php endforeach; ?>
        
    ?>

    <br><br><br><br><br>
    <footer>
        <a href="../../user/avisoslegales/index.html" target="_blank">Avisos Legales</a>
    </footer>
    
    <script src="../../common/js/sidebar.js"></script>
    <script src="../../common/js/likedislike.js"></script>
    
</body>
</html>