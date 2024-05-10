<?php

include "../../common/php/conexion.php";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

session_start();

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibir datos del formulario
  $idm = $_POST["idm2"];
  $idg = $_POST["idgenerico"];

  if($idg == 1){

    $sql = "SELECT imgmusica FROM recomendacion_m WHERE idmusica = " . $idm;

    $mysqliresult = $conn->query($sql);
    $results = $mysqliresult->fetch_all(MYSQLI_ASSOC);

    foreach ($results as $item):
      $img = $item['imgmusica'];
    endforeach;

    unlink("../../pRecom/pMusica/img/$img");

    $sql = "DELETE FROM recomendacion_m WHERE idmusica = " . $idm;

  }elseif($idg == 2){

    $sql = "SELECT imgvideojuego FROM recomendacion_v WHERE idvideojuego = " . $idm;

    $mysqliresult = $conn->query($sql);
    $results = $mysqliresult->fetch_all(MYSQLI_ASSOC);

    foreach ($results as $item):
      $img = $item['imgvideojuego'];
    endforeach;

    unlink("../../pRecom/pVideojuegos/img/$img");
    $sql = "DELETE FROM recomendacion_v WHERE idvideojuego = " . $idm;

  }elseif($idg == 3){

    $sql = "SELECT imgpelicula FROM recomendacion_p WHERE idpelicula = " . $idm;

    $mysqliresult = $conn->query($sql);
    $results = $mysqliresult->fetch_all(MYSQLI_ASSOC);

    foreach ($results as $item):
      $img = $item['imgpelicula'];
    endforeach;

    unlink("../../pRecom/pPeliculas/img/$img");
    $sql = "DELETE FROM recomendacion_p WHERE idpelicula = " . $idm; 

  }elseif($idg == 4){

    $sql = "SELECT imgserie FROM recomendacion_s WHERE idserie = " . $idm;

    $mysqliresult = $conn->query($sql);
    $results = $mysqliresult->fetch_all(MYSQLI_ASSOC);

    foreach ($results as $item):
      $img = $item['imgserie'];
    endforeach;

    unlink("../../pRecom/pSeries/img/$img");
    $sql = "DELETE FROM recomendacion_s WHERE idserie = " . $idm;  

  }

  // Ejecutar la consulta
  if ($conn->query($sql) === TRUE) {
    header("location: usu.php");
  } else {
    echo "Error al insertar datos: " . $conn->error . "<br>";
  }

  // Cerrar la conexión
  $conn->close();
}