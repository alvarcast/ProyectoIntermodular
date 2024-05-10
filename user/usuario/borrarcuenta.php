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
    $uid = $_SESSION['id'];

    $sql = "SELECT img FROM usuarios WHERE idusuario = " . $uid;

    $mysqliresult = $conn->query($sql);
    $results = $mysqliresult->fetch_all(MYSQLI_ASSOC);

    foreach ($results as $item):
      $img = $item['img'];
    endforeach;

    unlink("img/$img");

    $sql = "DELETE FROM usuarios WHERE idusuario = " . $uid;  
 
    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        header("location: ../../common/php/cerrar.php");
    } else {
        echo "Error al insertar datos: " . $conn->error . "<br>";
    }
}