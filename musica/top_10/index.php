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
        echo "Top 10 Indie Songs";
        break;
    case "es":
        echo "Top 10 Canciones Indie";
        break;
    case "pt":
        echo "Top 10 Músicas Indie";
        break;
        
} ?></h1>
                    </div>
                    <?php
                        $text = substr($text,(strpos($text,'</blockquote>')+13),strlen($text));
                        $textP = explode ('</p>',$text);
                        $textPN = count($textP);
                        
                        for ($i=10;$i>=1;$i--) {
                            echo "<section class='row'>\n<div class='col-12'>\n<h3 class='h5 font-weight-bold'>";
                            echo "#".$i.". ".$topMusica[$i]['musica']." - ".$topMusica[$i]['artista']."</h3>\n";
                            echo $textP[rand(1,(count($textP)-2))]."</p>\n</div>\n</section>";
                        }
                    ?>
                </article>
                <aside class="col-12 col-lg-4">
                    <div class='aside-content row bg-dark p-3'>
                        <h4 class='h4 col my-auto font-weight-bold px-0'>Ouça já!</h4>                    
                    </div>
                    <div class="row">
                        <iframe class='border-0 w-100 spotify' src="https://open.spotify.com/embed/user/22f6qy24qivc57h6keamwxhli/playlist/<?php echo $spotifyPlaylist; ?>"></iframe>
                    </div>
                    <div class='aside-content row bg-dark p-3 mt-4'>
                        <h4 class='h4 col my-auto font-weight-bold px-0'>Sugestões</h4>
                    </div>
                    <div class='row'>
                        <div class="col feed">
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
                    </div>
                </aside>
            </div>
        </div>
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>
