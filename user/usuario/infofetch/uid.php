<?php

$sql = "SELECT IdUsuario FROM usuarios WHERE IdUsuario = ".$_SESSION['id'];
$result = $conn->query($sql);
$uid = $result->fetch_array()[0];