<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Media Recomendations</title>
  <link rel="stylesheet" type="text/css" href="Trabajofinalhome.css">
  <link rel="icon" type="image/x-icon" href="../common/img/logo.png">
</head>

<body>

  <?php

  include "../common/php/conexion.php";

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
            <a href="../pRecom/pMusica/musica.php">Musica</a>
            <a href="../pRecom/pVideojuegos/videojuegos.php">Videojuegos</a>
            <a href="../pRecom/pPeliculas/peliculas.php">Peliculas</a>
            <a href="../pRecom/pSeries/series.php">Series</a>
        </div>
        <div class="objderecha">
          
            <?php
            
            if(isset($_SESSION['id'])){
              echo "  <div class='login'>
                        <a href='../user/usuario/usu.php'>Perfil</a>
                      </div>";
                      
              echo "  <div class='login'>
                        <form action='../common/php/cerrar.php'>
                          <button type='submit' name='logout'>Cerrar Sesion</button>
                        </form>
                      </div>";
            }else{
                echo "  <div class='login'>
                            <a href='../user/loginRegister/login/login.php'>Iniciar Sesion</a>
                        </div>  ";
                        
            }

            ?>

        </div>
    </div>
    <div class="sidetxt" style="display:none" id="mySidebar">
        <button id="cerrar" onclick="cerrar()">&times;</button>

        <?php

        if(isset($_SESSION['id'])){
          echo "  <div class='login'>
                        <form action='../../common/php/cerrar.php'>
                          <button type='submit' name='logout'>Cerrar Sesion</button>
                        </form>
                      </div>";
        }

        ?>

        <a id="opcion" href="../pRecom/pMusica/musica.php"><button id="opcion">Musica</button></a>
        <a id="opcion" href="../pRecom/pVideojuegos/videojuegos.php"><button id="opcion">Videojuegos</button></a>
        <a id="opcion" href="../pRecom/pPelis/peliculas.php"><button id="opcion">Peliculas</button></a>
        <a id="opcion" href="../pRecom/pSeries/series.php"><button id="opcion">Series</button></a>
    </div>
  </header>

  <div class="logo">
    <img src="../common/img/logo.png"/>
  </div>

  <div class="sscontainer">
    <div class="prev">
      <a onclick="plusSlides(-1)">&#10094;</a>
    </div>
    <div class="ssimg">
      <div class="mySlides">
        <img src="img/opp.webp"/>
      </div>
      <div class="mySlides">
        <img src="img/fmabbg.jpe"/>
      </div>
      <div class="mySlides">
        <img src="img/ncs.jpg"/>
      </div>
      <div class="mySlides">
        <img src="img/amogus.jpeg"/>
      </div>
    </div>
    <div class="next">
      <a onclick="plusSlides(1)">&#10095;</a>
    </div>
  </div>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
  </div>

  <div class="textaco">
    <section class="wrapper">
      <div class="top">Nuestras</div>
      <div class="bottom" aria-hidden="true">Nuestras</div>
    </section>
  
    <section class="wrapper">
      <div class="top">Recomendacones</div>
      <div class="bottom" aria-hidden="true">Recomendacones</div>
    </section>
  </div>

<div class="container">
  <div class="containerimg">
    <img id="primeraimagencartas" src="img/bad.jpg" alt="">
    <img id="segundaimagencartas" src="img/jesi.jpg" alt="">
    <img id="terceraimagencartas" src="img/breaking.jpg" alt="">
  </div>
  <h1>Breaking Bad</h1>
  <div class="containertexto">
    <img id="imagenescondida" src="img/bad.jpg" alt="">
    <h5>Gran argumento</h5>
    <p>Breaking Bad es una serie de televisión estadounidense creada y producida por Vince Gilligan. Narra la historia de Walter White (Bryan Cranston), un profesor de química con problemas económicos a quien le diagnostican un cáncer de pulmón inoperable.</p>
    <img id="imagenescondida" src="img/jesi.jpg" alt="">
    <h5>Produccion</h5>
    <p>La serie se estrenó el 20 de enero de 2008 y es una producción de Sony Pictures Television. En Estados Unidos y Canadá se emitió por la cadena AMC. La temporada final se dividió en dos partes de ocho episodios cada una y se emitió en el transcurso de dos años.</p>
    <img id="imagenescondida" src="img/breaking.jpg" alt="">
    <h5>Criticas impactantes</h5>
    <p id="ultparrafo">Breaking Bad ha sido aclamada con entusiasmo por buena parte de la critica y del público y está considerada como una de las mejores series televisivas de todos los tiempos.</p>
  </div>
</div>

