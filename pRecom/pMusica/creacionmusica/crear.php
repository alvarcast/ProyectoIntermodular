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
            <a href="../musica.php">Musica</a>
            <a href="../../pVideojuegos/videojuegos.php">Videojuegos</a>
            <a href="../../pPelis/peliculas.php">Peliculas</a>
            <a href="../../pSeries/series.php">Series</a>
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
    <h1 id="textoform">Recomendacion de Musica</h1>

    <div class="nombre">
      <label for="nombre">Nombre de la cancion:</label><br>
      <input type="text" id='nombre' name='nombre' maxlength="50">
    </div>

    <div class="artista">
      <label for="artista">Artista:</label><br>
      <input type="text" id='artista' name='artista' maxlength="30">
    </div>

    <div class="genero">
      <p>Genero:</p>
      <select name="genero">
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