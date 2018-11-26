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
                $texts="Lorem ipsum dolor sit amet consectetur adipiscing elit"
                    ."||".
                    "Lorem ipsum dolor sit amet consectetur adipiscing elit"
                    ."||".
                    "Lorem ipsum dolor sit amet consectetur adipiscing elit"
                    ."||".
                    "Lorem ipsum dolor sit amet consectetur adipiscing elit"
                    ."||".
                    "Lorem ipsum dolor sit amet consectetur adipiscing elit"
                    ."||".
                    "Lorem ipsum dolor sit amet consectetur adipiscing elit"
                    ."||".
                    "Lorem ipsum dolor sit amet consectetur adipiscing elit"; // Descrições dos slides
                $images="xadrezpaisagem.png"
                    ."||".
                    "xadrezpaisagem.png"
                    ."||".
                    "xadrezpaisagem.png"
                    ."||".
                    "xadrezpaisagem.png"
                    ."||".
                    "xadrezpaisagem.png"
                    ."||".
                    "xadrezpaisagem.png"
                    ."||".
                    "xadrezpaisagem.png"; // Nomes dos arquivos de imagens dos slides
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