<!doctype html>
<?php
    include 'includes/matrix.php'; // Inclusão do arquivo necessário para o funcionamento do resto dos includes
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php'; // Uso de $corredor no início dos links para voltar para a o diretorio principal do portal antes de prosseguir para o destino do arquivo
?>

    <body class="<?php echo $pastaAtual; ?>">
        <header>
            <?php
                include $corredor.'includes/nav-top.php';
            ?>
            <?php
                $slides=3; // Número de slides do carrossel
                $titles="Título da primeira postagem teste do carrossel||Título da segunda postagem teste do carrossel||Título da terceira postagem teste do carrossel"; // Títulos dos slides
                $texts="Descrição resumida da postagem que se encontra em um dos slides||Descrição resumida da postagem que se encontra em um dos slides||Descrição resumida da postagem que se encontra em um dos slides"; // Descrições dos slides
                $images="carouselteste01.png||carouselteste02.png||carouselteste03.png"; // Nomes dos arquivos de imagens dos slides
                $links="musica/novidades/index.php||cinema/criticas/index.php||jogos/novidades/index.php"; // Links dos destinos de cada slide, começando pela pasta da área referente
                $dates="uma hora atrás||duas horas atrás||três horas atrás"; // Horário de cada postagem
                include $corredor.'includes/carousel.php';
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
