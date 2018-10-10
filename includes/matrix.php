<?php
/* Procedimento com propósito de informar o caminho e da página */
    $info = pathinfo($_SERVER['PHP_SELF']); // $info recebe um vetor contendo informações da página
    $caminho = str_replace('\\','',$info[dirname]); // $caminho recebe o caminho do diretório
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
?>