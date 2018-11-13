<!doctype html>
<?php
    include '../includes/matrix.php';
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
                $slides=7; // Número de slides do carrossel
                $titles="Undercut"
                    ."||".
                    "Hipster"
                    ."||".
                    "Sidecut"
                    ."||".
                    "Punk"
                    ."||".
                    "Samurai"
                    ."||".
                    "Grunge"
                    ."||".
                    "Bob"; // Títulos dos slides
                $texts="Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"; // Descrições dos slides
                $images="carouselteste01.png"
                    ."||".
                    "carouselteste02.png"
                    ."||".
                    "carouselteste03.png"
                    ."||".
                    "carouselteste02.png"
                    ."||".
                    "carouselteste01.png"
                    ."||".
                    "carouselteste02.png"
                    ."||".
                    "carouselteste03.png"; // Nomes dos arquivos de imagens dos slides
                $links="cortes/post/index.php"
                    ."||".
                    "80-2000/post/index.php"
                    ."||".
                    "cortes/post/index.php"
                    ."||".
                    "80-2000/post/index.php"
                    ."||".
                    "cortes/post/index.php"
                    ."||".
                    "80-2000/post/index.php"
                    ."||".
                    "cortes/post/index.php"; // Links dos destinos de cada slide, começando pela pasta da área referente
                $dates="uma hora atrás"
                    ."||".
                    "duas horas atrás"
                    ."||".
                    "três horas atrás"
                    ."||".
                    "quatro horas atrás"
                    ."||".
                    "cinco horas atrás"
                    ."||".
                    "seis horas atrás"
                    ."||".
                    "sete horas atrás"; // Horário de cada postagem
                include $corredor.'includes/carousel.php';
            ?>
            <?php
                include $corredor.'includes/nav-mid.php';
            ?>
        </header>
        <div class="container mt-lg-5">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-7 feed">
                    <?php
                        $newsNumber=7; // Número de postagens do feed
                        $highlight=4; // Cada postagem de número semelhante ao valor de $highlight é um destaque
                        $titles="Undercut" // Títulos das postagens
                            ."||".
                            "Punk"
                            ."||".
                            "Sidecut"
                            ."||".
                            "Hipster"
                            ."||".
                            "Samurai"
                            ."||".
                            "Grunge"
                            ."||".
                            "Bob";
                        $images="carouselteste01.png" // Nomes dos arquivos de imagens do feed
                            ."||".
                            "carouselteste02.png"
                            ."||".
                            "carouselteste03.png"
                            ."||".
                            "carouselteste01.png"
                            ."||".
                            "carouselteste02.png"
                            ."||".
                            "carouselteste03.png"
                            ."||".
                            "carouselteste01.png";
                        $links="cortes/post/index.php" // Links dos destinos de cada postagem
                            ."||".
                            "80-2000/post/index.php"
                            ."||".
                            "cortes/post/index.php"
                            ."||".
                            "80-2000/post/index.php"
                            ."||".
                            "cortes/post/index.php"
                            ."||".
                            "80-2000/post/index.php"
                            ."||".
                            "cortes/post/index.php";
                        $dates="uma hora atrás" // Horários de cada postagem
                            ."||".
                            "duas horas atrás"
                            ."||".
                            "três horas atrás"
                            ."||".
                            "quatro horas atrás"
                            ."||".
                            "cinco horas atrás"
                            ."||".
                            "seis horas atrás"
                            ."||".
                            "sete horas atrás";
                        $areas=""; // Área de cada postagem
                        include $corredor.'includes/news.php';
                    ?>
                </div>
                <?php
                    include $corredor.'includes/aside.php';
                ?>
            </div>
        </div>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>