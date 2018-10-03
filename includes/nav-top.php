<?php
    $nav = array("Música","Cinema","Séries","Animações","Literatura","Jogos","Moda");

    ${$nav[0]} = array("Artistas","Playlists","Novidades","Top 10");
    ${$nav[1]} = array("Filmes","Novidades","Críticas","Top 10");
    ${$nav[2]} = array("Séries","Novidades","Críticas","Top 10");
    ${$nav[3]} = array("Autores","Novidades","Curiosidades","Top 10");
    ${$nav[4]} = array("Livros","Quadrinhos","Memes","Críticas");
    ${$nav[5]} = array("Novidades","Lançamentos","Análises","Top 10");
    ${$nav[6]} = array("80/2000","Cortes","Loja");
?>
<nav class="navbar container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <?php
                $c=0;
                foreach ($nav as $pn) {
                    echo "<li class='nav-item row'>
                        <div class='col'>
                            <a class='nav-link h4' href='#'>$pn</a>
                        </div>
                        <div class='col'>
                            <button class='navbar-toggler float-right flecha' type='button' data-toggle='collapse' data-target='#collapsibleNavbar$c'>
                                <i class='fas fa-angle-down'></i>
                                <i class='fas fa-angle-left'></i>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div class='collapse navbar-collapse' id='collapsibleNavbar$c'>
                            <ul class='navbar-nav'>";
                        
                    foreach (${$nav[$c]} as $sn) {
                        echo "<li class='nav-item row'>
                            <div class='col'>
                                <a class='nav-link h4' href='#'>$sn</a>
                            </div>
                        </li>";
                    }
                    echo "      </ul>
                        </div>
                    </li>";
                    $c++;
                }
            ?>
        </ul>
    </div>
</nav>
