<!doctype html>
<?php
    include '../../includes/matrix.php';
?>
<html lang="pt-BR">
<?php
    include $corredor.'includes/head.php';
?>

    <body class="bg-dark-indie <?php echo $pastaAtual; ?>">
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
            $h1=array();
            $h1['en']="Indie Playlists";
            $h1['es']="Playlists Indie";
            $h1['pt']="Playlists Indie";
            
        ?>
        <article class="container">
            <div class="row bg-dark shadow">
                <h1 class="py-3 my-0 pl-lg-3 ml-3 ml-lg-4 text-white font-weight-bold h4"><?php echo $h1[$lang]; ?></h1>
            </div>
            <section class="row my-5">
                <?php $spotifyPlaylist="0k0TbUHAhajil7b3FIkixs"; ?>
                <div class="text-white col-12 col-md-8 offset-md-4">
                    <h2 class="h4 font-weight-bold py-3">Indie-Planet</h2>
                </div>
                <div class="col-12 col-md-4 col-lg-3 p-0 play-col">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class='border-0 w-100 playlist embed-responsive-item' src="https://open.spotify.com/embed/user/22f6qy24qivc57h6keamwxhli/playlist/<?php echo $spotifyPlaylist; ?>" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
                <div class="text-white col-12 col-md-8 offset-lg-1 pt-3">
                    <?php
                    $texto['pt']="Playlist criada para exemplificar o uso de playlists do Spotify no header do portal, no lugar de um carrossel. Porém sem uma maior interatividade providenciada pela aplicaçõ de javascript, por motivos não cabíveis à esta descrição.";
                    $texto['en']="Playlist created to exemplify the use of Spotify playlists in the portal header, instead of a carousel. But without greater interactivity provided by the application of javascript, for reasons not applicable to this description.";
                    $texto['es']="Playlist creada para ejemplificar el uso de playlists del Spotify en el header del portal, en lugar de un carrusel. Pero sin una mayor interactividad proporcionada por la aplicación de javascript, por motivos no aplicables a esta descripción.";
                    ?>
                    <p class="text-justify"><?php echo $texto[$lang]; ?></p>
                </div>
            </section>
            <section class="row my-5 justify-content-between">
                <?php $spotifyPlaylist="4nSPn9JVlhqacjx5aOYXKu"; ?>
                <div class="text-white col-12 col-md-8 offset-md-4">
                    <h2 class="h4 font-weight-bold py-3">Indie Rock</h2>
                </div>
                <div class="col-12 col-md-4 col-lg-3 p-0 play-col">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class='border-0 w-100 playlist embed-responsive-item' src="https://open.spotify.com/embed/user/22f6qy24qivc57h6keamwxhli/playlist/<?php echo $spotifyPlaylist; ?>" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
                <div class="text-white col-12 col-md-8 offset-lg-1 pt-3">
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elit tortor, sodales sed urna at, sollicitudin placerat lorem. Curabitur quis tempor enim. Integer quam lacus, ornare vitae semper ac, scelerisque quis nibh. Quisque convallis condimentum metus vitae consectetur. Aenean ac venenatis mi. Aenean laoreet non elit in imperdiet.</p>
                </div>
            </section> 
            <section class="row my-5 justify-content-between">
                <?php $spotifyPlaylist="37i9dQZF1DWSQScAbo5nGF"; ?>
                <div class="text-white col-12 col-md-8 offset-md-4">
                    <h2 class="h4 font-weight-bold py-3">Indie Roadtrip</h2>
                </div>
                <div class="col-12 col-md-4 col-lg-3 p-0 play-col">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class='border-0 w-100 playlist embed-responsive-item' src="https://open.spotify.com/embed/user/22f6qy24qivc57h6keamwxhli/playlist/<?php echo $spotifyPlaylist; ?>" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
                <div class="text-white col-12 col-md-8 offset-lg-1 pt-3">
                    <p class="text-justify">Fusce ultricies convallis orci, eu consequat mauris ornare vel. Curabitur in orci orci. Nullam lobortis at purus vitae sodales. Morbi ante tellus, porta et congue lacinia, finibus sit amet mauris. Praesent rhoncus vitae orci vel tincidunt. Aliquam id ipsum sit amet eros tempus gravida. Proin porta justo finibus laoreet auctor. Morbi lacinia arcu sed orci consectetur sodales.</p>
                </div>
            </section> 
            <section class="row my-5 justify-content-between">
                <?php $spotifyPlaylist="37i9dQZF1DWXx6OpWBkqVv"; ?>
                <div class="text-white col-12 col-md-8 offset-md-4">
                    <h2 class="h4 font-weight-bold py-3">Indiespensável</h2>
                </div>
                <div class="col-12 col-md-4 col-lg-3 p-0 play-col">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class='border-0 w-100 playlist embed-responsive-item' src="https://open.spotify.com/embed/user/22f6qy24qivc57h6keamwxhli/playlist/<?php echo $spotifyPlaylist; ?>" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
                <div class="text-white col-12 col-md-8 offset-lg-1 pt-3">
                    <p class="text-justify">Nullam id lobortis lorem. Ut eget luctus ex. Morbi quis urna eros. Quisque finibus quam nisi, in euismod risus condimentum sit amet. Morbi elit libero, suscipit eget vulputate eget, maximus quis ante. Nullam dignissim ante sit amet posuere viverra. Donec non gravida nibh. Nulla fringilla nunc fringilla velit vestibulum accumsan.</p>
                </div>
            </section> 
            <section class="row my-5 justify-content-between">
                <?php $spotifyPlaylist="5ylV3EnZRvHnS5TtLw3PhP"; ?>
                <div class="text-white col-12 col-md-8 offset-md-4">
                    <h2 class="h4 font-weight-bold py-3">(road-trippin)</h2>
                </div>
                <div class="col-12 col-md-4 col-lg-3 p-0 play-col">
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class='border-0 w-100 playlist embed-responsive-item' src="https://open.spotify.com/embed/user/22f6qy24qivc57h6keamwxhli/playlist/<?php echo $spotifyPlaylist; ?>" allowtransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
                <div class="text-white col-12 col-md-8 offset-lg-1 pt-3">
                    <?php
                    $texto['pt']="Contribuição de Júlia Aragão, uma querida amiga de um dos nossos integrantes, Adrian. E segue lorem ipsum:  dolor sit amet, consectetur adipiscing elit. Maecenas sem felis, volutpat vitae placerat sit amet, mollis a sem. Nam non libero non justo pulvinar lobortis. Vivamus quam tortor, fringilla ac libero ut, pharetra tristique erat.";
                    $texto['en']="Contributed by Júlia Aragão, dear friend of one of our members, Adrian. And here goes lorem ipsum: dolor sit amet, consectetur adipiscing elit. Maecenas sem felis, volutpat vitae placerat sit amet, mollis a sem. Nam non libero non justo pulvinar lobortis. Vivamus quam tortor, fringilla ac libero ut, pharetra tristique erat.";
                    $texto['es']="Contribución de Júlia Aragão, una querida amiga de uno de nuestros integrantes, Adrian. Y sigue lorem ipsum: dolor sit amet, consectetur adipiscing elit. Maecenas sem felis, volutpat vitae placerat sit amet, mollis a sem. Nam non libero non justo pulvinar lobortis. Vivamus quam tortor, fringilla ac libero ut, pharetra tristique erat.";
                    ?>
                    <p class="text-justify"><?php echo $texto[$lang]; ?></p>
                </div>
            </section>     
        </article>
        
        <?php
            include $corredor.'includes/footer.php';
        ?>    
    </body>

</html>
