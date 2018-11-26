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
                        $newsNumber=7; // Número de postagens do feed
                        $highlight=0; // Cada postagem de número semelhante ao valor de $highlight é um destaque
                    
                     //O Apanhador no Campo de Centeio
                    $shaun=array();
                    $shaun['en']="The Catcher in the Rye: Most Read Romance of the USA in 1951";
                    $shaun['es']="El Cazador en el Campo de centeno: Romance más leído de los EE.UU. en 1951";
                    $shaun['pt']="O Apanhador no Campo de Centeio: Romance mais lido dos EUA em 1951";
                    //Surgimento de editores Independentes
                    $ptdois=array();
                    $ptdois['en']="Emergence of Independent Publishers: Is This Indie Really?";
                    $ptdois['es']="Surgimiento de editoriales independientes: ¿Eso es Indie mismo?";
                    $ptdois['pt']="Surgimento de editoras independentes: Isso é Indie mesmo?";
                    //Best Seller Indie
                    $tankg=array();
                    $tankg['en']="Tank Girl: All about the girl who lives in the war tank.";
                    $tankg['es']="Tank Girl: todo sobre la chica q vive en el tanque de guerra.";
                    $tankg['pt']="Best Seller Indie: Estouro indie de vendas";
                    //quadrinho indie repercução do cinema
                    $jamie=array();
                    $jamie['en']="Many HQ based movies: Stimulate Indie Quilts";
                    $jamie['es']="Muchas películas basadas en HQ: Estimulan cuadinos Indie";
                    $jamie['pt']="Muitos filmes baseados em HQs: Estimulam quadinhos Indie";
                    //As Vantagens de Ser Invisível 
                    $ptum=array();
                    $ptum['en']="The Advantages of Being Invisible: turns movie in 2012";
                    $ptum['es']="Las Ventajas de Ser Invisible: se convierte en película en 2012";
                    $ptum['pt']="As Vantagens de Ser Invisível: vira filme em 2012";
                    //Memes Indie 95%?
                    $indjogo=array();
                    $indjogo['en']="The famous Brazilian memes: 9 out of 10 are Indie!";
                    $indjogo['es']="Los famosos memes brasileños: el 9 de 10 son Indie!";
                    $indjogo['pt']="Os famosos memes brasileiros: 9 de 10 são Indie!";
                    //Os memes mais compartilhados de outubro
                    $sanimadores=array();
                    $sanimadores['en']="The memes that blew up: Look-alike Vin Diesel";
                    $sanimadores['es']="Los memes que estallaron: Sosa Vin Diesel";
                    $sanimadores['pt']="Os memes que explodiram: Sósia Vin Diesel";
                     //mudança de linguagem nas datas
                    
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
        
        
                    
                        $titles="$shaun[$lang]" // Títulos das postagens
                            ."||".
                            "$ptdois[$lang]"
                            ."||".
                            "$tankg[$lang] "
                            ."||".
                            "$jamie[$lang]"
                            ."||".
                            "$ptum[$lang]"
                            ."||".
                            "$indjogo[$lang]"
                            ."||".
                            "$sanimadores[$lang]";
                         $images="content1.jpg"
                            ."||".
                            "content3.jpg"
                            ."||".
                            "content4.jpg"
                            ."||".
                            "content0.jpg"
                            ."||".
                             "content2.jpg"
                            ."||".
                            "carouselteste01.png"
                            ."||".
                            "carouselteste03.png";
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
                        $dates="$dataum[$lang]"
                            ."||".
                            "$datadois[$lang]"
                             ."||".
                             "$datatres[$lang]"
                             ."||".
                             "$dataquatro[$lang]"
                             ."||".
                             "$datacinco[$lang]"
                             ."||".
                             "$dataseis[$lang]"
                             ."||".
                             "$datasete[$lang]"; // Horário de cada postagem
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