    <?php

    $sql = "SELECT Img FROM usuarios WHERE IdUsuario = ".$_SESSION['id'];
    $result = $conn->query($sql);
    $img = $result->fetch_array()[0];
    
    if($img = " " OR $img = null){
        echo "  <div class='login'>
                    <a href='../user/usuario/usu.php'><img src='../common/img/default.png' height='25px' width='25px'></a>
                </div>";
    }elseif(isset($img)){
        echo "  <div class='login'>
            <a href='../user/usuario/usu.php'><img src='$img' height='25px' width='25px'></a>
                </div";
    }

    echo "  <div class='login'>
                <form action='../common/php/cerrar.php'>
                    <button type='submit' name='logout'>Cerrar Sesion</button>
                </form>
            </div>";