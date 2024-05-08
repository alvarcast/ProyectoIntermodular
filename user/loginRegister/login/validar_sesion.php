<?php

include "../../../common/php/conexion.php";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

session_start();

$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "SELECT IdUsuario FROM usuarios WHERE NombreUsuario = '".$usuario."'";

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $_SESSION['id'] = $row['IdUsuario'];

    if($result->num_rows == 1){

        $sql = "SELECT IdUsuario FROM usuarios WHERE Contrasenia = '".$contrasenia."' AND IdUsuario = ". $_SESSION['id'];
        $result = $conn->query($sql);

        if($result->num_rows == 1){

            header("Location: ../../../FrontPage/index.php");
            //header("Location: " . $_SERVER["HTTP_REFERER"]);

        }else{

           header("location: login.php?control=3");

        }

    }else{
        header("location: login.php?control=2");
    }
}

$conn -> close();