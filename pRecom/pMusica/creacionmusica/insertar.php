<?php

include "../../../common/php/conexion.php";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

session_start();

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibir datos del formulario
  $nombre = $_POST["nombre"];
  $artista = $_POST["artista"];
  $genero = $_POST["genero"];
  $texto = $_POST["texto"];
  $valoracion = $_POST["valoracion"];

  if(isset($_FILES['file'])){
    
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/" . $_FILES['file']['name']);

    // Getting uploaded file
    $file = $_FILES['file']['name'];

    //crop_image($file,"300");

  }

  $sql = "SELECT IdUsuario FROM usuarios WHERE IdUsuario = ".$_SESSION['id'];
  $result = $conn->query($sql);
  $uid = $result->fetch_array()[0];

  // Preparar la consulta SQL para la inserción de datos
  $sql = "INSERT INTO recomendacion_m (Nombre, Artista, Texto, Valoracion, Imgmusica, likes, dislikes, IdUsuario, IdGeneroMusica)
          VALUES ('$nombre', '$artista', '$texto', $valoracion, '$file',0,0, $uid, $genero)";


  // Ejecutar la consulta
  if ($conn->query($sql) === TRUE) {
      header("location: ../musica.php");
  } else {
      echo "Error al insertar datos: " . $conn->error . "<br>";
  }
}