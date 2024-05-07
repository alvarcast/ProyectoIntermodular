<?php

$sql = "SELECT Karma FROM usuarios WHERE IdUsuario = ".$_SESSION['id'];
$result = $conn->query($sql);
$karma = $result->fetch_array()[0];