<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
setlocale(LC_ALL, 'pt_BR');
/* Procedimento com propósito de informar o caminho e da página */
    $info = pathinfo($_SERVER['PHP_SELF']); // $info recebe um vetor contendo informações da página
    if (substr($info['dirname'],0,1)!='\\') {
        $caminho = $info['dirname'];
        if (strpos($caminho,'Indie-Planet')!==false) {
            $caminho = str_replace(substr($caminho,0,(strpos($caminho,'Indie-Planet')+12)),'',$caminho);
        }
    }
    else {
        $caminho = str_replace('\\','',$info['dirname']); // $caminho recebe o caminho do diretório (não sei se o melhor é dirname ou 'dirname')
    }
    $contaBarras = substr_count($caminho, '/'); // Recebe o número de barras de $caminho
    $corredor = "";
    if ($contaBarras > 0) {
        $pastaAtual = ltrim(str_replace('/',' ',$caminho));
        $caminho = ltrim($caminho,'/');
        for ($i=1;$i<=$contaBarras;$i++) {
            $corredor.="../"; // $corredor recebe "../" quantas vezes forem necessárias no endereçamento de links
        }
    }
    else {
        $pastaAtual = "";
    }

    if (isset($_GET['lang'])) {
        $lang = $_GET['lang'];
    }
    elseif (isset($_COOKIE['lang'])) {
        $lang = $_COOKIE['lang'];
    }
    else {
        $lang = "pt";
    }
    setcookie("lang", $lang, 0,'/');
    $pastaAtualFake="";

/* Matriz do conteúdo da navegação do portal */
    $nav = array (
        "musica" => array (
            "primario" => array (
                "en" => "Music",
                "es" => "Música",
                "pt" => "Música"
            ),
            "secundario" => array (
                "artistas" => array (
                    "en" => "Artists",
                    "es" => "Artistas",
                    "pt" => "Artistas"
                ),
                "novidades" => array (
                    "en" => "News",
                    "es" => "Noticias",
                    "pt" => "Novidades"
                ),
                "playlists" => array (
                    "en" => "Playlists",
                    "es" => "Playlists",
                    "pt" => "Playlists"
                ),
                "top_10" => array (
                    "en" => "Top 10",
                    "es" => "Top 10",
                    "pt" => "Top 10"
                )
            )
        ),
        "cinema" => array (
            "primario" => array (
                "en" => "Cinema",
                "es" => "Cinema",
                "pt" => "Cinema"
            ),
            "secundario" => array (
                "filmes" => array (
                    "en" => "Movies",
                    "es" => "Peliculas",
                    "pt" => "Filmes"
                ),
                "novidades" => array (
                    "en" => "News",
                    "es" => "Noticias",
                    "pt" => "Novidades"
                ),
                "criticas" => array (
                    "en" => "Reviews",
                    "es" => "Críticas",
                    "pt" => "Críticas"
                ),
                "top_10" => array (
                    "en" => "Top 10",
                    "es" => "Top 10",
                    "pt" => "Top 10"
                )
            )
        ),
        "series" => array (
            "primario" => array (
                "en" => "Series",
                "es" => "Series",
                "pt" => "Séries"
            ),
            "secundario" => array (
                "criticas" => array (
                    "en" => "Reviews",
                    "es" => "Críticas",
                    "pt" => "Críticas"
                ),
                "novidades" => array (
                    "en" => "News",
                    "es" => "Noticias",
                    "pt" => "Novidades"
                ),
                "top_10" => array (
                    "en" => "Top 10",
                    "es" => "Top 10",
                    "pt" => "Top 10"
                )
            )
        ),
        "animacoes" => array (
            "primario" => array (
                "en" => "Animations",
                "es" => "Animaciones",
                "pt" => "Animações"
            ),
            "secundario" => array (
                "autores" => array (
                    "en" => "Authors",
                    "es" => "Autores",
                    "pt" => "Autores"
                ),
                "novidades" => array (
                    "en" => "News",
                    "es" => "Noticias",
                    "pt" => "Novidades"
                ),
                "curiosidades" => array (
                    "en" => "Curiosities",
                    "es" => "Curiosidades",
                    "pt" => "Curiosidades"
                ),
                "top_10" => array (
                    "en" => "Top 10",
                    "es" => "Top 10",
                    "pt" => "Top 10"
                )
            )
        ),
        "literatura" => array (
            "primario" => array (
                "en" => "Literature",
                "es" => "Literatura",
                "pt" => "Literatura"
            ),
            "secundario" => array (
                "livros" => array (
                    "en" => "Books",
                    "es" => "Libros",
                    "pt" => "Livros"
                ),
                "quadrinhos" => array (
                    "en" => "Comics",
                    "es" => "Historietas",
                    "pt" => "Quadrinhos"
                ),
                "memes" => array (
                    "en" => "Memes",
                    "es" => "Memes",
                    "pt" => "Memes"
                ),
                "criticas" => array (
                    "en" => "Reviews",
                    "es" => "Críticas",
                    "pt" => "Críticas"
                )
            )
        ),
        "jogos" => array (
            "primario" => array (
                "en" => "Games",
                "es" => "Juegos",
                "pt" => "Jogos"
            ),
            "secundario" => array (
                "lancamentos" => array (
                    "en" => "Releases",
                    "es" => "Lanzamientos",
                    "pt" => "Lançamentos"
                ),
                "novidades" => array (
                    "en" => "News",
                    "es" => "Noticias",
                    "pt" => "Novidades"
                ),
                "analises" => array (
                    "en" => "Reviews",
                    "es" => "Análisis",
                    "pt" => "Análises"
                ),
                "top_10" => array (
                    "en" => "Top 10",
                    "es" => "Top 10",
                    "pt" => "Top 10"
                )
            )
        ),
        "moda" => array (
            "primario" => array (
                "en" => "Fashion",
                "es" => "Moda",
                "pt" => "Moda"
            ),
            "secundario" => array (
                "80-2000" => array (
                    "en" => "80-2000",
                    "es" => "80-2000",
                    "pt" => "80-2000"
                ),
                "cortes" => array (
                    "en" => "Haircuts",
                    "es" => "Cortes",
                    "pt" => "Cortes"
                ),
                "loja" => array (
                    "en" => "Shop",
                    "es" => "Tienda",
                    "pt" => "Loja"
                )
            )
        )
    );

