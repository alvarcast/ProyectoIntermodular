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
  echo $idm;

  // Preparar la consulta SQL para la inserción de datos
  $sql = "DELETE FROM recomendacion_m WHERE idmusica = " . $idm;

  // Ejecutar la consulta
  if ($conn->query($sql) === TRUE) {
    header("location: usu.php");
  } else {
    echo "Error al insertar datos: " . $conn->error . "<br>";
  }
}