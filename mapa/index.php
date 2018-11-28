<!doctype html>
<?php
    include '../includes/matrix.php';
    $pastaAtualFake="forum";
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php';
?>

    <body class="bg-dark-indie <?php echo $pastaAtual; ?>">
        <header>
            <?php
                include $corredor.'includes/nav-top.php';
            ?>
            <?php
                include $corredor.'includes/nav-mid.php';
            ?>
        </header>
        <article class="container">
            <div class="row bg-white">
                <div class="col-12">
                    <h1 class="py-3 mt-0 my-3 pl-lg-3 ml-lg-2 font-weight-bold h3"><?php echo $mapa[$lang]; ?></h1>
                </div>
            </div>
            <div class="font-weight-bold row h4 pl-lg-2 ml-lg-0">
                <div class="col-12">
                    <a href="../index.php" class="map-text-1 d-block my-3">1 - Indie Planet</a>
                    <ul>
                        <?php
                        $c=1;
                        foreach ($nav as $key => $vector) {
                            $c++;
                            echo '<li class="my-3"><a href="../'.$key.'/index.php" class="map-text-'.$c.'">';
                            echo $c.' - '.$nav[$key]['primario'][$lang].'</a></li>';
                            echo '<li><ul>';
                            $cc=1;
                            foreach ($nav[$key]['secundario'] as $vector => $value) {
                                echo '<li class="my-3"><a href="../'.$key.'/'.$vector.'/index.php" class="map-text-'.$c.'">';
                                echo $c.'.'.$cc.' - '.$nav[$key]['secundario'][$vector][$lang].'</a></li>'; 
                                $cc++;
                            }
                            echo '</ul></li>';
                        }
                        foreach ($navGeral as $key => $value) {
                            $c++;
                            echo '<li class="my-3"><a href="../'.$key.'/index.php" class="map-text-1">';
                            echo $c.' - '.$navGeral[$key][$lang].'</a></li>';
                        }
                        $login=array(
                            0 => array(
                                "en" => "Create an account",
                                "es" => "Crear una cuenta",
                                "pt" => "Criar conta"
                            ),
                            1 => array(
                                "en" => "Redeem password",
                                "es" => "Resgatar contraseña",
                                "pt" => "Resgatar senha"                            
                            )
                        );
                        ?>
                        <li class="my-3">
                            <a href="../signin/index.php" class="map-text-1">13 - <?php echo $login[0][$lang]; ?></a>
                        </li>
                        <li class="my-3">
                            <ul>
                                <li class="my-3">
                                    <a href="../signin/re/index.php" class="map-text-1">13.1 - <?php echo $login[0][$lang]; ?></a>
                                </li>
                            </ul>
                        </li>
                        <li class="my-3">
                            <a href="../norman/index.php" class="map-text-1">14 - <?php echo $norman[$lang]; ?></a>
                        </li>
                        <li class="my-3">
                            <a href="../mapa/index.php" class="map-text-1">14 - <?php echo $mapa[$lang]; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </article>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>
</html>