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
  $idg = $_POST["idgenerico"];
  $idv = $_POST['idm'];
  $txt = $_POST['newtxt'];
  
  if($idg == 1){
    $sql = "UPDATE recomendacion_m SET texto = '$txt' WHERE idmusica = ". $idv;

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
      header("location: usu.php");
    } else {
      echo "Error al insertar datos: " . $conn->error . "<br>";
    }
    
  }elseif($idg == 2){
    $sql = "UPDATE recomendacion_v SET texto = '$txt' WHERE idvideojuego = ". $idv;

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
      header("location: usu.php");
    } else {
      echo "Error al insertar datos: " . $conn->error . "<br>";
    }

  }elseif($idg == 3){
    $sql = "UPDATE recomendacion_p SET texto = '$txt' WHERE idpelicula = ". $idv;

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
      header("location: usu.php");
    } else {
      echo "Error al insertar datos: " . $conn->error . "<br>";
    }
    
  }elseif($idg == 4){
    $sql = "UPDATE recomendacion_s SET texto = '$txt' WHERE idserie = ". $idv;

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
      header("location: usu.php");
    } else {
      echo "Error al insertar datos: " . $conn->error . "<br>";
    }
    
  }
  // Cerrar la conexión
  $conn->close();
  
}