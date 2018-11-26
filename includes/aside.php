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
    
?>
<aside class="col-12 col-lg-4 feed">
    <section class="row">
        <div class="col">
            <h4 class="bg-dark p-3 row aside-content font-weight-bold"><?php echo $sug[$lang]; ?></h4>
            <?php
            $imgrand=array(0,1,2,3,4,5,6);
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
            <?php
            $top5Mh4=array();
            $top5Mh4['en']="most heard";
            $top5Mh4['es']="más escuchadas";
            $top5Mh4['pt']="mais ouvidas";
            $top5Ma=array();
            $top5Ma['en']="see more";
            $top5Ma['es']="ver más";
            $top5Ma['pt']="ver mais";
                switch ($pastaAtualFim) {
                    case "musica":
                        echo "<section class='row'>\n<div class='col px-0'>\n";
                        echo "<a class='aside-content row mx-0 bg-dark p-3' href='".$corredor."musica/top_10/index.php'>\n";
                        echo "<h4 class='h4 col my-auto font-weight-bold px-0'>Top 5 ".$top5Mh4[$lang];
                        echo "</h4>\n<p class='small d-none d-sm-block my-auto col-3 text-dark text-right'>".$top5Ma[$lang]."</p>\n</a>\n";
                        echo "<table class='table'>\n";
                        for ($i=1;$i<=5;$i++) {
                            if ($i!=5) {     
                                echo "<tr>\n<th class='border-bottom border-top-0' scope='row'>#".$i."</th>\n";
                                echo "<td class='border-bottom border-top-0'>".$topMusica[$i]['musica']."</td>\n";
                                echo "<td class='border-bottom border-top-0'>".$topMusica[$i]['artista']."</td>\n</tr>";
                            }
                            else {
                                echo "<tr>\n<th class='border-top-0' scope='row'>#".$i."</th>\n";
                                echo "<td class='border-top-0'>".$topMusica[$i]['musica']."</td>\n";
                                echo "<td class='border-top-0'>".$topMusica[$i]['artista']."</td>\n</tr>";
                            }
                        }
                        echo "\n</table>\n</div>\n</section>\n";
                        break;
                    case "cinema":
                        $you=array("lTVwJnW_U7M","sU0oZsqeG_s","K0SKf0K3bxg","s7EdQ4FqbhY","go0oBF4Y");
                        $rec=array("en"=>"Recomendation","es"=>"Recomendación","pt"=>"Recomendação");
                        echo "<section>";
                        echo "<div class='aside-content row bg-dark p-3'><h4 class='h4 col my-auto font-weight-bold px-0'>";
                        echo $rec[$lang]."</h4></div><div class='row pb-3'><div class='embed-responsive embed-responsive-16by9'>";
                        echo '<iframe class="embed-resp0onsive-item" src="https://www.youtube.com/embed/'.$you[rand(0,4)];
                        echo '" allowfullscreen></iframe></div></div></section>';
                        break;
                    case "series":
                        break;
                    case "animacoes":
                        $animador=array("en"=>"Author of the week","es"=>"Autor de la semana","pt"=>"Autor da semana");
                        echo "<section class='row'>\n<div class='col px-0'>\n";
                        echo "<a class='aside-content' href='".$corredor."animacoes/autores/index.php'>";
                        echo "<div class='row mx-0 bg-dark p-3'>\n";
                        echo "<h4 class='h4 col my-auto font-weight-bold px-0'>".$animador[$lang];
                        echo "</h4>\n</div>";
                        echo "<div class='row m-0'><div class='col-12 p-0'><img src='".$corredor."img/perfil6.jpg' alt='Norman' class='img-fluid'>";
                        echo "</div>\n</div>";
                        echo "</a>\n</div>\n</section>\n";
                        break;
                    case "literatura":
                        break;
                    case "jogos":
                        break;
                    case "moda":
                        $produto=array("en"=>"Offer:","es"=>"Oferta:","pt"=>"Oferta");
                        $i=rand(0,2);
                        $j=rand(0,3);
                        echo "<div class='aside-content row bg-dark p-3'><h4 class='h4 col my-auto font-weight-bold px-0'>";
                        echo $produto[$lang]."</h4></div>";
                        echo '<section class="row">';
                        echo '<div class="col-12 p-0"><a href="'.$corredor.'moda/loja/produto/index.php?view='.$i.$j;
                        echo '" class="card no-black-before shadow">';
                        echo '<img class="card-img-top" src="'.$corredor.'img/xadrezteste.png" alt="Card image cap">';
                        echo '<div class="card-body"><h5 class="card-title text-danger font-weight-bold">';
                        echo $roupa[$i][$j][$lang].'</h5><p class="card-text text-dark font-weight-bold">R$ '.rand(50,200).',99</p>';
                        echo '</div></a></div></section>';
                        break;
                }

            ?>    
</aside>