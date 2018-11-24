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
            
                $shaun=array();
                $shaun['en']="Shaun the Sheep: Indie Childrens Success";
                $shaun['es']="Shaun el carnero: éxito indie infantil";
                $shaun['pt']="Shaun o carneiro: sucesso indie infantil";
            
                $ptdois=array();
                $ptdois['en']="The story of the gorillaz pt2: which way will it lead?";
                $ptdois['es']="La historia del gorillaz es2: ¿qué camino te llevará?";
                $ptdois['pt']="A história do gorillaz pt2: qual rumo levara?";
            
                $descricaoshaun=array();
                $descricaoshaun['es']="El diseño de shaun gana gran espacio en los cines con dos buenas películas, vea más.";
                $descricaoshaun['en']="The shaun drawing gains big space in theaters with two good movies, see more.";
                $descricaoshaun['pt']="O desenho de shaun ganha grande espaço nos cinemas com dois bons filmes, veja mais.";
                $slides=7; // Número de slides do carrossel
                $titles="Título da primeira postagem teste do carrossel"
                    ."||".
                    "Título da segunda postagem teste do carrossel"
                    ."||".
                    "Título da terceira postagem teste do carrossel"
                    ."||".
                    $shaun[$lang]
                    ."||".
                    "Título da quinta postagem teste do carrossel"
                    ."||".
                    "Título da sexta postagem teste do carrossel"
                    ."||".
                    "Título da sétima postagem teste do carrossel"; // Títulos dos slides
                $texts="Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    "Descrição resumida da postagem que se encontra em um dos slides"
                    ."||".
                    $descricaoshaun[$lang]
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
                    "content1.jpg"
                    ."||".
                    "carouselteste01.png"
                    ."||".
                    "carouselteste02.png"
                    ."||".
                    "carouselteste03.png"; // Nomes dos arquivos de imagens dos slides
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
                        $titles="Título da primeira postagem do feed de notícias" // Títulos das postagens
                            ."||".
                            "Título da segunda postagem do feed de notícias"
                            ."||".
                            "Título da terceira postagem do feed de notícias"
                            ."||".
                            $ptdois[$lang]
                            ."||".
                            "Título da quinta postagem do feed de notícias"
                            ."||".
                            "Título da sexta postagem do feed de notícias"
                            ."||".
                            "Título da sétima postagem do feed de notícias";
                        $images="carouselteste01.png" // Nomes dos arquivos de imagens do feed
                            ."||".
                            "carouselteste02.png"
                            ."||".
                            "carouselteste03.png"
                            ."||".
                            "content3.jpg"
                            ."||".
                            "carouselteste02.png"
                            ."||".
                            "carouselteste03.png"
                            ."||".
                            "carouselteste01.png";
                        $links="musica/novidades/post/index.php" // Links dos destinos de cada postagem
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
                            "moda/cortes/post/index.php";
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
