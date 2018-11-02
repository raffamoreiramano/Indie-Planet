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
        
           <div class="container mt-lg-5">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-7 feed">
                    <?php
                        $newsNumber=7; // Número de postagens do feed
                        $titles="Shaun o carneiro: sucesso indie infantil" // Títulos das postagens
                            ."||".
                            "A história do gorillaz pt2: qual rumo levara?"
                            ."||".
                            "Tank girl: tudo sobre a garota q vive no tank de guerra. "
                            ."||".
                            "História de jamie hewlett : criador e desenhista gorillaz."
                            ."||".
                            "A história do gorillaz pt1: o começo."
                            ."||".
                            "Título da sexta postagem do feed de notícias"
                            ."||".
                            "Título da sétima postagem do feed de notícias";
                        $images="../../img/shauncarneiro.jpg" // Nomes dos arquivos de imagens do feed
                            ."||".
                            "../../img/gorillaznew.jpg"
                            ."||".
                            "../../img/tankgirl.jpg"
                            ."||".
                            "../../img/jamiehewlett.jpg"
                            ."||".
                             "../../img/gorillazold.jpg"
                            ."||".
                            "carouselteste03.png"
                            ."||".
                            "carouselteste01.png";
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
                            "post/index.php";
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
                        $areas="Novidades||Novidades||Novidades||Novidades||Novidades||Novidades||Novidades"; // Área de cada postagem
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
