<?php

include "../../common/php/conexion.php";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

session_start();

$sql = "SELECT img FROM usuarios WHERE IdUsuario = ". $_SESSION['id'];

$mysqliresult = $conn->query($sql);
$results = $mysqliresult->fetch_all(MYSQLI_ASSOC);
foreach($results as $result):
  $imgusu = $result['img'];
endforeach;

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recibir datos del formulario
  $desc = $_POST["desc"];
  $file = $_POST["imgusu"];

  if($_FILES['file']['name'] == "") {
    // No file was selected for upload, your (re)action goes here
    
    $file = $imgusu;

  }else{
    move_uploaded_file($_FILES['file']['tmp_name'],"img/" . $_FILES['file']['name']);
    
    unlink("img/$imgusu");

    // Getting uploaded file
    $file = $_FILES['file']['name'];

    //crop_image($file,"300");
  }

  // Preparar la consulta SQL para la inserción de datos
  $sql = "UPDATE usuarios SET Descripcion = '$desc' WHERE IdUsuario = ". $_SESSION['id'];
  $sql2 = "UPDATE usuarios SET Img = '$file' WHERE IdUsuario = ". $_SESSION['id'];

  // Ejecutar la consulta
  if ($conn->query($sql) === TRUE AND $conn->query($sql2) === TRUE) {
    header("location: usu.php");
  } else {
    echo "Error al insertar datos: " . $conn->error . "<br>";
  }
  // Cerrar la conexión
  $conn->close();
}