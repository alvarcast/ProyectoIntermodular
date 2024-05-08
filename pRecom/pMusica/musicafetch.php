<?php

$sql = 'SELECT idmusica,
likes,
dislikes,
nombre,
artista,
texto,
valoracion,
imgmusica,
nombreusuario,
generomusica
FROM recomendacion_m
INNER JOIN usuarios ON usuarios.idusuario = recomendacion_m.idusuario
INNER JOIN genero_m ON genero_m.idgeneromusica = recomendacion_m.idgeneromusica
ORDER BY nombre
LIMIT 20';

$mysqliresult = $conn->query($sql);
$results = $mysqliresult->fetch_all(MYSQLI_ASSOC);

?>

<?php foreach ($results as $item):

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

$imagen = "img/".$item['imgmusica']."";

?>

<section class='recomBox'>
    <div class='items'>
        <div class='portada'>
            <img src='<?php echo htmlspecialchars($imagen); ?>'></a>
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
                    <img src='<?php echo htmlspecialchars($valoracion); ?>'>
                </div>
                <div class='texto'>
                    <p><?= htmlspecialchars($item['texto'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
            <div class='likedislike'>
                <div class='like'>
                    <span class="totallikes"><?= htmlspecialchars($item['likes'], ENT_QUOTES, 'UTF-8') ?></span>
                    <button class="btn" id='green'>↑</button>
                </div>
                <div class='dislike'>
                    <span class="totaldislikes"><?= htmlspecialchars($item['dislikes'], ENT_QUOTES, 'UTF-8') ?></sp>
                    <button class="btn" id='red'>↓</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endforeach; ?>