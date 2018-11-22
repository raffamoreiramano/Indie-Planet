<nav class="navbar container <?php echo $pastaAtual; ?> rolagem">
    <ul class="navbar-nav row flex-row mx-auto flex-nowrap justify-content-between">
        <?php
            foreach ($nav as $area => $pagina) {
                if ($pastaAtualFim==strtolower(pato($area))) {
                    foreach ($nav[$area] as $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.$caminho."/".str_replace(' ','_',strtolower(pato($pagina)))."/index.php'>$pagina</a>
                        </li>
                        ";
                    } // Se a pasta atual corresponde a um índice da matriz $nav, ele gera o conteúdo da navegação de acordo com os elementos daquele índice
                }
                elseif ($pastaAtualInicio==strtolower(pato($area))) {
                    foreach ($nav[$area] as $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.str_replace(substr($caminho,strpos($caminho,'/'),strlen($caminho)),'',$caminho)."/".str_replace(' ','_',strtolower(pato($pagina)))."/index.php'>$pagina</a>
                        </li>
                        ";
                    } // Se a pasta atual reside é contida em uma pasta que corresponde a um índice da matriz $nav, ele gera o conteúdo da navegação de acordo com os elementos daquele índice
                }
                elseif ($pastaAtual=="") {
                    echo "<li class='nav-item'>
                        <a class='nav-link h4 rolamento' href='"
                        .$corredor.str_replace(' ','_',strtolower(pato($area)))."/index.php'>$area</a>
                    </li>
                    ";
                } // Se a pasta atual for a pasta principal do portal, ele gere o conteúdo da navegação de acordo com os elementos da matriz $nav
            }
            foreach ($navGeral as $area) {
                if ($pastaAtual==strtolower(pato($area))||$pastaAtual=="session") {
                    foreach ($nav as $area => $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.str_replace('','_',strtolower(pato($area)))."/index.php'>$area</a>
                        </li>
                        ";
                    }
                }
            } // Gera o conteúdo da navegação de acordo com os elementos da matriz $nav, para as páginas pertencentes ao primeiro nível do portal
            
        ?>
    </ul>
</nav>