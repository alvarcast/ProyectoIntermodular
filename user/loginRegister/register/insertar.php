<?php

include "../../../common/php/conexion.php";
    
// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibir datos del formulario
  $nombreusu = $_POST["nombreusu"];
  $nombre = $_POST["nombre"];
  $correo = $_POST["correo"];
  $contrasenia = $_POST["contrasenia"];
  $repecon = $_POST["repecon"];

  $sql = "SELECT nombreusuario from usuarios WHERE nombreusuario LIKE '{$nombreusu}'";

  $result = $conn->query($sql);
  
  if($result->num_rows > 0){
    header("location: register.php?control=2");
  }else{
    if($contrasenia != $repecon){
      header("location: register.php?control=3");
    }else{
      // Preparar la consulta SQL para la inserción de datos
      $sql = "INSERT INTO usuarios(NombreUsuario, NombreReal, Correo, Contrasenia, Descripcion, Karma, Img)
      VALUES('$nombreusu', '$nombre', '$correo', $contrasenia,NULL,0,'x')";
  
      // Ejecutar la consulta
      if ($conn->query($sql) === TRUE) {
      header("Location: ../login/login.php");
      } else {
      echo "Error al insertar datos: " . $conn->error . "<br>";
      }
    }
  }
}