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
    <h4 class="bg-dark p-3 row sugeridas font-weight-bold">Sugestões</h4>
    <?php
        for ($i=0;$i<5;$i++) {
            echo "<article class='container-fluid pr-0 pl-lg-0 my-3'>\n<div class='row'>\n<a href='";
            echo $corredor.strtolower(pato($news['areas'][rand(0,4)]))."/novidades/post.php";
            echo "?t=".str_replace(' ','+',$news['titles'][$i])."&img=carouselteste0".rand(1,3).".png&dt="
            .$news['dates'][rand(0,4)]."+horas+atrás' class='col-4 d-block my-auto p-0 pr-md-3'>\n";
            echo "<picture>\n<img class='rounded img-fluid' alt='".$news['titles'][$i]."' src='";
            echo $corredor."img/carouselteste0".rand(1,3).".png'>\n</picture>\n</a>\n";
            echo "<div class='col-8 h-auto d-flex flex-column pl-2 pr-0'><div class='my-auto'><a href='";
            echo $corredor.strtolower(pato($news['areas'][rand(0,4)]))."/novidades/post.php";
            echo "?t=".str_replace(' ','+',$news['titles'][$i])."&img=carouselteste0".rand(1,3).".png&dt="
            .$news['dates'][rand(0,4)]."+horas+atrás' class='text-body'>\n";
            echo "<h3 class='h5 d-inline font-weight-bold'>".$news['titles'][$i]."</h3></a></div></div></div></article>";
        }
    ?>
    
</aside>