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
    $NF1 = array(
            "en" => "Linked By Love",
            "es" => "Vinculados Por El Amor",
            "pt" => "Ligados Pelo Amor"
    );
    $GF1 = array(
            "en" => "Drama, Romance",
            "es" => "Drama, Romance",
            "pt" => "Drama, Romance"
    );
    $NF2 = array(
            "en" => "Paranormal activity",
            "es" => "Actividad Paranormal",
            "pt" => "Atividade Paranormal"
    );
    $GF2 = array(
            "en" => "Thriller",
            "es" => "Suspense",
            "pt" => "Suspense"
    );
    $NF3 = array(
            "en" => "The Blair Witch",
            "es" => "La Bruja de Blair",
            "pt" => "A Bruxa de Blair"
    );
    $GF3 = array(
            "en" => "Mystery, Psychological Horror",
            "es" => "Misterio, Terror psicologico",
            "pt" => "Mistério, Terror psicológico"
    );
    $NF4 = array(
            "en" => "Somewhere",
            "es" => "Un lugar cualquiera",
            "pt" => "Um Lugar Qualquer"
    );
    $GF4 = array(
            "en" => "Drama",
            "es" => "Drama",
            "pt" => "Drama"
    );
    $NF5 = array(
            "en" => "Our Idiot Brother",
            "es" => "El Idiota de Mi Hermano",
            "pt" => "O Idiota do Meu Irmão"
    );
    $GF5 = array(
            "en" => "Comedy",
            "es" => "Comedia",
            "pt" => "Comédia"
    );
    $NF6 = array(
            "en" => "Paranoid Park",
            "es" => "Parque Paranoico",
            "pt" => "Parque Pararóico"
    );
    $GF6 = array(
            "en" => "Drama, thriller",
            "es" => "Drama, Suspense",
            "pt" => "Drama, Suspense"
    );
    $NF7 = array(
            "en" => "Your Sister's Sister",
            "es" => "La Hermana de Su Hermana",
            "pt" => "A Irmã da Sua Irmã"
    );
    $GF7 = array(
            "en" => "Comedy, Drama",
            "es" => "Comedia, Drama",
            "pt" => "Comédia, Drama"
    );
    $NF8 = array(
            "en" => "The Texas Chain Saw Massacre",
            "es" => "La Masacre de la Sierra Eléctrica",
            "pt" => "O Massacre da Serra Elétrica"
    );
    $GF8 = array(
            "en" => "Thriller",
            "es" => "Suspense",
            "pt" => "Suspense"
    );
    $NF9 = array(
            "en" => "Kicking and Screaming",
            "es" => "Tiempo de decisión",
            "pt" => "Tempo de Decisão"
    );
    $GF9 = array(
            "en" => "Drama, Comedy",
            "es" => "Drama, Comedia",
            "pt" => "Drama, Comédia"
    );
    $NF0 = array(
            "en" => "Music Never Stopped",
            "es" => "La Música Nunca Paró",
            "pt" => "A Música Nunca Parou"
    );
    $GF0 = array(
            "en" => "Drama",
            "es" => "Drama",
            "pt" => "Drama"
    );
    
                        $newsNumber=10; // Número de postagens do feed
                        $highlight=0;
                        $titles="$NF1[$lang]" // Títulos das postagens
                            ."||".
                            "$NF2[$lang]"
                            ."||".
                            "$NF3[$lang]"
                            ."||".
                            "$NF4[$lang]"
                            ."||".
                            "$NF5[$lang]"
                            ."||".
                            "$NF6[$lang]"
                            ."||".
                            "$NF7[$lang]"
                            ."||".
                            "$NF8[$lang]"
                            ."||".
                            "$NF9[$lang]"
                            ."||".
                            "$NF0[$lang]";
                        $images=
                            "cin_03.jpg" // Nomes dos arquivos de imagens do feed
                            ."||".
                            "cin_01.jpg"
                            ."||".
                            "cin_05.jpg"
                            ."||".
                            "cin_02.jpg"
                            ."||".
                            "cin_04.jpg"
                            ."||".
                            "cin_03.jpg"
                            ."||".
                            "cin_06.jpg"
                            ."||".
                            "cin_05.jpg"
                            ."||".
                            "cin_01.jpg"
                             ."||".
                            "cin_02.jpg";
                        $links="post/index.php" // Links dos destinos de cada postagem
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php";
                        $dates=
                            "$date1[$lang]" // Horários de cada postagem
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
