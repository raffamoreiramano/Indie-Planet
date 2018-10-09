<!doctype html>
<?php
    include 'includes/matrix.php';
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php';
?>

    <body class="<?php echo $pastaAtual; ?>">
        <header>
            <?php
                include $corredor.'includes/nav-top.php';
            ?>
            <?php
                $slides=3;
                $titles="Título da primeira postagem teste do carrossel||Título da segunda postagem teste do carrossel||Título da terceira postagem teste do carrossel";
                $texts="Descrição resumida da postagem que se encontra em um dos slides||Descrição resumida da postagem que se encontra em um dos slides||Descrição resumida da postagem que se encontra em um dos slides";
                $images="carouselteste01.png||carouselteste02.png||carouselteste03.png";
                $links="musica/novidades/index.php||cinema/criticas/index.php||jogos/novidades/index.php";
                $dates="uma hora atrás||duas horas atrás||três horas atrás";
                include 'includes/carousel.php';
            ?>
            <?php
                include $corredor.'includes/nav-mid.php';
            ?>
        </header>
        

        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>
