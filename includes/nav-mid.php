<nav class="navbar container <?php echo $pastaAtual; ?> rolagem">
    <ul class="navbar-nav row flex-row mx-auto flex-nowrap justify-content-between">
        <?php
            foreach ($nav as $area => $elemento) {
                if ($pastaAtualFim==$area) {
                    foreach ($nav[$area]['secundario'] as $elemento => $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.$caminho."/".$elemento."/index.php'>".$nav[$area]['secundario'][$elemento][$lang]."</a>
                        </li>
                        ";
                    } // Se a pasta atual corresponde a um índice da matriz $nav, ele gera o conteúdo da navegação de acordo com os elementos daquele índice
                }
                elseif ($pastaAtualInicio==$area) {
                    foreach ($nav[$area]['secundario'] as $elemento => $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.str_replace(substr($caminho,strpos($caminho,'/'),strlen($caminho)),'',$caminho)."/"
                            .$elemento."/index.php'>".$nav[$area]['secundario'][$elemento][$lang]."</a>
                        </li>
                        ";
                    } // Se a pasta atual reside é contida em uma pasta que corresponde a um índice da matriz $nav, ele gera o conteúdo da navegação de acordo com os elementos daquele índice
                }
                elseif ($pastaAtual=="") {
                    echo "<li class='nav-item'>
                        <a class='nav-link h4 rolamento' href='"
                        .$corredor.$area."/index.php'>".$nav[$area]['primario'][$lang]."</a>
                    </li>
                    ";
                } // Se a pasta atual for a pasta principal do portal, ele gera o conteúdo da navegação de acordo com os elementos da matriz $nav
            }
            foreach ($navGeral as $elemento => $valor) {
                if ($pastaAtual==$elemento||$pastaAtual=="session") {
                    foreach ($nav as $area => $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.$area."/index.php'>".$nav[$area]['primario'][$lang]."</a>
                        </li>
                        ";
                    }
                }
            } // Gera o conteúdo da navegação de acordo com os elementos da matriz $nav, para as páginas pertencentes ao primeiro nível do portal
            
        ?>
    </ul>
</nav>