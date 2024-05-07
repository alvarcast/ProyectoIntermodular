<?php

include "../../../common/php/conexion.php";

$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}

session_start();

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibir datos del formulario
  $desc = $_POST["desc"];
  $imgusu = $_POST["imgusu"];

  // Preparar la consulta SQL para la inserción de datos
  $sql = "UPDATE usuarios SET Descripcion = '$desc' WHERE IdUsuario = ". $_SESSION['id'];
  $sql2 = "UPDATE usuarios SET Img = '$imgusu' WHERE IdUsuario = ". $_SESSION['id'];

  // Ejecutar la consulta
  if ($conn->query($sql) === TRUE AND $conn->query($sql2) === TRUE) {
    header("location: ../usu.php");
  } else {
    echo "Error al insertar datos: " . $conn->error . "<br>";
  }
  // Cerrar la conexión
  $conn->close();
}