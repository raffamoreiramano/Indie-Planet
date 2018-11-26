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
                    
                        $datasete=array();
                        $datasete['es']="hace siete horas";
                        $datasete['en']="seven hours ago";
                        $datasete['pt']="sete horas atrás";
                    
                        $newsNumber=4; // Número de postagens do feed
                        $highlight=0; // Cada postagem de número semelhante ao valor de $highlight é um destaque
                        $titles="Hipster" // Títulos das postagens
                            ."||".
                            "Grunge"
                            ."||".
                            "Gypsy"
                            ."||".
                            "Punk";
                        $images="xadrezpaisagem.png" // Nomes dos arquivos de imagens do feed
                            ."||".
                            "xadrezpaisagem.png"
                            ."||".
                            "xadrezpaisagem.png"
                            ."||".
                            "xadrezpaisagem.png";
                        $links="post/index.php" // Links dos destinos de cada postagem
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php"
                            ."||".
                            "post/index.php";
                        $dates=$dataum[$lang]
                            ."||".
                            $datadois[$lang]
                            ."||".
                            $datatres[$lang]
                            ."||".
                            $datasete[$lang]; // Horário de cada postagem
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