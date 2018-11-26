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
    $menuT1 = array(
    "en" => "Recruitment for Indie Actors / Actresses",
    "es" => "Reclutamiento para Actores / Actrices Indies",
    "pt" => "Recrutamento para Atores/Atrizes índies"
    );
    $submenu1 = array(
    "en" => "Producer Indie is in search of new talent for his newest movie!",
    "es" => "¡Productor Indie está en busca de nuevos talentos para su nueva película!",
    "pt" => "Produtor índie está em busca de novos talentos para seu mais novo filme!"
    );
    $menuT2 = array(
    "en" => "Learn How to Make an Indie Movie",
    "es" => "Aprende cómo hacer una película Indie",
    "pt" => "Saiba como fazer um filme Indie"
    );
    $submenu2 = array(
    "en" => "Director de éxito, Wong Lee da Silva de consejos para ingresantes en este mercado",
    "es" => "Successful director, Wong Lee da Silva gives tips for newcomers to this market",
    "pt" => "Diretor de sucesso, Wong Lee da Silva da dicas para ingressantes neste mercado"
    );
    $menuT3 = array(
    "en" => "Indian cinema grows more and more around the world",
    "es" => "El cine indie crece cada vez más alrededor del mundo",
    "pt" => "Cinema índie cresce cada vez mais ao redor do mundo"
    );
    $submenu3 = array(
    "en" => "The quality of indie films is attracting the attention of more and more people",
    "es" => "La calidad de las películas indie está llamando la atención de cada vez más personas",
    "pt" => "A qualidade dos filmes índies está chamando a atenção de cada vez mais pessoas"
    );
    $menuT4 = array(
    "en" => "Hollywood se impresiona con la calidad de las películas indie brasileñas",
    "es" => "Hollywood is impressed by the quality of Brazilian indie films",
    "pt" => "Hollywood se impressiona com a qualidade dos filmes índies brasileiros"
    );
    $submenu4 = array(
    "en" => "As incredible as it may sound, Brazilian indian films catch the eye of hollywood studios",
    "es" => "Por increíble que pueda parecer, películas independientes brasileños atraen la atención de los estudios de Hollywood",
    "pt" => "Por mais incrivel que pareça, filmes índies brasileiros chamam a atenção dos estudios de hollywood"
    );
    $menuT5 = array(
    "en" => "Indie cinema gains more and more strength in Brazil",
    "es" => "Cine Indie gana cada vez más fuerza en Brasil",
    "pt" => "Cinema índie ganha cada vez mais força no Brasil"
    );
    $submenu5 = array(
    "en" => "Cinema Índie Brasileiro is increasingly evolving more, and causing interest in the curious",
    "es" => "cine independiente brasileña está evolucionando cada vez más y haciendo que el interés por el curioso",
    "pt" => "Cinema Índie Brasileiro está cada vez evoluindo mais, e causando o interesse nos curiosos"
    );
    $menuT6 = array(
    "en" => "New movie gets more than 1 million reais in 24 hours",
    "es" => "La película debutante recaudó más de 1 millón de reales en 24 horas",
    "pt" => "Filme estreante arrecada mais de 1 Milhão de reais em 24 horas"
    );
    $submenu6 = array(
    "en" => "Being a sales hit, The Electric Saw Massacre raises more than 1 Million on the first day",
    "es" => "Siendo un éxito de ventas, La masacre de la sierra eléctrica recauda más de 1 millón en el primer día",
    "pt" => "Sendo um sucesso de vendas, O massacre da serra elétrica arrecada mais de 1 Milhão no primeiro dia"
    );
    $menuT7 = array(
    "es" => "La película Indie recibe el oscar de mejor banda sonora en 2018",
    "en" => "Indie Film Receives Oscar for Best Soundtrack in 2018",
    "pt" => "Filme Indie recebe o oscar de melhor trilha sonora em 2018"
    );
    $submenu7 = array(
    "en" => "The Oscar of the best soundtrack is from Brazil!",
    "es" => "¡El Oscar a la mejor banda sonora es de Brasil!",
    "pt" => "O Oscar de melhor trilha sonora é do Brasil!"
    );
            
    $title1 = array();
            $title1['es']="El cine indie gana cada vez más fuerza en Brasil"; 
            $title1['en']="Indie cinema gains more and more strength in Brazil"; 
            $title1['pt']="Cinema índie ganha cada vez mais força no Brasil"; 
                     
    $title2 = array();
            $title2['es']="La película debutante recaudó más de 1 millón de reales en 24 horas"; 
            $title2['en']="New movie gets more than 1 million reais in 24 hours"; 
            $title2['pt']="Filme estreante arrecada mais de 1 Milhão de reais em 24 horas";
                     
    $title3 = array();
            $title3['es']="La película Indie recibe el oscar de mejor banda sonora en 2018"; 
            $title3['en']="Indie Film Receives Oscar for Best Soundtrack in 2018"; 
            $title3['pt']="Filme Indie recebe o óscar de melhor trilha sonora em 2018"; 
                    
    $title4 = array();
            $title4['es']="Muere famoso director Indie: Wong Lee da Silva"; 
            $title4['en']="Dies famous director Indie: Wong Lee da Silva"; 
            $title4['pt']="Morre famoso diretor Indie: Wong Lee da Silva"; 
                    
    $title5 = array();
            $title5['es']="Las nuevas películas Indies serán lanzadas este año"; 
            $title5['en']="New Indies films to be released later this year"; 
            $title5['pt']="Novos filmes Indies serão lançados ainda este ano"; 
                    
    $title6 = array();
            $title6['es']="La estrella de cine indie es arrestado"; 
            $title6['en']="Indie movie star is arrested"; 
            $title6['pt']="Astro do cinema Indie é preso"; 
                    
    $title7 = array();
            $title7['es']="Japón busca nuevos talentos para el movimiento Indie"; 
            $title7['en']="Japan seeks new talent for Indie movement"; 
            $title7['pt']="Japão busca novos talentos para o movimento Indie";
            
    
                $slides=7; // Número de slides do carrossel
                $titles=
                "$menuT1[$lang]"
                    ."||".
                "$menuT2[$lang]"
                    ."||".
                "$menuT3[$lang]"
                    ."||".
                "$menuT4[$lang]"
                    ."||".
                "$menuT5[$lang]" 
                    ."||".
                "$menuT6[$lang]"
                    ."||".
                "$menuT7[$lang]";
                $texts=
                "$submenu1[$lang]"
                ."||".
                "$submenu2[$lang]"
                ."||".
                "$submenu3[$lang]"
                ."||".
                "$submenu4[$lang]"
                ."||".
                "$submenu5[$lang]"
                ."||".
                "$submenu6[$lang]"
                ."||".
                "$submenu7[$lang]"; // Descrições dos slides
                $images=
                "content0.jpg"
                ."||".
                "content1.jpg"
                ."||".
                "content2.jpg"
                ."||".
                "content3.jpg"
                ."||".
                "content4.jpg"
                ."||".
                "content5.jpg"
                ."||".
                "content6.jpg"; // Nomes dos arquivos de imagens dos slides
                $links="novidades/post/index.php"
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
                    "novidades/post/index.php"; // Links dos destinos de cada slide, começando pela pasta da área referente
                $dates=     "$date1[$lang]" // Horários de cada postagem
                            ."||".
                            "$date2[$lang]"
                            ."||".
                            "$date3[$lang]"
                            ."||".
                            "$date4[$lang]"
                            ."||".
                            "$date5[$lang]"
                            ."||".
                            "$date6[$lang]"
                            ."||".
                            "$date7[$lang]"
                            ."||".
                            "$date2[$lang]"
                            ."||".
                            "$date6[$lang]"
                            ."||".
                            "$date4[$lang]"; // Horário de cada postagem
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
                        $titles=
                            "$title1[$lang]" // Títulos das postagens
                            ."||".
                            "$title2[$lang]"
                            ."||".
                            "$title3[$lang]"
                            ."||".
                            "$title4[$lang]"
                            ."||".
                            "$title5[$lang]"
                            ."||".
                            "$title6[$lang]"
                            ."||".
                            "$title7[$lang]";
                        $images=
                            "content6.jpg"
                            ."||".
                            "content5.jpg"
                            ."||".
                            "content4.jpg"
                            ."||".
                            "content3.jpg"
                            ."||".
                            "content2.jpg"
                            ."||".
                            "content1.jpg"
                            ."||".
                            "content0.jpg";
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
                        $dates="$date1[$lang]" // Horários de cada postagem
                            ."||".
                            "$date2[$lang]"
                            ."||".
                            "$date3[$lang]"
                            ."||".
                            "$date4[$lang]"
                            ."||".
                            "$date5[$lang]"
                            ."||".
                            "$date6[$lang]"
                            ."||".
                            "$date7[$lang]"
                            ."||".
                            "$date2[$lang]"
                            ."||".
                            "$date6[$lang]"
                            ."||".
                            "$date4[$lang]";
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