<?php
    echo "<nav class='navbar $pastaAtual container-fluid'>";
?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-bars"></i>
    </button>
    <a class="navbar-brand" href="#">
        <i class="fas fa-bowling-ball"></i>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbarlogin">
        <i class="fas fa-ellipsis-v trespontinhos"></i>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <?php
                foreach ($nav as $area => $pagina) {
                    echo "<li class='nav-item row'>
                        <div class='col'>
                            <a class='nav-link h4' href='".$corredor.strtolower(pato($area))."/index.php"."'>$area</a>
                        </div>
                        <div class='col'>
                            <button class='navbar-toggler float-right flecha' type='button' data-toggle='collapse' data-target='#collapsibleNavbar$area'>
                                <i class='fas fa-angle-down'></i>
                                <i class='fas fa-angle-left'></i>
                            </button>
                        </div>
                    </li>
                    <li>
                        <div class='collapse navbar-collapse' id='collapsibleNavbar$area'>
                            <ul class='navbar-nav ul-inside-collapse'>";
                        
                    foreach ($nav[$area] as $pagina) {
                        echo "<li class='nav-item row'>
                            <div class='col'>
                                <a class='nav-link h4' href='".$corredor.strtolower(pato($area))."/".strtolower(pato($pagina)).".php'>$pagina</a>
                            </div>
                        </li>";
                    }
                    echo "      </ul>
                        </div>
                    </li>";
                }
            ?>
        </ul>
    </div>
</nav>
