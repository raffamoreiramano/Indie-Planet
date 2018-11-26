<!doctype html>
<?php
    include '../../includes/matrix.php';
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
                include $corredor.'includes/nav-mid.php';
            ?>
        </header>
        <?php
            include $corredor.'includes/trail.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-10 feed">
                    <?php
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
                        $newsNumber=7; // Número de postagens do feed
                        $highlight=0;
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
            </div>
        </div>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>