<div class="container">
  <div class="containerimg">
    <img id="primeraimagencartas" src="img/estopa.png" alt="">
    <img id="segundaimagencartas" src="img/estopaconcierto.png" alt="">
    <img id="terceraimagencartas" src="img/quetalasnovias.png" alt="">
  </div>
  <h1>Estopa</h1>
  <div class="containertexto">
    <img id="imagenescondida" src="img/estopa.png" alt="">
    <h5>Un gran dúo</h5>
    <p>BEstopa es un dúo español de rumba catalana formado por los hermanos David y José Manuel Muñoz. Creado el 18 de octubre de 1999, el grupo es natural de la ciudad de Cornellà de Llobregat, Provincia de Barcelona.</p>
    <img id="imagenescondida" src="img/estopaconcierto.png" alt="">
    <h5>Produccion</h5>
    <p>Con su primer disco consiguieron ventas superiores a 1.000.000 de copias, logrando así el reconocimiento en su país natal y después en países americanos como Chile, Argentina, México, Colombia y Venezuela.</p>
    <img id="imagenescondida" src="img/quetalasnovias.png" alt="">
    <h5>Criticas impactantes</h5>
    <p id="ultparrafo">Su música mezcla el estilo flamenco y rumbas urbanas. Son grandes admiradores de Joaquín Sabina, Joan Manuel Serrat, Robe Iniesta y de Pancho Varona. Han vendido más de 4 millones de discos en el ámbito nacional e internacional.</p>
  </div>
</div>

<div class="container">
  <div class="containerimg">
    <img id="primeraimagencartas" src="img/poke.png" alt="">
    <img id="segundaimagencartas" src="img/legendarios.jpg" alt="">
    <img id="terceraimagencartas" src="img/pokeanime.jpg" alt="">
  </div>
  <h1>Pokemon</h1>
  <div class="containertexto">
    <img id="imagenescondida" src="img/poke.png" alt="">
    <h5>La mayor marca</h5>
    <p>Pokémon (ポケモン Pokemon) es una franquicia de medios que originalmente comenzó como un videojuego RPG, pero debido a su popularidad ha logrado expandirse a otros medios de entretenimiento como series de televisión, películas, juegos de cartas, ropa, entre otros, convirtiéndose en una marca que es reconocida en el mercado mundial.</p>
    <img id="imagenescondida" src="img/legendarios.jpg" alt="">
    <h5>Criaturas increíbles</h5>
    <p>La serie se estrenó el 20 de enero de 2008 y es una producción de Sony Pictures Television. En Estados Unidos y Canadá se emitió por la cadena AMC. La temporada final se dividió en dos partes de ocho episodios cada una y se emitió en el transcurso de dos años.</p>
    <img id="imagenescondida" src="img/pokeanime.jpg" alt="">
    <h5>Una historia generacional</h5>
    <p id="ultparrafo">Breaking Bad ha sido aclamada con entusiasmo por buena parte de la critica y del público y está considerada como una de las mejores series televisivas de todos los tiempos.</p>
  </div>
</div>

<div class="container">
  <div class="containerimg">
    <img id="primeraimagencartas" src="img/devuelvaneloro.png" alt="">
    <img id="segundaimagencartas" src="img/españita.png" alt="">
    <img id="terceraimagencartas" src="img/conquista.png" alt="">
  </div>
  <h1>El Dorado</h1>
  <div class="containertexto">
    <img id="imagenescondida" src="img/devuelvaneloro.png" alt="">
    <h5>Protagonistas Encantadores</h5>
    <p>Cuenta la historia de dos estafadores españoles en los tiempos de Hernán Cortés, quienes llegan por azar a la ciudad de El Dorado, donde son confundidos como dioses.</p>
    <img id="imagenescondida" src="img/españita.png" alt="">
    <h5>Del fracaso a ser de culto</h5>
    <p>The Road to El Dorado fue un gran fracaso de taquilla, recaudan solo $76.432.727 frente a un presupuesto de $95.000.000, a pesar de que tuvo críticas mixtas, con los años ha sido mejor recibida por el público, y es considerada un clásico.</p>
    <img id="imagenescondida" src="img/conquista.png" alt="">
    <h5>La vida del mito</h5>
    <p id="ultparrafo">La película comienza en los tiempos míticos cuando los dioses construyeron la ciudad que se le conoce como El Dorado, un pueblo que se cree lleno de oro y un paraíso terrenal como obsequio para los humanos, prometiendo regresar para purificar la ciudad.</p>
  </div>
</div>

  <footer>
    <a href="../user/avisoslegales/index.html" target="_blank">Avisos Legales</a>
  </footer>

  <script src="../common/js/sidebar.js"></script>
  <script src="../common/js/carousel.js"></script>

</body>
</html>