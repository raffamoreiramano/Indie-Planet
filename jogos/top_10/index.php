<!doctype html>
<?php
    include '../../includes/matrix.php';
    $spotifyPlaylist="7gGKwMOyRwE3ravFCAB4JY";
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
            <div class="row justify-content-between">
                <article class="col-12 col-lg-7">
                    <div class="row news-header">
                        <h1 class="mx-0 h4 font-weight-bold my-4 text-body"><?php switch($lang) {
    case "en":
        echo "Top 10 Indie Movies";
        break;
    case "es":
        echo "Top 10 Películas Indie";
        break;
    case "pt":
        echo "Top 10 Filmes Indie";
        break;
        
} ?></h1>
                    </div>
                    <?php
                        $gen=array(
                            "en" => "Genre",
                            "es" => "Género",
                            "pt" => "Gênero"
                        );
                        $dev=array(
                            "en" => "Developed by",
                            "es" => "Desarrollado por",
                            "pt" => "Desenvolvido por"
                        );
                        $lan=array(
                            "en" => "Released in",
                            "es" => "Lanzado en",
                            "pt" => "Lançado em"
                        );

                        $NJ = array(
                            0 => "Cuphead",
                            1 => "Minecraft",
                            2 => "Undertale",
                            3 => "Celeste",
                            4 => "Stardew Valley",
                            5 => "Hellblade: Senua&apos;s sacrifice",
                            6 => "Don&apos;t Starve",
                            7 => "Hotline Miami",
                            8 => "Red Strings Club",
                            9 => "Papers, Please"
                        );
                    
                        $VJ = array(
                            0 => "4TjUPXAn2Rg",
                            1 => "Nq_Q77bJ3H0",
                            2 => "cph6XMXRKzY",
                            3 => "70d9irlxiB4",
                            4 => "8A7A1X1TVNc",
                            5 => "fBJ0ifVtK5c",
                            6 => "bVbyn7c1X6E",
                            7 => "_5AJtaYx1Eg",
                            8 => "IELW1Mdzeak",
                            9 => "_QP5X6fcukM"
                        );
                    
                        $LJ = array(
                            0 => "29/09/2017",
                            1 => "Minecraft",
                            2 => "Undertale",
                            3 => "Celeste",
                            4 => "Stardew Valley",
                            5 => "Hellblade: Senua&apos;s sacrifice",
                            6 => "Don&apos;t Starve",
                            7 => "Hotline Miami",
                            8 => "Red Strings Club",
                            9 => "Papers, Please"
                        );
                    
                        $GJ = array(
                            0 => array(
                                "en" => "Run and gun, Platform",
                                "es" => "Run and gun, Plataforma",
                                "pt" => "Run and gun, Plataforma"
                            ),
                            1 => array(
                                "en" => "Sandbox",
                                "es" => "Sandbox",
                                "pt" => "Sandbox"
                            ),
                            2 => array(
                                "en" => "RPG",
                                "es" => "RPG",
                                "pt" => "RPG"
                            ),
                            3 => array(
                                "en" => "Platform",
                                "es" => "Plataforma",
                                "pt" => "Plataforma"
                            ),
                            4 => array(
                                "en" => "Farming simulation, RPG",
                                "es" => "Agro-simulación, RPG",
                                "pt" => "Agro-simulação, RPG"
                            ),
                            5 => array(
                                "en" => "Action, Adventure",
                                "es" => "Acción, Aventura",
                                "pt" => "Ação, Aventura"
                            ),
                            6 => array(
                                "en" => "Survival",
                                "es" => "Supervivencia",
                                "pt" => "Sobrevivência"
                            ),
                            7 => array(
                                "en" => "Shoot&apos;em up",
                                "es" => "Shoot&apos;em up",
                                "pt" => "Shoot&apos;em up"
                            ),
                            8 => array(
                                "en" => "Adventure",
                                "es" => "Aventura",
                                "pt" => "Aventura"
                            ),
                            9 => array(
                                "en" => "Strategy",
                                "es" => "Estrategia",
                                "pt" => "Estratégia"
                            )
                        );

                        $DJ = array(
                            0 => array(
                                "en" => "Chad and Jared Moldenhauer",
                                "es" => "Chad y Jared Moldenhauer",
                                "pt" => "Chad e Jared Moldenhauer"
                            ),
                            1 => array(
                                "en" => "Sandbox",
                                "es" => "Sandbox",
                                "pt" => "Sandbox"
                            ),
                            2 => array(
                                "en" => "RPG",
                                "es" => "RPG",
                                "pt" => "RPG"
                            ),
                            3 => array(
                                "en" => "Platform",
                                "es" => "Plataforma",
                                "pt" => "Plataforma"
                            ),
                            4 => array(
                                "en" => "Farming simulation, RPG",
                                "es" => "Agro-simulación, RPG",
                                "pt" => "Agro-simulação, RPG"
                            ),
                            5 => array(
                                "en" => "Action, Adventure",
                                "es" => "Acción, Aventura",
                                "pt" => "Ação, Aventura"
                            ),
                            6 => array(
                                "en" => "Survival",
                                "es" => "Supervivencia",
                                "pt" => "Sobrevivência"
                            ),
                            7 => array(
                                "en" => "Shoot&apos;em up",
                                "es" => "Shoot&apos;em up",
                                "pt" => "Shoot&apos;em up"
                            ),
                            8 => array(
                                "en" => "Adventure",
                                "es" => "Aventura",
                                "pt" => "Aventura"
                            ),
                            9 => array(
                                "en" => "Strategy",
                                "es" => "Estrategia",
                                "pt" => "Estratégia"
                            )
                        );
                    
                        $watchnow=array("en" => "Coming soon:","es" => "En breve:","pt" => "Em breve:");
                        $text = substr($text,(strpos($text,'</blockquote>')+13),strlen($text));
                        $textP = explode ('</p>',$text);
                        $textPN = count($textP);
                        
                        for ($i=9;$i>=0;$i--) {
                            echo "<section class='mb-4 row'>\n<div class='col-12'>\n<h3 class='h5 font-weight-bold'>";
                            echo "#".($i+1).". ".$NJ[$i]."</h3>\n";
                            echo '<div class="embed-responsive mb-3 embed-responsive-16by9">
                            <iframe class="embed-resp0onsive-item" src="https://www.youtube.com/embed/'.$VJ[$i].'" allowfullscreen></iframe>
                        </div>';
                            echo "<p class='m-0'><strong>".$gen[$lang].":</strong> ".$GJ[$i][$lang]."</p>";
                            echo "<p class='m-0'><strong>".$dev[$lang].":</strong> ".$DJ[$i][$lang]."</p>";
                            echo "<p><strong>".$lan[$lang].":</strong> ".$LJ[$i]."</p>";
                            echo $textP[rand(1,(count($textP)-2))]."</p>\n</div>\n</section>";
                        }
                    ?>
                </article>
                <aside class="col-12 col-lg-4">
                    <div class='aside-content row bg-dark p-3'>
                        <h4 class='h4 col my-auto font-weight-bold px-0'><?php echo $watchnow[$lang]; ?></h4>                    
                    </div>
                    <div class="row mb-3">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-resp0onsive-item" src="https://www.youtube.com/embed/UJfeziEzSg4" allowfullscreen></iframe>
                        </div>
                    </div>
                    <section class="row">
                        <div class="col">
                            
                            <?php
                            $news['titles']['en']=array(
                                "Recognition of the Indie Culture",
                                "Artist being sued for plagiarism of indie titles",
                                "Indie titles are gaining ground in the mainstream media",
                                "Direction of the industry",
                                "Brazilian artist wins Best Indie Title award"
                            );
                            $news['dates']['en']=array("six","two","three","four","five");

                            $news['titles']['es']=array(
                                "Reconocimiento de la Cultura Indie",
                                "Artista siendo demandado por plagio de títulos indie",
                                "Títulos indie están ganando terreno en los medios mainstream",
                                "Dirección de la industria",
                                "Artista brasileña gana el premio de Mejor Título Indie"
                            );
                            $news['dates']['es']=array("seis","dos","tres","cuatro","cinco");

                            $news['titles']['pt']=array(
                                "Reconhecimento da Cultura Indie",
                                "Artista sendo processado por plágio de títulos indie",
                                "Títulos indie estão ganhando espaço na mídia mainstream",
                                "Rumo da indústria",
                                "Artista brasileiro ganha prêmio de Melhor Título Indie"
                            );
                            $news['dates']['pt']=array("seis","duas","três","quatro","cinco");
                            $news['areas']=array("musica","cinema","series","animacoes","jogos");
                            $horas=array();
                            $horas['en']="hours+ago";
                            $horas['es']="horas+antes";
                            $horas['pt']="horas+atrás";
                            $sug=array();
                            $sug['en']="Suggestions";
                            $sug['es']="Sugerencias";
                            $sug['pt']="Sugestões";
                            $imgrand=array(0,1,2,3,4,5,6);
                            echo '<h4 class="bg-dark p-3 row aside-content font-weight-bold">'.$sug[$lang].'</h4>';
                            shuffle($imgrand);
                                for ($i=0;$i<5;$i++) {
                                    echo "<article class='container-fluid pr-0 pl-lg-0 my-3'>\n<div class='row'>\n<a href='";
                                    echo $corredor.$news['areas'][rand(0,4)]."/novidades/post/index.php";
                                    echo "?t=".str_replace(' ','+',$news['titles'][$lang][$i])."&img=content".$imgrand[$i].".jpg&dt="
                                    .$news['dates'][$lang][rand(0,4)]."+horas+atrás' class='col-4 d-block my-auto p-0 pr-md-3'>\n";
                                    echo "<picture>\n<img class='rounded img-fluid' alt='".$news['titles'][$lang][$i]."' src='";
                                    echo $corredor."img/content".$imgrand[$i].".jpg'>\n</picture>\n</a>\n";
                                    echo "<div class='col-8 h-auto d-flex flex-column pl-2 pr-0'><div class='my-auto'><a href='";
                                    echo $corredor.$news['areas'][rand(0,4)]."/novidades/post/index.php";
                                    echo "?t=".str_replace(' ','+',$news['titles'][$lang][$i])."&img=content".$imgrand[$i].".jpg&dt="
                                    .$news['dates'][$lang][rand(0,4)]."+".$horas[$lang]."' class='text-body'>\n";
                                    echo "<h3 class='h5 d-inline font-weight-bold'>".$news['titles'][$lang][$i]."</h3></a></div></div></div></article>";
                                }
                            ?>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>
