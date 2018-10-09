<?php
    $info = pathinfo($_SERVER['PHP_SELF']);
    $caminho = str_replace('\\','',$info[dirname]);
    $contaBarras = substr_count($caminho, '/');
    $corredor = "";
    if ($contaBarras > 0) {
        $pastaAtual = ltrim(str_replace('/',' ',$caminho));
        $caminho = ltrim($caminho,'/');
        for ($i=1;$i<=$contaBarras;$i++) {
            $corredor.="../";
        }
    }

    $nav = array(
        "Música" => array("Artistas","Playlists","Novidades","Top 10"),
        "Cinema" => array("Filmes","Novidades","Críticas","Top 10"),
        "Séries" => array("Seriados","Novidades","Críticas","Top 10"),
        "Animações" => array("Autores","Novidades","Curiosidades","Top 10"),
        "Literatura" => array("Livros","Quadrinhos","Memes","Críticas"),
        "Jogos" => array("Novidades","Lançamentos","Análises","Top 10"),
        "Moda" => array("80-2000","Cortes","Loja")
    );

    $navGeral = array("Sobre","Quem somos","Fórum","Contato");

    function pato($str) {
	$a=array(
        "Á","á","Â","â","À","à","Å","å","Ã","ã","Ä","ä",
        "É","é","Ê","ê","È","è","Ë","ë",
        "Í","í","Î","î","Ì","ì","Ï","ï",
        "Ó","ó","Ô","ô","Ò","ò","Õ","õ","Ö","ö",
        "Ú","ú","Û","û","Ù","ù","Ü","ü",
        "Ç","ç",
        "Ñ","ñ"
    );
	$b=array(
        "A","a","A","a","A","a","A","a","A","a","A","a",
        "E","e","E","e","E","e","E","e",
        "I","i","I","i","I","i","I","i",
        "O","o","O","o","O","o","O","o","O","o",
        "U","u","U","u","U","u","U","u",
        "C","c",
        "N","n"
    );
	return str_replace($a,$b,$str);
}

?>