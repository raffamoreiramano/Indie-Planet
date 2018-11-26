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
                    // aqui estarão os lang para dar tradução aos titulos
                    //O Apanhador no Campo de Centeio
                    $shaun=array();
                    $shaun['en']="The Catcher in the Rye: Most Read Romance of the USA in 1951";
                    $shaun['es']="El Cazador en el Campo de centeno: Romance más leído de los EUA en 1951";
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
                    $indjogo['en']="The famous Brazilian memes";
                    $indjogo['es']="Los famosos memes brasileños";
                    $indjogo['pt']="Os famosos memes brasileiros";
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
        
                    //mudança da liinguagem das descrições
        
                    $descricaoum=array();
                    $descricaoum['es']="Romance Indie en la década de los 50 fue uno de los más leídos en todo los Estados Unidos de América.";
                    $descricaoum['en']="Indie romance in the 50s was one of the most read throughout the United States of America.";
                    $descricaoum['pt']="Romance Indie na década de 50 foi um dos mais lidos em todo os Estados Unidos da América.";
        
                    $descricaodois=array();
                    $descricaodois['es']="Hay editoriales que publican libros independientes. ¿Pueden llamarse Indie?";
                    $descricaodois['en']="Publishers publish independent books. Can they be called Indie?";
                    $descricaodois['pt']="Surgem editoras que publicam livros independentes. Elas podem se denominar Indie?";
        
                    $descricaotres=array();
                    $descricaotres['es']="Salida independiente de los 10 el mejor del vendedor.";
                    $descricaotres['en']="Check out the Best Sellers Indie, top 10.";
                    $descricaotres['pt']="Confira os Best Sellers Indie, top 10.";
        
                    $descricaoquatro=array();
                    $descricaoquatro['es']="Con la gran cantidad de HQs que se convierten en películas, el aumento de los cómics Indie es evidente.";
                    $descricaoquatro['en']="With the large amount of HQs flipping movies, the rise of Indie comics is evident.";
                    $descricaoquatro['pt']="Com a grande quantidade de HQs virando filmes, o aumento de quadrinhos Indie é evidente.";
        
                    $descricaocinco=array();
                    $descricaocinco['es']="La película se estrenará en el mes de mayo.";
                    $descricaocinco['en']="Know the book Indie: The Advantages of Being Invisible that becomes film in 2012.";
                    $descricaocinco['pt']="Conheça o livro Indie: As Vantagens de Ser Invisivel que se torna filme em 2012.";
        
                    $descricaoseis=array();
                    $descricaoseis['es']="La estadística de las redes sociales afirma que el 9 de 10 de los memes brasileños son Indie!";
                    $descricaoseis['en']="Social network statistic states that 9 of 10 Brazilian memes are Indie!";
                    $descricaoseis['pt']="Estatística das redes sociais afirma que 9 de 10 dos memes brasileiros são Indie!";
        
                    $descricaosete=array();
                    $descricaosete['es']="Meme Indie: Sosa del Vin Diesel, es oficialmente el más compartido del mundo";
                    $descricaosete['en']="Meme Indie: Vin Diesel look-alike, officially the most shared in the world";
                    $descricaosete['pt']="Meme Indie: Sósia do Vin Diesel, é oficialmente o mais compartilhado do mundo";
        
                
                   
        
            
                $slides=7; // Número de slides do carrossel
                $titles="$shaun[$lang]"// Títulos das postagens
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
                $texts="$descricaoum[$lang]"
                    ."||".
                    "$descricaodois[$lang]"
                    ."||".
                    "$descricaotres[$lang]"
                    ."||".
                    "$descricaoquatro[$lang]"
                    ."||".
                    "$descricaocinco[$lang]"
                    ."||".
                    "$descricaoseis[$lang]"
                    ."||".
                    "$descricaosete[$lang]"; // Descrições dos slides
                // Nomes dos arquivos de imagens dos slides
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
                            "content5.jpg"
                            ."||".
                            "content6.jpg";// Títulos dos slides
                $links="criticas/post/index.php"
                    ."||".
                    "criticas/post/index.php"
                    ."||".
                    "criticas/post/index.php"
                    ."||".
                    "criticas/post/index.php"
                    ."||".
                    "criticas/post/index.php"
                    ."||".
                    "criticas/post/index.php"
                    ."||".
                    "criticas/post/index.php"; // Links dos destinos de cada slide, começando pela pasta da área referente
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

                        $titles="$ptdois[$lang]"// Títulos das postagens
                            ."||".
                            "$tankg[$lang] "
                            ."||".
                            "$jamie[$lang]"
                            ."||".
                            "$shaun[$lang]"
                            ."||".
                            "$ptum[$lang]"
                            ."||".
                            "$indjogo[$lang]"
                            ."||".
                            "$sanimadores[$lang]";
                        $images="content3.jpg"
                            ."||".
                            "content4.jpg"
                            ."||".
                            "content0.jpg"
                            ."||".
                            "content1.jpg"
                            ."||".
                            "content2.jpg"
                            ."||".
                            "content5.jpg"
                            ."||".
                            "content6.jpg";
                        $links="criticas/post/index.php" // Links dos destinos de cada postagem
                            ."||".
                            "criticas/post/index.php"
                            ."||".
                            "criticas/post/index.php"
                            ."||".
                            "criticas/post/index.php"
                            ."||".
                            "criticas/post/index.php"
                            ."||".
                            "criticas/post/index.php"
                            ."||".
                            "criticas/post/index.php";
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