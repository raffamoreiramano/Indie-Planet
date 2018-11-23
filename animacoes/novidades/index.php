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
                    
                    // aqui estarão os lang para dar tradução aos titulos
                    //shaun
                    $shaun=array();
                    $shaun['en']="Shaun the Sheep: Indie Childrens Success";
                    $shaun['es']="Shaun el carnero: éxito indie infantil";
                    $shaun['pt']="Shaun o carneiro: sucesso indie infantil";
                    //gorillaz pt2
                    $ptdois=array();
                    $ptdois['en']="The story of the gorillaz pt2: which way will it lead?";
                    $ptdois['es']="La historia del gorillaz es2: ¿qué camino te llevará?";
                    $ptdois['pt']="A história do gorillaz pt2: qual rumo levara?";
                    //tank girl
                    $tankg=array();
                    $tankg['en']="Tank Girl: All about the girl who lives in the war tank.";
                    $tankg['es']="Tank Girl: todo sobre la chica q vive en el tanque de guerra.";
                    $tankg['pt']="Tank Girl: tudo sobre a garota q vive no tank de guerra. ";
                    //jamie
                    $jamie=array();
                    $jamie['en']="History of Jamie Hewlett: one of the creators and designer gorillaz.";
                    $jamie['es']="Historia de jamie hewlett: uno de los creadores y diseñador gorillaz.";
                    $jamie['pt']="História de jamie hewlett : um dos criadores e desenhista gorillaz.";
                    //gorillaz pt1 
                    $ptum=array();
                    $ptum['en']="The gorillaz story pt1: the beginning.";
                    $ptum['es']="La historia del gorillaz es1: el comienzo.";
                    $ptum['pt']="A história do gorillaz pt1: o começo.";
                    //indie jogo
                    $indjogo=array();
                    $indjogo['en']="The success of indie animations in games";
                    $indjogo['es']="El éxito de las animaciones indie en juegos";
                    $indjogo['pt']="O sucesso das animações indie em jogos";
                    //sobrevivencia animadores
                    $sanimadores=array();
                    $sanimadores['en']="How do indie animators survive?";
                    $sanimadores['es']="¿Cómo sobreviven los animadores indie?";
                    $sanimadores['pt']="Como sobrevivem os animadores indie?";
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
                         $images="../../img/content1.jpg"
                            ."||".
                            "../../img/content3.jpg"
                            ."||".
                            "../../img/content4.jpg"
                            ."||".
                            "../../img/content0.jpg"
                            ."||".
                             "../../img/content2.jpg"
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