/* Matriz com o conteúdo de áreas gerais do portal */
    $navGeral = array(
        "sobre" => array (
            "en" => "About",
            "es" => "Sobre",
            "pt" => "Sobre"
        ),
        "quem_somos" => array (
            "en" => "Who we are",
            "es" => "Quienes somos",
            "pt" => "Quem somos"
        ),
        "forum" => array (
            "en" => "Forum",
            "es" => "Foro",
            "pt" => "Fórum"
        ),
        "contato" => array (
            "en" => "Contact",
            "es" => "Contacto",
            "pt" => "Contato"
        ),
    );


/* Variáveis de string que serão usadas nos menus de navegação para identificar quais conteúdos serão colocados na barra de menu */
    $pastaAtualFim = str_replace(substr($pastaAtual,0,strpos($pastaAtual,' ')),'',$pastaAtual); // Conteúdo da $pastaAtual, sem o início
    $pastaAtualInicio = str_replace(substr($pastaAtual,strpos($pastaAtual,' '),strlen($pastaAtual)),'',$pastaAtual); // Somente início
    $trail = explode(' ',$pastaAtual); // Matriz com o conteúdo da $pastaAtual

    $text="<blockquote class='blockquote text-right'><h3 class='h5 text-muted'>Suspendisse tristique nunc leo, at fermentum quam eleifend scelerisque</h3><footer class='blockquote-footer'>Antonio Margheriti.</footer></blockquote><p class='text-justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis vehicula dui. Curabitur ornare sapien tellus, a tristique mauris aliquet id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec at enim sit amet arcu efficitur pulvinar. Donec pulvinar, dolor at scelerisque pharetra, eros ipsum ultrices est, eget aliquam arcu risus vitae nisi. Phasellus efficitur tellus a fermentum accumsan. Cras viverra in ex non pulvinar. Morbi nec dolor iaculis, sagittis mauris ut, venenatis lacus. Aliquam commodo ultrices tincidunt. Fusce viverra urna lorem, vel congue felis sollicitudin ut.</p><p class='text-justify'>Mauris finibus sodales est, eget sodales eros fringilla rutrum. In at magna lobortis, suscipit enim ut, aliquet tortor. Aliquam nec semper felis, sed tincidunt lectus. Nullam a dolor augue. Donec vestibulum fringilla nisl, a congue justo dictum non. Pellentesque non pulvinar nibh, et convallis enim. Vestibulum sit amet diam erat. Mauris fermentum convallis nisi a dignissim. Nam nec faucibus mi.</p><p class='text-justify'>Phasellus lorem lorem, euismod vel neque id, dignissim imperdiet odio. Phasellus urna purus, mattis eget gravida id, porta sed nibh. Aliquam aliquet massa nulla, et congue sapien rhoncus ut. Nunc in imperdiet dui. Nunc scelerisque dui id magna tincidunt egestas. Curabitur in dolor ut justo laoreet cursus consectetur et lorem. Nam at lacinia urna. Vivamus vestibulum, augue at lobortis euismod, elit est blandit risus, pellentesque semper nibh purus ac eros. Etiam rutrum felis velit, ut aliquet urna rutrum sit amet. Cras purus ipsum, bibendum vel luctus vel, fermentum a eros. Maecenas ac elit vel urna volutpat aliquam. Maecenas et porttitor lacus. Donec tristique erat vitae nibh venenatis pulvinar. Donec tincidunt interdum bibendum.</p><p class='text-justify'>Sed vel quam arcu. In risus tellus, ultrices sed gravida ut, finibus nec nulla. Aenean leo massa, consectetur non massa ut, dapibus vulputate lectus. Ut massa velit, sollicitudin eget interdum ac, congue at sapien. Praesent lobortis turpis est, at pellentesque turpis semper quis. Ut mollis porttitor efficitur. Aenean vehicula ut sapien ac eleifend. Nullam sit amet ullamcorper lacus.</p><p class='text-justify'>Nullam volutpat, sapien efficitur auctor scelerisque, massa leo lacinia mi, a porttitor dolor eros sit amet arcu. Curabitur sodales gravida felis, in porta turpis molestie quis. Ut porta purus a velit luctus, a vulputate erat interdum. Phasellus sed tincidunt lacus. Sed in hendrerit odio. Integer nunc mauris, rhoncus vitae erat nec, feugiat finibus sapien. Suspendisse in odio sit amet ante ornare dictum. Nullam pharetra interdum neque eget tincidunt. Sed fringilla convallis tortor eget finibus. Suspendisse tristique nunc leo, at fermentum quam eleifend scelerisque.</p>";
    
