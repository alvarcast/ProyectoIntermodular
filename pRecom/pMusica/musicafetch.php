<?php

// I'll try to format in a way to be easy to understand.
// Defining an order and adding a limit are also important.

$sql = 'SELECT nombre,
artista,
texto,
valoracion,
imgmusica,
likes,
dislikes,
nombreusuario,
generomusica
FROM recomendacion_m
INNER JOIN usuarios ON usuarios.idusuario = recomendacion_m.idusuario
INNER JOIN genero_m ON genero_m.idgeneromusica = recomendacion_m.idgeneromusica
ORDER BY nombre
LIMIT 20';

$mysqliresult = $conn->query($sql);
// Return an array of associative arrays, representing rows and columns.
// This is the standard way of dealing with many database records.
$results = $mysqliresult->fetch_all(MYSQLI_ASSOC);

// Little tip #1: the if/elseif/else block can be changed to a map (used later):

// Little tip #2: avoid writing HTML content as/in PHP strings, it makes it very hard to write and understand.
// The basic approach is to fetch all needed data in variables, "drop off" of PHP mode and start writing HTML using the alternative PHP syntax for templates (link below):

?>

<?php foreach ($results as $item):
// Here we can use map above:
if($item['valoracion'] == 1){
    $valoracion = "../../common/img/1star.png";
}elseif($item['valoracion'] == 2){
    $valoracion = "../../common/img/2star.png";
}elseif($item['valoracion'] == 3){
    $valoracion = "../../common/img/3star.png";
}elseif($item['valoracion'] == 4){
    $valoracion = "../../common/img/4star.png";
}else{
    $valoracion = "../../common/img/5star.png";
}
?>

<section class='recomBox'>
<div class='items'>
<div class='portada'>
<a href='#'><img src='#'></a>
</div>
<div class='alineador'>
<div class='info'>
<div class='cabezaRecom'>
<p id='desc1'>Cancion: <?= htmlspecialchars($item['nombre'], ENT_QUOTES, 'UTF-8') ?></p>
<p id='desc1'>Artista: <?= htmlspecialchars($item['artista'], ENT_QUOTES, 'UTF-8') ?></p>
<p>Genero: <?= htmlspecialchars($item['generomusica'], ENT_QUOTES, 'UTF-8') ?></p>
<p id='desc2'>Usuario: <?= htmlspecialchars($item['nombreusuario'], ENT_QUOTES, 'UTF-8') ?></p>
</div>
<div class='estrellas'>
<img src='$valoracion'>
</div>
<div class='txt'>
<p><?= htmlspecialchars($item['texto'], ENT_QUOTES, 'UTF-8') ?></p>
</div>
</div>
<div class='likedislike'>
<div class='like'>
<button class='btn' id='green'>↑</button>
</div>
<div class='dislike'>
<button class='btn' id='red'>↓</button>
</div>
</div>
</div>
</div>
</section>

<?php endforeach; ?>