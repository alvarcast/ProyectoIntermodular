<?php

$sql = "SELECT Img FROM usuarios WHERE IdUsuario = ".$_SESSION['id'];
$result = $conn->query($sql);
$img = $result->fetch_array()[0];