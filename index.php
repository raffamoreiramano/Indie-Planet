<!doctype html>
<?php
    include 'includes/matrix.php'; // Inclusão do arquivo necessário para o funcionamento do resto dos includes
    $nome="Indie Planet";
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
                $dataum=array();
                $dataum['es']="una hora atras";
                $dataum['en']="one hour ago";
                $dataum['pt']="uma hora atrás";
            
                $datadois=array();
                $datadois['es']="hace dos horas";
                $datadois['en']="two hours ago";
                $datadois['pt']="duas horas atrás";
            
                $datatres=array();
                $datatres['es']=" hace tres horas ";
                $datatres['en']="three hours ago";
                $datatres['pt']="três horas atrás";
            
                $dataquatro=array();
                $dataquatro['es']=" hace cuatro horas ";
                $dataquatro['en']="four hours ago";
                $dataquatro['pt']="quatro horas atrás";
            
                $datacinco=array();
                $datacinco['es']=" hace cinco horas ";
                $datacinco['en']="five hours ago";
                $datacinco['pt']="cinco horas atrás";
            
                $dataseis=array();
                $dataseis['es']="hace seis horas";
                $dataseis['en']="six hours ago";
                $dataseis['pt']="seis horas atrás";
            
                $datasete=array();
                $datasete['es']="hace siete horas";
                $datasete['en']="seven hours ago";
                $datasete['pt']="sete horas atrás";
            
                
                $slides=7; // Número de slides do carrossel            
            if ($lang=='en') {
                $titles="Indie band from the 90s returns with great hits"
                    ."||".
                    "Título da segunda postagem teste do carrossel"
                    ."||".
                    "Indie artist leaves project hurting team future"
                    ."||".
                    "Shaun the Sheep: Indie success between kids"
                    ."||".
                    "Brazilian title Olhares excites but disappoints"
                    ."||".
                    "Cuphead: indie masterpiece"
                    ."||".
                    "Tank Girl style"; // Títulos dos slides
            }
            
            elseif ($lang=='es') {
                $titles="Banda indie de los años 90 regresa con grandes hits"
                    ."||".
                    "Gorillaz ganará nueva película"
                    ."||".
                    "Artista indie abandona proyecto perjudicando futuro de equipo"
                    ."||".
                    "Shaun el carnero: éxito indie infantil"
                    ."||".
                    "El título brasileño Olhares emociona pero decepciona"
                    ."||".
                    "Cuphead: obra de arte independiente"
                    ."||".
                    "Estilo Tank Girl"; // Títulos dos slides
            }
            
            else {
                $titles="Banda indie dos anos 90 retorna com grandes hits"
                    ."||".
                    "Gorillaz ganhará novo filme"
                    ."||".
                    "Artista indie abandona projeto prejudicando futuro de equipe"
                    ."||".
                    "Shaun o carneiro: sucesso indie infantil"
                    ."||".
                    "Título brasileiro Olhares empolga mas decepciona"
                    ."||".
                    "Cuphead: obra de arte indie"
                    ."||".
                    "Estilo Tank Girl"; // Títulos dos slides
            }
                
                $texts="Nunc eu pharetra nulla vitae ornare nulla etiam vehicula"
                    ."||".
                    "Suspendisse nunc nisi porta eu risus euismod hendrerit congue enim"
                    ."||".
                    "Donec maximus nunc at congue euismod mi orci vestibulum orci"
                    ."||".
                    "Lorem ipsum dolor sit amet consectetur adipiscing elit"
                    ."||".
                    "Mauris leo dui dictum id mauris a rutrum blandit orci"
                    ."||".
                    "Class aptent taciti sociosqu ad litora torquent per conubia nostra"
                    ."||".
                    "Praesent eleifend leo erat ac cursus augue porttitor ultricies"; // Descrições dos slides
                $images="content3.jpg"
                    ."||".
                    "content2.jpg"
                    ."||".
                    "content0.jpg"
                    ."||".
                    "content1.jpg"
                    ."||".
                    "content6.jpg"
                    ."||".
                    "content5.jpg"
                    ."||".
                    "content4.jpg"; // Nomes dos arquivos de imagens dos slides
                $links="musica/novidades/post/index.php"
                    ."||".
                    "cinema/novidades/post/index.php"
                    ."||".
                    "series/novidades/post/index.php"
                    ."||".
                    "animacoes/novidades/post/index.php"
                    ."||".
                    "literatura/criticas/post/index.php"
                    ."||".
                    "jogos/novidades/post/index.php"
                    ."||".
                    "moda/cortes/post/index.php"; // Links dos destinos de cada slide, começando pela pasta da área referente
                $dates=$dataum[$lang]
                    ."||".
                    $datadois[$lang]
                    ."||".
                    $datatres[$lang]
                    ."||".
                    $dataquatro[$lang]
                    ."||".
                    $datacinco[$lang]
                    ."||".
                    $dataseis[$lang]
                    ."||".
                    $datasete[$lang]; // Horário de cada postagem
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
                        $areas="musica||cinema||series||animacoes||literatura||jogos||moda"; // Área de cada postagem
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
