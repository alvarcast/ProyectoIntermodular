<?php
// Get the idmusica and valor parameters from the POST request
$idmusica = $_POST['idmusica'];
$valor = $_POST['valor'];

// Calculate the new score for the user who created the recommendation
$sql = "SELECT idusuario FROM recomendacion_m WHERE idmusica = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idmusica);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$idusuario = $row['idusuario'];

$sql = "SELECT karma FROM usuarios WHERE idusuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idusuario);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$karma = $row['karma'];

$new_karma = $karma + $valor * 10;

// Update the user's karma in the database
$sql = "UPDATE usuarios SET karma = ? WHERE idusuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $new_karma, $idusuario);
$stmt->execute();

// Return a success message to the client
echo "karma updated successfully.";
