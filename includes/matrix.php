<?php
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
/* Matriz do conteúdo da navegação do portal */
    $nav = array(
        "Música" => array("Artistas","Playlists","Novidades","Top 10"),
        "Cinema" => array("Filmes","Novidades","Críticas","Top 10"),
        "Séries" => array("Seriados","Novidades","Críticas","Top 10"),
        "Animações" => array("Autores","Novidades","Curiosidades","Top 10"),
        "Literatura" => array("Livros","Quadrinhos","Memes","Críticas"),
        "Jogos" => array("Novidades","Lançamentos","Análises","Top 10"),
        "Moda" => array("80-2000","Cortes","Loja")
    );
/* Matriz do conteúdo das áreas gerais do portal */
    $navGeral = array("Sobre","Quem somos","Fórum","Contato");
/* Função para retirar acentuação, ou "limpar acentos", se uma string */
    function pato($str) {
        $a=array(
            "Á","á","Â","â","À","à","Å","å","Ã","ã","Ä","ä",
            "É","é","Ê","ê","È","è","Ë","ë",
            "Í","í","Î","î","Ì","ì","Ï","ï",
            "Ó","ó","Ô","ô","Ò","ò","Õ","õ","Ö","ö",
            "Ú","ú","Û","û","Ù","ù","Ü","ü",
            "Ç","ç",
            "Ñ","ñ"
        ); // Lista de letras acentuadas
        $b=array(
            "A","a","A","a","A","a","A","a","A","a","A","a",
            "E","e","E","e","E","e","E","e",
            "I","i","I","i","I","i","I","i",
            "O","o","O","o","O","o","O","o","O","o",
            "U","u","U","u","U","u","U","u",
            "C","c",
            "N","n"
        ); // Lista de letras sem acento
        return str_replace($a,$b,$str); // Retorna string a string $str trocando cada letra de $a por $b de mesmo índice
    }
/* Variáveis de string que serão usadas nos menus de navegação para identificar quais conteúdos serão colocados na barra de menu */
    $pastaAtualFim = str_replace(substr($pastaAtual,0,strpos($pastaAtual,' ')),'',$pastaAtual); // Conteúdo da $pastaAtual, sem o início
    $pastaAtualInicio = str_replace(substr($pastaAtual,strpos($pastaAtual,' '),strlen($pastaAtual)),'',$pastaAtual); // Somente início
    $trail = explode(' ',$pastaAtual); // Matriz com o conteúdo da $pastaAtual

    $text="<blockquote class='blockquote text-right'><h3 class='h5 text-muted'>Suspendisse tristique nunc leo, at fermentum quam eleifend scelerisque</h3><footer class='blockquote-footer'>Autor do comentário.</footer></blockquote><p class='text-justify'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis vehicula dui. Curabitur ornare sapien tellus, a tristique mauris aliquet id. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec at enim sit amet arcu efficitur pulvinar. Donec pulvinar, dolor at scelerisque pharetra, eros ipsum ultrices est, eget aliquam arcu risus vitae nisi. Phasellus efficitur tellus a fermentum accumsan. Cras viverra in ex non pulvinar. Morbi nec dolor iaculis, sagittis mauris ut, venenatis lacus. Aliquam commodo ultrices tincidunt. Fusce viverra urna lorem, vel congue felis sollicitudin ut.</p><p class='text-justify'>Mauris finibus sodales est, eget sodales eros fringilla rutrum. In at magna lobortis, suscipit enim ut, aliquet tortor. Aliquam nec semper felis, sed tincidunt lectus. Nullam a dolor augue. Donec vestibulum fringilla nisl, a congue justo dictum non. Pellentesque non pulvinar nibh, et convallis enim. Vestibulum sit amet diam erat. Mauris fermentum convallis nisi a dignissim. Nam nec faucibus mi.</p><p class='text-justify'>Phasellus lorem lorem, euismod vel neque id, dignissim imperdiet odio. Phasellus urna purus, mattis eget gravida id, porta sed nibh. Aliquam aliquet massa nulla, et congue sapien rhoncus ut. Nunc in imperdiet dui. Nunc scelerisque dui id magna tincidunt egestas. Curabitur in dolor ut justo laoreet cursus consectetur et lorem. Nam at lacinia urna. Vivamus vestibulum, augue at lobortis euismod, elit est blandit risus, pellentesque semper nibh purus ac eros. Etiam rutrum felis velit, ut aliquet urna rutrum sit amet. Cras purus ipsum, bibendum vel luctus vel, fermentum a eros. Maecenas ac elit vel urna volutpat aliquam. Maecenas et porttitor lacus. Donec tristique erat vitae nibh venenatis pulvinar. Donec tincidunt interdum bibendum.</p><p class='text-justify'>Sed vel quam arcu. In risus tellus, ultrices sed gravida ut, finibus nec nulla. Aenean leo massa, consectetur non massa ut, dapibus vulputate lectus. Ut massa velit, sollicitudin eget interdum ac, congue at sapien. Praesent lobortis turpis est, at pellentesque turpis semper quis. Ut mollis porttitor efficitur. Aenean vehicula ut sapien ac eleifend. Nullam sit amet ullamcorper lacus.</p><p class='text-justify'>Nullam volutpat, sapien efficitur auctor scelerisque, massa leo lacinia mi, a porttitor dolor eros sit amet arcu. Curabitur sodales gravida felis, in porta turpis molestie quis. Ut porta purus a velit luctus, a vulputate erat interdum. Phasellus sed tincidunt lacus. Sed in hendrerit odio. Integer nunc mauris, rhoncus vitae erat nec, feugiat finibus sapien. Suspendisse in odio sit amet ante ornare dictum. Nullam pharetra interdum neque eget tincidunt. Sed fringilla convallis tortor eget finibus. Suspendisse tristique nunc leo, at fermentum quam eleifend scelerisque.</p>";
    
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
?>