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
            <div class="container bg-dark p-0">
                <div class="row m-0">
                    <iframe class='border-0 w-100 spotify' src="https://open.spotify.com/embed/user/22f6qy24qivc57h6keamwxhli/playlist/<?php echo $spotifyPlaylist; ?>"></iframe>
                </div>
            </div>
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
                    if ($lang=='en') {
                        $titles="How indie music changed the industry" // Títulos das postagens
                            ."||".
                            "How indie artists release their songs"
                            ."||".
                            "Similarities between indie and grunge"
                            ."||".
                            "Indie on the national scene"
                            ."||".
                            "Vem mamar uvinha: Mc Carlos Sumaré amazes the people of Campinas"
                            ."||".
                            "Zebrabra: success between children with autism"
                            ."||".
                            "Indie band from the 90s returns with great hits";
                        $dates="one hour ago" // Horários de cada postagem
                            ."||".
                            "two hours ago"
                            ."||".
                            "three hours ago"
                            ."||".
                            "four hours ago"
                            ."||".
                            "five hours ago"
                            ."||".
                            "six hours ago"
                            ."||".
                            "seven hours ago";
                    }
                    elseif ($lang=='es') {
                        $titles="Cómo la música indie cambió la industria." // Títulos das postagens
                            ."||".
                            "Cómo los artistas indie lanzan sus canciones"
                            ."||".
                            "Similitudes entre indie y grunge."
                            ."||".
                            "Indie en la escena nacional"
                            ."||".
                            "Vem mamar uvinha: Mc Carlos Sumaré sorprende a la gente de Campinas"
                            ."||".
                            "Zebrabra: Éxito entre niños con autismo."
                            ."||".
                            "Banda indie de los años 90 regresa con grandes hits";
                        $dates="una hora antes" // Horários de cada postagem
                            ."||".
                            "dos horas antes"
                            ."||".
                            "tres horas antes"
                            ."||".
                            "cuatro horas antes"
                            ."||".
                            "cinco horas antes"
                            ."||".
                            "seis horas antes"
                            ."||".
                            "siete horas antes";
                    }
                    else {
                        $titles="Como a música indie mudou a indústria." // Títulos das postagens
                            ."||".
                            "Como músicos indie lançam suas músicas"
                            ."||".
                            "Semelhanças entre indie e grunge"
                            ."||".
                            "Indie no cenário nacional"
                            ."||".
                            "Vem mamar uvinha: Mc Carlos Sumaré surpreende o povo de Campinas"
                            ."||".
                            "Zebrabra: Sucesso entre crianças com autismo."
                            ."||".
                            "Banda indie dos anos 90 retorna com grandes hits";
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
                    }
                        
                        $images="content1.jpg" // Nomes dos arquivos de imagens do feed
                            ."||".
                            "content6.jpg"
                            ."||".
                            "content4.jpg"
                            ."||".
                            "content2.jpg"
                            ."||".
                            "content0.jpg"
                            ."||".
                            "content5.jpg"
                            ."||".
                            "content3.jpg";
                        $links="novidades/post/index.php" // Links dos destinos de cada postagem
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php"
                            ."||".
                            "novidades/post/index.php";
                        
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