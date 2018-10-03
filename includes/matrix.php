<?php
    $info = pathinfo($_SERVER['PHP_SELF']);
    $caminho = str_replace('/Indie-Planet','',$info[dirname]);
    $contabarras = substr_count($caminho, '/');
    $corredor = "";
    if ($contabarras > 0) {
        $pastaatual = str_replace('/',' ',$caminho);
        for ($i=1;$i<=$contabarras;$i++) {
            $corredor.="../";
        }
    }
    
    
    $nav = array(
	"Música" => array("Artistas","Playlists","Novidades","Top 10"),
	"Cinema" => array("Filmes","Novidades","Críticas","Top 10"),
	"Séries" => array("Séries","Novidades","Críticas","Top 10"),
	"Animações" => array("Autores","Novidades","Curiosidades","Top 10"),
	"Literatura" => array("Livros","Quadrinhos","Memes","Críticas"),
	"Jogos" => array("Novidades","Lançamentos","Análises","Top 10"),
	"Moda" => array("80/2000","Cortes","Loja")
    );
?>