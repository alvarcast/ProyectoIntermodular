<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear Recomendacion</title>
  <link rel="stylesheet" href="../../createstyles.css">
  <link rel="icon" type="image/x-icon" href="../../../common/img/logo.png">
</head>
<body>

  <?php

  include "../../../common/php/conexion.php";

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
            <a href="../../pMusica/musica.php">Musica</a>
            <a href="../../pVideojuegos/videojuegos.php">Videojuegos</a>
            <a href="../../pPeliculas/peliculas.php">Peliculas</a>
            <a href="../series.php">Series</a>
        </div>
        <div class="objderecha">
          
            <?php
            
              if(isset($_SESSION['id'])){
                echo "  <div class='login'>
                            <a href='../../../FrontPage/index.php'>Inicio</a>
                        </div>";

                echo "  <div class='login'>
                        <a href='../../../user/usuario/usu.php'>Perfil</a>
                        </div>";
                        
                echo "  <div class='login'>
                        <form action='../../../common/php/cerrar.php'>
                            <button type='submit' name='logout'>Cerrar Sesion</button>
                        </form>
                        </div>";
              }else{
                  echo "  <div class='login'>
                              <a href='../../user/loginRegister/login/login.php'>Iniciar Sesion</a>
                          </div>  ";
              }

            ?>

        </div>
    </div>
    <div class="sidetxt" style="display:none" id="mySidebar">
        <button id="cerrar" onclick="cerrar()">&times;</button>

        <?php

        if(isset($_SESSION['id']) == false){
          echo "<a id='opcion' href='../../../user/loginRegister/login/login.php'><button id='opcion'>Iniciar Sesion</button></a>";
        }

        ?>
        
        <a id="opcion" href="../musica.php"><button id="opcion">Musica</button></a>
        <a id="opcion" href="../../pVideojuegos/videojuegos.php"><button id="opcion">Videojuegos</button></a>
        <a id="opcion" href="../../pPelis/peliculas.php"><button id="opcion">Peliculas</button></a>
        <a id="opcion" href="../../pSeries/series.php"><button id="opcion">Series</button></a>
    </div>
  </header>
  
  <form class="formulario" method="post" action="insertar.php" enctype="multipart/form-data">

  <?php
      if(isset($_GET["control"])) { 
        $userControl = $_GET['control'];
        if($userControl != null){
          if($userControl == 2){
            echo"<h4>Por favor, elija genero</h4>";
          }elseif($userControl == 3){
            echo"<h4>Por favor, ponga una imagen</h4>";
          }
        }
      }
    ?>
    
    <h1 id="textoform">Recomendacion de Serie</h1>

    <div class="nombre">
      <label for="nombre">Nombre de la serie:</label><br>
      <input type="text" id='nombre' name='nombre' maxlength="100">
    </div>

    <div class="artista">
      <label for="artista">Direccion:</label><br>
      <input type="text" id='artista' name='artista' maxlength="100">
    </div>

    <div class="genero">
      <p>Genero:</p>
      <select name="genero">
        <option value="0">Generos</option>
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
    </div>

    <div class="texto">
      <label for="texto">Tu opinion:</label><br>
      <textarea id="texto" name="texto" rows="5" cols="50" maxlength="300"></textarea>
    </div>

    <div class="valoracion">
      <label for="valoracion">Valoracion</label><br>
      <input type="range" min="1" max="5" id='valoracion' name='valoracion'><br>
    </div>

    <div class="imagen">
      <label for="file">Imagen</label><br>
      <input type="file" id="file" name="file" accept="image/*">
    </div>

    <div class="boton">
      <input type="submit" value="Enviar">
    </div>
  </form>

  <footer>
    <a href="../../../user/avisoslegales/index.html" target="_blank">Avisos Legales</a>
  </footer>

  <script src="../../../common/js/sidebar.js"></script>

</body>
</html>