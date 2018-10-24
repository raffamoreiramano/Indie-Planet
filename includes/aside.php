<?php
    $news['titles']=array(
        "Reconhecimento da cultura indie",
        "Festivais indie de responsa",
        "Títulos indie que não perdem pra qualquer AAA",
        "O Rumo da Indústria",
        "Artista brasileiro ganha prêmio de melhor título indie"
    );
    $news['areas']=array("Música","Cinema","Séries","Animações","Jogos");
    $news['dates']=array("seis","duas","três","quatro","cinco");
    
?>
<aside class="col-12 col-lg-4 feed">
    <section class="row">
        <div class="col">
            <h4 class="bg-dark p-3 row aside-content font-weight-bold">Sugestões</h4>
            <?php
                for ($i=0;$i<5;$i++) {
                    echo "<article class='container-fluid pr-0 pl-lg-0 my-3'>\n<div class='row'>\n<a href='";
                    echo $corredor.strtolower(pato($news['areas'][rand(0,4)]))."/novidades/post/index.php";
                    echo "?t=".str_replace(' ','+',$news['titles'][$i])."&img=carouselteste0".rand(1,3).".png&dt="
                    .$news['dates'][rand(0,4)]."+horas+atrás' class='col-4 d-block my-auto p-0 pr-md-3'>\n";
                    echo "<picture>\n<img class='rounded img-fluid' alt='".$news['titles'][$i]."' src='";
                    echo $corredor."img/carouselteste0".rand(1,3).".png'>\n</picture>\n</a>\n";
                    echo "<div class='col-8 h-auto d-flex flex-column pl-2 pr-0'><div class='my-auto'><a href='";
                    echo $corredor.strtolower(pato($news['areas'][rand(0,4)]))."/novidades/post/index.php";
                    echo "?t=".str_replace(' ','+',$news['titles'][$i])."&img=carouselteste0".rand(1,3).".png&dt="
                    .$news['dates'][rand(0,4)]."+horas+atrás' class='text-body'>\n";
                    echo "<h3 class='h5 d-inline font-weight-bold'>".$news['titles'][$i]."</h3></a></div></div></div></article>";
                }
            ?>
        </div>
    </section>
    <section class="row">
        <div class="col px-0">
            <?php
                switch ($pastaAtualFim) {
                    case "musica":
                        echo "<a class='aside-content row mx-0 bg-dark p-3' href='".$corredor."musica/top_10/index.php'>\n";
                        echo "<h4 class='h4 col my-auto font-weight-bold px-0'>Top 5 mais ouvidas";
                        echo "</h4>\n<p class='small d-none d-sm-block my-auto col-3 text-dark text-right'>ver mais</p>\n</a>\n";
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