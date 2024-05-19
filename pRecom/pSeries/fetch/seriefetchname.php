<?php

$sql = 'SELECT idserie,
nombre,
direccion,
texto,
valoracion,
imgserie,
nombreusuario,
generops
FROM recomendacion_s s
INNER JOIN usuarios u ON u.idusuario = s.idusuario
INNER JOIN genero_ps g ON g.idgenerops = s.idgeneroserie
WHERE g.idgenerops = '.$opcion2.'
ORDER BY nombre ASC
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

$imagen = "img/".$item['imgserie']."";

?>

<section class='recomBox'>
    <div class='items'>
        <div class='portada'>
            <img src='<?php echo htmlspecialchars($imagen); ?>'></a>
        </div>
        <div class='alineador'>
            <div class='info'>
                <div class='cabezaRecom'>
                    <p id='desc1'>Serie: <?= htmlspecialchars($item['nombre'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p id='desc1'>Direccion: <?= htmlspecialchars($item['direccion'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p>Genero: <?= htmlspecialchars($item['generops'], ENT_QUOTES, 'UTF-8') ?></p>
                    <p id='desc2'>Usuario: <?= htmlspecialchars($item['nombreusuario'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
                <div class='estrellas'>
                    <img src='<?php echo htmlspecialchars($valoracion); ?>'>
                </div>
                <div class='texto'>
                    <p><?= htmlspecialchars($item['texto'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endforeach; ?>