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
                    //celeste
                    $shaun=array();
                    $shaun['en']="Check out Celeste and other indie Brazilian titles that launched this year";
                    $shaun['es']="Echa un vistazo a Celeste y otros títulos indie brasileños que se lanzaron este año.";
                    $shaun['pt']="Confira Celeste e outros titulos indies brasileiros que lançaram esse ano";
                    //last night
                    $ptdois=array();
                    $ptdois['en']="Indie producer is accused of copying Hollywood script.";
                    $ptdois['es']="El productor independiente está acusado de copiar el guión de Hollywood.";
                    $ptdois['pt']="Produtora indie é acusada de copiar script de Hollywood.";
                    //anicine
                    $tankg=array();
                    $tankg['en']="EXCLUSIVE: Details of 171 revealed.";
                    $tankg['es']="EXCLUSIVO: Detalles de 171 revelados.";
                    $tankg['pt']="EXCLUSIVO: Detalhes de 171 revelados.";
                    //gory
                    $jamie=array();
                    $jamie['en']="You will not believe the secrets that are in this indie game.";
                    $jamie['es']="No vas a creer los secretos que hay en este juego indie.";
                    $jamie['pt']="Voce não vai acreditar nos segredos que estão nesse jogo indie.";
                    //blazing 
                    $ptum=array();
                    $ptum['en']="Brazilian indie game wins international awards.";
                    $ptum['es']="Juego indie brasileño gana premios internacionales.";
                    $ptum['pt']="Jogo indie brasileiro ganha premios internacionais.";
                    //indie jogo
                    $indjogo=array();
                    $indjogo['en']="The success of indie animations in games";
                    $indjogo['es']="El éxito de las animaciones indie en juegos";
                    $indjogo['pt']="O sucesso das animações indie em jogos";
                    //rumor
                    $sanimadores=array();
                    $sanimadores['en']="New indie Brazilian can be announced in December";
                    $sanimadores['es']="Nuevo indie brasileño se podrá anunciar en diciembre.";
                    $sanimadores['pt']="Novo indie brasileiro pode ser anunciado em dezembro ";
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
                    $descricaoum['es']="Celeste compite en varias categorías además del juego del año.";
                    $descricaoum['en']="Celeste is competing in several categories besides game of the year";
                    $descricaoum['pt']="Celeste esta concorendo em diversas categorias alem de game do ano";
        
                    $descricaodois=array();
                    $descricaodois['es']="Hollywood dice que el productor copió varias películas.";
                    $descricaodois['en']="Hollywood says producer copied several movies";
                    $descricaodois['pt']="Hollywood diz que produtora copiou diversos filmes";
        
                    $descricaotres=array();
                    $descricaotres['es']="Varios detalles como jugabilidad y música revelados de primera mano.";
                    $descricaotres['en']="Various details like gameplay and music revealed firsthand.";
                    $descricaotres['pt']="Diversos detalhes como gameplay e músicas revelados em primeira mão.";
        
                    $descricaoquatro=array();
                    $descricaoquatro['es']="Este juego es realmente una obra maestra.";
                    $descricaoquatro['en']="This game is really a masterpiece.";
                    $descricaoquatro['pt']="Esse jogo é realmente uma obra prima.";
        
                    $descricaocinco=array();
                    $descricaocinco['es']="El juego está inspirado en los clásicos con un toque de innovación.";
                    $descricaocinco['en']="The game is inspired by the classics with a dash of innovation";
                    $descricaocinco['pt']="O game se inspira nos classicos com uma pitada de inovação";
        
                    $descricaoseis=array();
                    $descricaoseis['es']="Conoce las animaciones de juegos como flinthook";
                    $descricaoseis['en']="Get to know the animations of games like flinthook";
                    $descricaoseis['pt']="Conheça as animações de jogos como flinthook";
        
                    $descricaosete=array();
                    $descricaosete['es']="Este juego puede ser el título indie más grande de 2019.";
                    $descricaosete['en']="This game may be the biggest indie title of 2019";
                    $descricaosete['pt']="Esse jogo pode ser o maior título indie de 2019";
        
                
                   
        
            
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
