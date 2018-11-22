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
                for ($i=0;$i<5;$i++) {
                    echo "<article class='container-fluid pr-0 pl-lg-0 my-3'>\n<div class='row'>\n<a href='";
                    echo $corredor.$news['areas'][rand(0,4)]."/novidades/post/index.php";
                    echo "?t=".str_replace(' ','+',$news['titles'][$lang][$i])."&img=carouselteste0".rand(1,3).".png&dt="
                    .$news['dates'][$lang][rand(0,4)]."+horas+atrás' class='col-4 d-block my-auto p-0 pr-md-3'>\n";
                    echo "<picture>\n<img class='rounded img-fluid' alt='".$news['titles'][$lang][$i]."' src='";
                    echo $corredor."img/carouselteste0".rand(1,3).".png'>\n</picture>\n</a>\n";
                    echo "<div class='col-8 h-auto d-flex flex-column pl-2 pr-0'><div class='my-auto'><a href='";
                    echo $corredor.$news['areas'][rand(0,4)]."/novidades/post/index.php";
                    echo "?t=".str_replace(' ','+',$news['titles'][$lang][$i])."&img=carouselteste0".rand(1,3).".png&dt="
                    .$news['dates'][$lang][rand(0,4)]."+".$horas[$lang]."' class='text-body'>\n";
                    echo "<h3 class='h5 d-inline font-weight-bold'>".$news['titles'][$lang][$i]."</h3></a></div></div></div></article>";
                }
            ?>
        </div>
    </section>
    <section class="row">
        <div class="col px-0">
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
                        echo "</table>";
                        break;
                    case "cinema":
                        break;
                    case "series":
                        break;
                    case "animacoes":
                        break;
                    case "literatura":
                        break;
                    case "jogos":
                        break;
                    case "moda":
                        break;
                }

            ?>
        </div>
    </section>
    
</aside>