/* Top 10 músicas */
    $topMusica=array(
        1=>array("musica"=>"There Is A Light That Never Goes Out","artista"=>"The Smiths"),
        2=>array("musica"=>"Song 2","artista"=>"Blur"),
        3=>array("musica"=>"Wonderwall","artista"=>"Oasis"),
        4=>array("musica"=>"Last Nite","artista"=>"The Strokes"),
        5=>array("musica"=>"Fluorescent Adolescent","artista"=>"Arctic Monkeys"),
        6=>array("musica"=>"Take Me Out","artista"=>"Franz Ferdinand"),
        7=>array("musica"=>"Seven Nation Army","artista"=>"The White Stripes"),
        8=>array("musica"=>"Mr.Brightside","artista"=>"The Killers"),
        9=>array("musica"=>"When You Were Young","artista"=>"The Killers"),
        10=>array("musica"=>"You Only Live Once","artista"=>"The Strokes")
    );
    $spotifyPlaylist="0k0TbUHAhajil7b3FIkixs";

    $artistas="Kane Ultricies,Xerath Sed,Leo Ornare,Lacinia Elementum,Ligula Hendrerit,Aliquam Scelerisque,Cursus Sem,Lobortis Congue,Est Consequat,Eget Vivamus,Convallis Volutpat,Yisl Vitae,Mattis Maecenas,Ornare Purus,Sit Amet,Volutpat Facilisis,Vivamus Gravida,Dolor Nec,Sollicitudin Atheos,Dignissim Massa,Bros Vehicula,Ipsum Eu,Placerat Urna,Zero Cal,Ipsum Integer,Dictum Lorem,Odio Et,Dapibus Augue,Vehicula Id,Aliquam Aidentro,Erat Pretium,Luctus Orci,Eu Robo,Ex Machina,Metus Quam,Ultricies Sed,Efficitur Et,Viverra Alho,Nisl Curabitur,Sir Anta,Lacinia Urna,Vitae Scelerisque,Ligula Pellentesque,Xing Euismod,Nisi Amem,Helictor Suspendisse,Rhoncus Fermentum,Diam Ac,Dapibus Diam,Pharetra Quis,Vestibulum Ante,Ipsum Primis,In Faucibus,Orci Luctus,Bet Ultrices,Posuere Cubilia,Burae Nulla,Vel Libero,Viverra Semper,Ipsum Ut,Hendrerit Enim,Nam Quis,Felis Lobortis,Imperdiet Augue,Geici Euismod,Risus Morbi,Finibus Fermentum,Enim At,Faucibus Metus,Aliquam Et,Burabitur Ante,Quam Consequat,Herege Est,Zeta Suscipit,Lobortis Dui,Gurabitur Arca,Gonsequat Nisi,Mauris Ipsum,Libero Finibus,Et Mollis,Kid Eleifend,Non Metus,Sed Nec,Wong Lectus,Curabitur Tristique,Sem Id,Blandit Ultricies,Kin Vitae,Tempus Ex,Suspendisse Fermentum,Dolor In,Gibh Ullamcorper,Chico Cunha,Nisl Varius,Juca Bala,Viverra Mauris,Jon Pretium,Sapien Posuere,Vitae Ut,Iaculis Elit,Sit Down,Imperdiet Tempor,Arcu Ex,Condimentum Dolor,Finibus Finibus,Dui Massa,Vel Elit,Pellentesque Pharetra,Sodales Sagittis,Sed Ut,Feugiat Metus,Donec Sit,Amet Diam,Ultricies Suscipit,Nunc At,Fermentum Tortor,Etiam Auctor,Odio Vitae,Volutpat Ultricies,Nulla Mi,Pretium Libero,Vel Ullamcorper,Nisi Sapien,Yin Orci,Morbi Abinhalinbua,Magna Ac,Eh Mole,Tristique Donec,Sed Posuere,Leo Jaime";
    $artista=explode(',',$artistas);
    sort($artista);
    for ($a=0;$a<130;$a++) {
        $artista[130+$a]=ucwords(strtolower(strrev($artista[$a])));
    }
    sort($artista);
?>