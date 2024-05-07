<?php

$sql = "SELECT NombreUsuario FROM usuarios WHERE IdUsuario = ".$_SESSION['id'];
$result = $conn->query($sql);
$name = $result->fetch_array()[0];