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
                    //celeste
                    $shaun=array();
                    $shaun['en']="Celeste The brazilian indie game who was nominated to game of the year ";
                    $shaun['es']="El juego Indie brasileño indicado para el juego del año";
                    $shaun['pt']="Celeste O jogo Indie brasileiro indicado para game do ano.";
                    //last night
                    $ptdois=array();
                    $ptdois['en']="Possible delay of The last night for 2019";
                    $ptdois['es']="Posible retraso de The last night para 2019";
                    $ptdois['pt']="Possivel delay de The last night para 2019.";
                    //anicine
                    $tankg=array();
                    $tankg['en']="National independent games receive funding from Ancine.";
                    $tankg['es']="Los Juegos independientes nacionales reciben fondos de apoyo de Ancine.";
                    $tankg['pt']="Jogos independentes nacionais recebem verba de apoio da Ancine.";
                    //gory
                    $jamie=array();
                    $jamie['en']="GUTS Gory Ultimate Tournament The most brutal Brazilian indie is arriving soon.";
                    $jamie['es']="GUTS Gory Ultimate Tournament El indie brasileño más brutal llegará pronto.";
                    $jamie['pt']="GUTS Gory Ultimate Tournament Show O indie brasileiro mais brutal vem ai.";
                    //blazing 
                    $ptum=array();
                    $ptum['en']="New Blazing Chrome images a Brazilian homage to Metal Slug and Contra 3.";
                    $ptum['es']="New Blazing Chrome representa un homenaje brasileño a Metal Slug y Contra 3.";
                    $ptum['pt']="Novas imagens de Blazing Chrome uma homenagem brasileira a Metal Slug e Contra 3.";
                    //indie jogo
                    $indjogo=array();
                    $indjogo['en']="The success of indie animations in games";
                    $indjogo['es']="El éxito de las animaciones indie en juegos";
                    $indjogo['pt']="O sucesso das animações indie em jogos";
                    //rumor
                    $sanimadores=array();
                    $sanimadores['en']="Possible continuation of Five Nights At Freddys may come in 2020";
                    $sanimadores['es']="La posible continuación de cinco noches en Freddys puede llegar en 2020";
                    $sanimadores['pt']="Possivel continuação de Five Nights At Freddys pode vir em 2020 ";
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
                            "content5.jpg"
                            ."||".
                            "content6.jpg";
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
