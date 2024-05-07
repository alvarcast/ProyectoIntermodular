<?php

$sql = "SELECT Descripcion FROM usuarios WHERE IdUsuario = ".$_SESSION['id'];
$result = $conn->query($sql);
$desc = $result->fetch_array()[0];