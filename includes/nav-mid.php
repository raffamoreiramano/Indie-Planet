<nav class="navbar container <?php echo $pastaAtual; ?> rolagem">
    <ul class="navbar-nav row flex-row mx-auto flex-nowrap justify-content-between">
        <?php
            foreach ($nav as $area => $pagina) {
                if (str_replace(substr($pastaAtual,0,strpos($pastaAtual,' ')),'',$pastaAtual)==strtolower(pato($area))) {
                    foreach ($nav[$area] as $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.$caminho."/".str_replace(' ','_',strtolower(pato($pagina)))."/index.php'>$pagina</a>
                        </li>
                        ";
                    }
                }
                elseif (str_replace(substr($pastaAtual,strpos($pastaAtual,' '),strlen($pastaAtual)),'',$pastaAtual)==strtolower(pato($area))) {
                    foreach ($nav[$area] as $pagina) {
                        echo "<li class='nav-item'>
                            <a class='nav-link h4 rolamento' href='"
                            .$corredor.str_replace(substr($caminho,strpos($caminho,'/'),strlen($caminho)),'',$caminho)."/".str_replace(' ','_',strtolower(pato($pagina)))."/index.php'>$pagina</a>
                        </li>
                        ";
                    }
                }
                elseif ($pastaAtual=="") {
                    echo "<li class='nav-item'>
                        <a class='nav-link h4 rolamento' href='"
                        .$corredor.str_replace(' ','_',strtolower(pato($area)))."/index.php'>$area</a>
                    </li>
                    ";
                }
            }
            
        ?>
    </ul>
</nav>