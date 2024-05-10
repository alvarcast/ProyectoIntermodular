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

  if($genero == 0){
    header("location: crear.php?control=2");
  }else{

    if($_FILES['file']['name'] != ""){
    
      move_uploaded_file($_FILES['file']['tmp_name'],"../img/" . $_FILES['file']['name']);
  
      $file = $_FILES['file']['name'];

      $uid = $_SESSION['id'];
  
      // Preparar la consulta SQL para la inserción de datos
      $sql = "INSERT INTO recomendacion_p (nombre, director, texto, valoracion, imgpelicula, idusuario, idgeneropelicula)
              VALUES ('$nombre', '$artista', '$texto', $valoracion, '$file', $uid, $genero)";
    
    
      // Ejecutar la consulta
      if ($conn->query($sql) === TRUE) {
          $sql2 = "UPDATE usuarios SET karma = (karma + 10) WHERE idusuario = ". $_SESSION['id'];
          if ($conn->query($sql2) === TRUE) {
            header("location: ../peliculas.php");
          } else {
            echo "Error al insertar datos: " . $conn->error . "<br>";
          }
      } else {
          echo "Error al insertar datos: " . $conn->error . "<br>";
      }
  
    }else{
      header("location: crear.php?control=3");
    }
  } 
}